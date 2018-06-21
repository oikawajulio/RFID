package view;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import leitorRFID.Computador;
import leitorRFID.SerialComm;
import model.dao.ComputadorDAO;

import javax.swing.GroupLayout;
import javax.swing.GroupLayout.Alignment;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JSeparator;
import javax.swing.LayoutStyle.ComponentPlacement;
import java.awt.Color;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class CadastroComputador extends JFrame {

	private JPanel contentPane;
	private JTextField txtMarca;
	private JTextField txtModelo;
	private JTextField txtUsuario;
	private JTextField txtDepartamento;
	private JTextField txtCodigoPatrimonio;
	private JTextField txtQtdMemoria;
	private JTextField txtQtdHD;
	private JLabel lblidTag;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					CadastroComputador frame = new CadastroComputador();
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
	public CadastroComputador() {
		SerialComm com = new SerialComm();
		com.setCadastroComputador(this);
		setTitle("Cadastro de Computadores");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 586, 371);
		contentPane = new JPanel();
		contentPane.setForeground(Color.BLACK);
		contentPane.setBackground(new Color(0, 191, 255));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		
		JLabel label1 = new JLabel("ID TAG:  ");
		label1.setForeground(Color.WHITE);
		
		JSeparator separator = new JSeparator();
		
		lblidTag= new JLabel("id");
		lblidTag.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblidTag.setForeground(Color.YELLOW);
		
		JLabel lblNewLabel = new JLabel("Marca:");
		lblNewLabel.setForeground(Color.WHITE);
		
		txtMarca = new JTextField();
		txtMarca.setColumns(10);
		
		JLabel lblNewLabel_1 = new JLabel("Modelo:");
		lblNewLabel_1.setForeground(Color.WHITE);
		
		txtModelo = new JTextField();
		txtModelo.setColumns(10);
		
		JLabel lblNewLabel_2 = new JLabel("Usu\u00E1rio:");
		lblNewLabel_2.setForeground(Color.WHITE);
		
		txtUsuario = new JTextField();
		txtUsuario.setColumns(10);
		
		JLabel lblNewLabel_3 = new JLabel("Departamento:");
		lblNewLabel_3.setForeground(Color.WHITE);
		
		txtDepartamento = new JTextField();
		txtDepartamento.setColumns(10);
		
		JLabel lblNewLabel_4 = new JLabel("C\u00F3d. Patrim\u00F4nio");
		lblNewLabel_4.setForeground(Color.WHITE);
		
		txtCodigoPatrimonio = new JTextField();
		txtCodigoPatrimonio.setColumns(10);
		
		JLabel lblNewLabel_5 = new JLabel("Pacote Office");
		lblNewLabel_5.setForeground(Color.WHITE);
		
		JLabel lblNewLabel_6 = new JLabel("Qtd. de Mem\u00F3ria:");
		lblNewLabel_6.setForeground(Color.WHITE);
		
		txtQtdMemoria = new JTextField();
		txtQtdMemoria.setColumns(10);
		
		JLabel lblNewLabel_7 = new JLabel("Qtd. de HD");
		lblNewLabel_7.setForeground(Color.WHITE);
		
		JComboBox cbPacoteOficce = new JComboBox();
		cbPacoteOficce.setModel(new DefaultComboBoxModel(new String[] {"...", "Microsoft Office", "Libre Office "}));
		
		txtQtdHD = new JTextField();
		txtQtdHD.setColumns(10);
		
		JButton btnSalvar = new JButton("Salvar");
		btnSalvar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Computador computador = new Computador();
				ComputadorDAO dao = new ComputadorDAO();
				computador.setIdTag(lblidTag.getText());
				computador.setMarca(txtMarca.getText());
				computador.setModelo(txtModelo.getText());
				computador.setCodigo_patrimonio(txtCodigoPatrimonio.getText());
				computador.setNome_usuario(txtUsuario.getText());
				computador.setDepartamento(txtDepartamento.getText());
				computador.setHd(txtQtdHD.getText());
				computador.setMemoria(txtQtdMemoria.getText());
				computador.setPacote_office(cbPacoteOficce.getSelectedIndex());
				dao.adicionar(computador);
				JOptionPane.showMessageDialog(null,
						"Dados do computador Salvo com Sucesso!","Cadastro Efetuado com Sucesso!", JOptionPane.PLAIN_MESSAGE);
			
			}
		});
		btnSalvar.setFont(new Font("Tahoma", Font.BOLD, 11));
		GroupLayout gl_contentPane = new GroupLayout(contentPane);
		gl_contentPane.setHorizontalGroup(
			gl_contentPane.createParallelGroup(Alignment.LEADING)
				.addGroup(gl_contentPane.createSequentialGroup()
					.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addGroup(gl_contentPane.createSequentialGroup()
							.addComponent(label1)
							.addPreferredGap(ComponentPlacement.RELATED)
							.addComponent(lblidTag))
						.addComponent(separator, GroupLayout.PREFERRED_SIZE, 529, GroupLayout.PREFERRED_SIZE)
						.addGroup(gl_contentPane.createSequentialGroup()
							.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
								.addComponent(lblNewLabel_4)
								.addComponent(lblNewLabel_2)
								.addComponent(lblNewLabel))
							.addPreferredGap(ComponentPlacement.RELATED)
							.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
								.addComponent(txtMarca, GroupLayout.DEFAULT_SIZE, 137, Short.MAX_VALUE)
								.addComponent(txtUsuario, GroupLayout.DEFAULT_SIZE, 137, Short.MAX_VALUE)
								.addComponent(txtCodigoPatrimonio, GroupLayout.DEFAULT_SIZE, 151, Short.MAX_VALUE))
							.addGap(60)
							.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
								.addComponent(lblNewLabel_3)
								.addComponent(lblNewLabel_1)
								.addComponent(lblNewLabel_7)
								.addComponent(lblNewLabel_5))
							.addGap(28)
							.addGroup(gl_contentPane.createParallelGroup(Alignment.TRAILING)
								.addGroup(gl_contentPane.createSequentialGroup()
									.addComponent(txtModelo, GroupLayout.DEFAULT_SIZE, 151, Short.MAX_VALUE)
									.addPreferredGap(ComponentPlacement.RELATED))
								.addComponent(cbPacoteOficce, Alignment.LEADING, 0, 151, Short.MAX_VALUE)
								.addComponent(txtDepartamento, Alignment.LEADING, 147, 151, Short.MAX_VALUE)
								.addComponent(txtQtdHD, Alignment.LEADING, GroupLayout.DEFAULT_SIZE, 151, Short.MAX_VALUE))))
					.addGap(4))
				.addGroup(gl_contentPane.createSequentialGroup()
					.addComponent(lblNewLabel_6)
					.addPreferredGap(ComponentPlacement.RELATED)
					.addComponent(txtQtdMemoria, GroupLayout.DEFAULT_SIZE, 149, Short.MAX_VALUE)
					.addGap(323))
				.addGroup(gl_contentPane.createSequentialGroup()
					.addGap(200)
					.addComponent(btnSalvar, GroupLayout.PREFERRED_SIZE, 115, GroupLayout.PREFERRED_SIZE)
					.addContainerGap(218, Short.MAX_VALUE))
		);
		gl_contentPane.setVerticalGroup(
			gl_contentPane.createParallelGroup(Alignment.LEADING)
				.addGroup(gl_contentPane.createSequentialGroup()
					.addContainerGap()
					.addGroup(gl_contentPane.createParallelGroup(Alignment.BASELINE)
						.addComponent(label1)
						.addComponent(lblidTag))
					.addPreferredGap(ComponentPlacement.RELATED)
					.addComponent(separator, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
					.addGap(27)
					.addGroup(gl_contentPane.createParallelGroup(Alignment.BASELINE)
						.addComponent(lblNewLabel)
						.addComponent(txtMarca, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(txtModelo, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(lblNewLabel_1))
					.addGap(18)
					.addGroup(gl_contentPane.createParallelGroup(Alignment.BASELINE)
						.addComponent(lblNewLabel_2)
						.addComponent(txtUsuario, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(txtDepartamento, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(lblNewLabel_3))
					.addGap(18)
					.addGroup(gl_contentPane.createParallelGroup(Alignment.BASELINE)
						.addComponent(lblNewLabel_4)
						.addComponent(txtCodigoPatrimonio, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(cbPacoteOficce, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(lblNewLabel_5))
					.addPreferredGap(ComponentPlacement.UNRELATED)
					.addGroup(gl_contentPane.createParallelGroup(Alignment.BASELINE)
						.addComponent(lblNewLabel_6)
						.addComponent(txtQtdMemoria, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(txtQtdHD, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
						.addComponent(lblNewLabel_7))
					.addGap(37)
					.addComponent(btnSalvar)
					.addContainerGap(75, Short.MAX_VALUE))
		);
		contentPane.setLayout(gl_contentPane);
	}
	public void setIdTagPC(String tag) {
	 lblidTag.setText(tag);
	}
}

