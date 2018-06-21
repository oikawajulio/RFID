package view;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import leitorRFID.Impressora;
import leitorRFID.SerialComm;
import model.dao.ImpressoraDAO;

import javax.swing.GroupLayout;
import javax.swing.GroupLayout.Alignment;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JList;
import javax.swing.JOptionPane;
import javax.swing.LayoutStyle.ComponentPlacement;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Color;
import java.awt.Font;
import javax.swing.JSeparator;
import javax.swing.SwingConstants;

public class CadastroImpressora extends JFrame {

	private JPanel contentPane;
	private JTextField txtMarca;
	private JTextField txtModelo;
	private JTextField txtUsuario;
	private JTextField txtDepartamento;
	private JLabel lblIdTag;
	private JLabel lblIdTag1;
	private JTextField txtCodigoPatrimonio;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					CadastroImpressora frame = new CadastroImpressora();
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
	public CadastroImpressora() {
		SerialComm com = new SerialComm();
		com.setCadastroImpressora(this);

		setTitle("Cadastro de Impressora");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 565, 387);
		contentPane = new JPanel();
		contentPane.setForeground(Color.WHITE);
		contentPane.setBackground(new Color(0, 191, 255));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);

		lblIdTag = new JLabel("ID TAG:");
		lblIdTag.setForeground(Color.WHITE);

		JLabel lblNewLabel = new JLabel("Marca");
		lblNewLabel.setForeground(Color.WHITE);

		txtMarca = new JTextField();
		txtMarca.setColumns(10);

		JLabel lblNewLabel_1 = new JLabel("Modelo");
		lblNewLabel_1.setForeground(Color.WHITE);

		txtModelo = new JTextField();
		txtModelo.setColumns(10);

		txtUsuario = new JTextField();
		txtUsuario.setColumns(10);

		JLabel lblNewLabel_2 = new JLabel("Usu\u00E1rio");
		lblNewLabel_2.setForeground(Color.WHITE);

		JLabel lblNewLabel_3 = new JLabel("Status");
		lblNewLabel_3.setForeground(Color.WHITE);

		JList list = new JList();

		JComboBox cbStatus = new JComboBox();
		cbStatus.setModel(new DefaultComboBoxModel(new String[] { "Ativo", "Inativo" }));
		cbStatus.setToolTipText("...");

		JLabel lblNewLabel_4 = new JLabel("Departamento");
		lblNewLabel_4.setForeground(Color.WHITE);
		lblIdTag1 = new JLabel("id");
		lblIdTag1.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblIdTag1.setForeground(Color.YELLOW);
		txtDepartamento = new JTextField();
		txtDepartamento.setColumns(10);

		JButton btnSalvar = new JButton("Salvar");
		btnSalvar.setFont(new Font("Tahoma", Font.BOLD, 11));
		btnSalvar.setForeground(Color.BLACK);
		btnSalvar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Impressora impressora = new Impressora();
				ImpressoraDAO dao = new ImpressoraDAO();
				impressora.setIdTag(lblIdTag1.getText());
				impressora.setMarca(txtMarca.getText());
				impressora.setModelo(txtModelo.getText());
				impressora.setCodigo_patrimonio(txtCodigoPatrimonio.getText());
				impressora.setNome_usuario(txtUsuario.getText());
				impressora.setDepartamento(txtDepartamento.getText());
				impressora.setStatus(cbStatus.getSelectedIndex());
				dao.adicionar(impressora);
				JOptionPane.showMessageDialog(null, "Informação da Impressora Salvo com Sucesso!",
						"Cadastro Efetuado com Sucesso!", JOptionPane.PLAIN_MESSAGE);

			}
		});

		JLabel lblNewLabel_5 = new JLabel("C\u00F3d. de Patrim\u00F4nio");
		lblNewLabel_5.setForeground(Color.WHITE);

		txtCodigoPatrimonio = new JTextField();
		txtCodigoPatrimonio.setColumns(10);

		JSeparator separator = new JSeparator();

		JSeparator separator_1 = new JSeparator();

		JSeparator separator_2 = new JSeparator();

		JSeparator separator_3 = new JSeparator();
		separator_3.setOrientation(SwingConstants.VERTICAL);
		separator_3.setForeground(Color.WHITE);
		GroupLayout gl_contentPane = new GroupLayout(contentPane);
		gl_contentPane.setHorizontalGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
				.addComponent(separator_2, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
						GroupLayout.PREFERRED_SIZE)
				.addGroup(gl_contentPane.createSequentialGroup().addGap(15).addComponent(lblIdTag).addGap(15)
						.addComponent(lblIdTag1))
				.addGroup(gl_contentPane.createSequentialGroup().addGap(5).addComponent(separator,
						GroupLayout.PREFERRED_SIZE, 554, GroupLayout.PREFERRED_SIZE))
				.addGroup(gl_contentPane.createSequentialGroup().addGap(15)
						.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
								.addComponent(separator_3, GroupLayout.PREFERRED_SIZE, 11, GroupLayout.PREFERRED_SIZE)
								.addGroup(gl_contentPane.createSequentialGroup().addGap(5).addComponent(lblNewLabel)))
						.addGap(66).addComponent(txtMarca, GroupLayout.PREFERRED_SIZE, 146, GroupLayout.PREFERRED_SIZE)
						.addGap(32).addComponent(lblNewLabel_1).addGap(65)
						.addComponent(txtModelo, GroupLayout.PREFERRED_SIZE, 125, GroupLayout.PREFERRED_SIZE))
				.addGroup(gl_contentPane.createSequentialGroup().addGap(20).addComponent(lblNewLabel_2).addGap(59)
						.addComponent(txtUsuario, GroupLayout.PREFERRED_SIZE, 146, GroupLayout.PREFERRED_SIZE)
						.addGap(32).addComponent(lblNewLabel_4).addGap(30)
						.addComponent(txtDepartamento, GroupLayout.PREFERRED_SIZE, 125, GroupLayout.PREFERRED_SIZE))
				.addGroup(gl_contentPane.createSequentialGroup().addGap(9).addComponent(lblNewLabel_5).addGap(10)
						.addComponent(txtCodigoPatrimonio, GroupLayout.PREFERRED_SIZE, 151, GroupLayout.PREFERRED_SIZE)
						.addGap(32).addComponent(lblNewLabel_3).addGap(64)
						.addComponent(cbStatus, GroupLayout.PREFERRED_SIZE, 129, GroupLayout.PREFERRED_SIZE))
				.addGroup(gl_contentPane.createSequentialGroup().addGap(201)
						.addComponent(btnSalvar, GroupLayout.PREFERRED_SIZE, 113, GroupLayout.PREFERRED_SIZE)
						.addGap(197).addComponent(list, GroupLayout.PREFERRED_SIZE, 1, GroupLayout.PREFERRED_SIZE))
				.addGroup(gl_contentPane.createSequentialGroup().addGap(5).addComponent(separator_1,
						GroupLayout.PREFERRED_SIZE, 544, GroupLayout.PREFERRED_SIZE)));
		gl_contentPane.setVerticalGroup(gl_contentPane.createParallelGroup(Alignment.LEADING).addGroup(gl_contentPane
				.createSequentialGroup()
				.addComponent(separator_2, GroupLayout.PREFERRED_SIZE, 0, GroupLayout.PREFERRED_SIZE).addGap(5)
				.addGroup(gl_contentPane
						.createParallelGroup(Alignment.LEADING).addComponent(lblIdTag).addComponent(lblIdTag1))
				.addGap(6)
				.addComponent(
						separator, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
				.addGap(10)
				.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addGroup(gl_contentPane.createSequentialGroup().addGap(3)
								.addComponent(separator_3, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
										GroupLayout.PREFERRED_SIZE)
								.addGap(6).addComponent(lblNewLabel))
						.addComponent(txtMarca, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
								GroupLayout.PREFERRED_SIZE)
						.addGroup(gl_contentPane.createSequentialGroup().addGap(3).addComponent(lblNewLabel_1))
						.addComponent(txtModelo, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
								GroupLayout.PREFERRED_SIZE))
				.addGap(25)
				.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addGroup(gl_contentPane.createSequentialGroup().addGap(7).addComponent(lblNewLabel_2))
						.addGroup(gl_contentPane.createSequentialGroup().addGap(7).addComponent(txtUsuario,
								GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
						.addGroup(gl_contentPane.createSequentialGroup().addGap(10).addComponent(lblNewLabel_4))
						.addComponent(txtDepartamento, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
								GroupLayout.PREFERRED_SIZE))
				.addGap(29)
				.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addGroup(gl_contentPane.createSequentialGroup().addGap(3).addComponent(lblNewLabel_5))
						.addComponent(txtCodigoPatrimonio, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
								GroupLayout.PREFERRED_SIZE)
						.addGroup(gl_contentPane.createSequentialGroup().addGap(3).addComponent(lblNewLabel_3))
						.addComponent(cbStatus, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE,
								GroupLayout.PREFERRED_SIZE))
				.addGap(27)
				.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addComponent(btnSalvar, GroupLayout.PREFERRED_SIZE, 33, GroupLayout.PREFERRED_SIZE)
						.addGroup(gl_contentPane.createSequentialGroup().addGap(8).addComponent(list,
								GroupLayout.PREFERRED_SIZE, 1, GroupLayout.PREFERRED_SIZE)))
				.addGap(99).addComponent(separator_1, GroupLayout.PREFERRED_SIZE, 1, GroupLayout.PREFERRED_SIZE)));
		contentPane.setLayout(gl_contentPane);

	}

	public void setIdTag(String idTag) {
		lblIdTag1.setText(idTag);
	}

}
