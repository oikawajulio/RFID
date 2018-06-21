package view;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import leitorRFID.SerialComm;

import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.GroupLayout;
import javax.swing.GroupLayout.Alignment;
import java.awt.Font;
import java.awt.SystemColor;
import javax.swing.JSeparator;
import javax.swing.JLabel;
import java.awt.Color;
import javax.swing.LayoutStyle.ComponentPlacement;
import javax.swing.ImageIcon;
import javax.swing.SwingConstants;
import javax.swing.JTextPane;

public class TelaCadastro extends JFrame {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private SerialComm serial;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					TelaCadastro frame = new TelaCadastro();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public TelaCadastro() {
		setTitle("CADASTRO RFID");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 547, 374);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		contentPane.setLayout(new BorderLayout(0, 0));
		setContentPane(contentPane);
		
		JPanel panel = new JPanel();
		panel.setBackground(new Color(0, 191, 255));
		contentPane.add(panel, BorderLayout.NORTH);
		
		JButton btnImpressora = new JButton("Impressora");
		btnImpressora.setForeground(new Color(0, 153, 204));
		btnImpressora.setIcon(new ImageIcon("C:\\Users\\Jailton Ferreira\\Documents\\Arduino_RFID\\img\\imp.png"));
		btnImpressora.setFont(new Font("Tahoma", Font.BOLD, 12));
		btnImpressora.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				CadastroImpressora frame = new CadastroImpressora();
				serial.setCadastroImpressora(frame);
				 frame.setVisible(true);
			}
		});
		
		JButton btnComputador = new JButton("Computador");
		btnComputador.setForeground(new Color(0, 153, 204));
		btnComputador.setIcon(new ImageIcon("C:\\Users\\Jailton Ferreira\\Documents\\Arduino_RFID\\img\\imgpc.png"));
		btnComputador.setBackground(SystemColor.window);
		btnComputador.setFont(new Font("Tahoma", Font.BOLD, 13));
		btnComputador.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				CadastroComputador frame = new CadastroComputador();
				frame.setVisible(true);
			}
			
		});
		
		JSeparator separator = new JSeparator();
		
		JLabel lblNewLabel = new JLabel("");
		lblNewLabel.setForeground(Color.WHITE);
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 14));
		
		JLabel lblNewLabel_1 = new JLabel("CADASTRO DE ATIVOS - TAG RFID");
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblNewLabel_1.setForeground(SystemColor.inactiveCaptionBorder);
		
		JLabel lblNewLabel_2 = new JLabel("");
		lblNewLabel_2.setIcon(new ImageIcon("C:\\Users\\Jailton Ferreira\\Documents\\Arduino_RFID\\img\\logoMarca.png"));
		GroupLayout gl_panel = new GroupLayout(panel);
		gl_panel.setHorizontalGroup(
			gl_panel.createParallelGroup(Alignment.LEADING)
				.addGroup(gl_panel.createSequentialGroup()
					.addContainerGap(42, Short.MAX_VALUE)
					.addComponent(btnImpressora, GroupLayout.PREFERRED_SIZE, 198, GroupLayout.PREFERRED_SIZE)
					.addGap(33)
					.addComponent(btnComputador, GroupLayout.PREFERRED_SIZE, 191, GroupLayout.PREFERRED_SIZE)
					.addGap(57))
				.addComponent(separator, GroupLayout.DEFAULT_SIZE, 521, Short.MAX_VALUE)
				.addGroup(gl_panel.createSequentialGroup()
					.addGap(162)
					.addComponent(lblNewLabel)
					.addContainerGap(380, Short.MAX_VALUE))
				.addGroup(gl_panel.createSequentialGroup()
					.addGap(139)
					.addGroup(gl_panel.createParallelGroup(Alignment.TRAILING)
						.addComponent(lblNewLabel_1)
						.addComponent(lblNewLabel_2))
					.addContainerGap(163, Short.MAX_VALUE))
		);
		gl_panel.setVerticalGroup(
			gl_panel.createParallelGroup(Alignment.LEADING)
				.addGroup(gl_panel.createSequentialGroup()
					.addContainerGap()
					.addComponent(lblNewLabel)
					.addPreferredGap(ComponentPlacement.RELATED)
					.addComponent(lblNewLabel_2)
					.addGap(18)
					.addComponent(lblNewLabel_1)
					.addGap(16)
					.addComponent(separator, GroupLayout.PREFERRED_SIZE, 4, GroupLayout.PREFERRED_SIZE)
					.addGap(44)
					.addGroup(gl_panel.createParallelGroup(Alignment.BASELINE)
						.addComponent(btnComputador, GroupLayout.PREFERRED_SIZE, 48, GroupLayout.PREFERRED_SIZE)
						.addComponent(btnImpressora, GroupLayout.PREFERRED_SIZE, 49, GroupLayout.PREFERRED_SIZE))
					.addContainerGap(157, Short.MAX_VALUE))
		);
		panel.setLayout(gl_panel);
		
		// Add serial commmunication:
				serial = new SerialComm();
				serial.initialize(this);
	}
}
