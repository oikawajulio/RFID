package leitorRFID;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStream;
import gnu.io.CommPortIdentifier;
import gnu.io.SerialPort;
import gnu.io.SerialPortEvent;
import gnu.io.SerialPortEventListener;
import model.dao.ImpressoraDAO;
import view.CadastroComputador;
import view.CadastroImpressora;
import view.TelaCadastro;

import java.util.Enumeration;

public class SerialComm implements SerialPortEventListener {
	SerialPort serialPort;
	private CadastroImpressora cadastroImpressora;
	private CadastroComputador cadastroComputador;
	private TelaCadastro tc;
	private String IdTag;
	private String IdTagPC;

	public void setIdTag(String idTag) {
		IdTag = idTag;
		cadastroImpressora.setIdTag(idTag);

	}

	public void setIdTagPC(String tag) {
		IdTagPC = tag;
		cadastroComputador.setIdTagPC(tag);
	}

	/** The port we're normally going to use. */
	private static final String PORT = "COM5";

	private BufferedReader input;
	/** The output stream to the port */
	private OutputStream output;
	/** Milliseconds to block while waiting for port open */
	private static final int TIME_OUT = 2000;
	/** Default bits per second for COM port. */
	private static final int DATA_RATE = 9600;

	public void initialize(TelaCadastro tela) {

		System.out.println("inicio");

		tc = tela;

		System.setProperty("gnu.io.rxtx.SerialPorts", PORT);

		CommPortIdentifier portId = null;
		Enumeration portEnum = CommPortIdentifier.getPortIdentifiers();

		// First, Find an instance of serial port as set in PORT_NAMES.
		while (portEnum.hasMoreElements()) {
			CommPortIdentifier currPortId = (CommPortIdentifier) portEnum.nextElement();
			if (currPortId.getName().equals(PORT)) {
				portId = currPortId;
				break;
			}
		}
		if (portId == null) {
			System.out.println("Could not find COM port.");
			return;
		}

		try {
			// open serial port, and use class name for the appName.
			serialPort = (SerialPort) portId.open(this.getClass().getName(), TIME_OUT);

			// set port parameters
			serialPort.setSerialPortParams(DATA_RATE, SerialPort.DATABITS_8, SerialPort.STOPBITS_1,
					SerialPort.PARITY_NONE);

			// open the streams
			input = new BufferedReader(new InputStreamReader(serialPort.getInputStream()));
			output = serialPort.getOutputStream();

			// add event listeners
			serialPort.addEventListener(this);
			serialPort.notifyOnDataAvailable(true);
		} catch (Exception e) {
			System.err.println(e.toString());
		}
	}

	/**
	 * This should be called when you stop using the port. This will prevent port
	 * locking on platforms like Linux.
	 */
	public synchronized void close() {
		if (serialPort != null) {
			serialPort.removeEventListener();
			serialPort.close();
		}
	}

	/**
	 * Handle an event on the serial port. Read the data and print it.
	 */
	public synchronized void serialEvent(SerialPortEvent oEvent) {
		if (oEvent.getEventType() == SerialPortEvent.DATA_AVAILABLE) {
			try {
				String dados = input.readLine();
				System.out.println(dados);
				setIdTag(dados);
				setIdTagPC(input.readLine());
   	       } catch (Exception e) {
				System.err.println(e.toString());
			}
		}
	}

	public void setCadastroImpressora(CadastroImpressora cadastroImpressora) {

		this.cadastroImpressora = cadastroImpressora;
	}

	public void setCadastroComputador(CadastroComputador cadastroComputador) {

		this.cadastroComputador = cadastroComputador;
	}

	public static void main(String[] args) throws Exception {
		SerialComm main = new SerialComm();
		main.initialize(null);
		Thread t = new Thread() {
			public void run() {
				// the following line will keep this app alive for 1000 seconds,
				// waiting for events to occur and responding to them (printing incoming
				// messages to console).
				try {
					Thread.sleep(1000000);
				} catch (InterruptedException ie) {
				}
			}
		};
		t.start();
		System.out.println("Started");
	}
}