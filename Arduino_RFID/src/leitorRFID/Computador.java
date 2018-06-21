package leitorRFID;

public class Computador {
    private int idComputador;
	private String codigo_patrimonio;
	private String marca;
	private String modelo;
	private String departamento;
	private String nome_usuario;
	private String memoria;
	private String hd;
	private int pacote_office;
	private String idTag;
	
	public String getIdTag() {
		return idTag;
	}
	public void setIdTag(String idTag) {
		this.idTag = idTag;
	}
	public int getIdComputador() {
		return idComputador;
	}
	public void setIdComputador(int idComputador) {
		this.idComputador = idComputador;
	}
	public String getCodigo_patrimonio() {
		return codigo_patrimonio;
	}
	public void setCodigo_patrimonio(String codigo_patrimonio) {
		this.codigo_patrimonio = codigo_patrimonio;
	}
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca) {
		this.marca = marca;
	}
	public String getModelo() {
		return modelo;
	}
	public void setModelo(String modelo) {
		this.modelo = modelo;
	}
	public String getDepartamento() {
		return departamento;
	}
	public void setDepartamento(String departamento) {
		this.departamento = departamento;
	}
	public String getNome_usuario() {
		return nome_usuario;
	}
	public void setNome_usuario(String nome_usuario) {
		this.nome_usuario = nome_usuario;
	}
	public String getMemoria() {
		return memoria;
	}
	public void setMemoria(String memoria) {
		this.memoria = memoria;
	}
	public String getHd() {
		return hd;
	}
	public void setHd(String hd) {
		this.hd = hd;
	}
	
	
	public void setPacote_office(int pacote_office) {
		this.pacote_office = pacote_office;
	}
	public int getPacote_office() {
		
		return pacote_office;
	}
	

}
