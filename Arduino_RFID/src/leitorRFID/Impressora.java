package leitorRFID;

public class Impressora {
	private int idImpressora;
	private String marca;
	private String modelo;
	private String nome_usuario;
	private String departamento;
	private int status;
	private String codigo_patrimonio;
	private String idTag;
	
	public String getIdTag() {
		return idTag;
	}
	public void setIdTag(String idTag) {
		this.idTag = idTag;
	}
	public String getNome_usuario() {
		return nome_usuario;
	}
	public void setNome_usuario(String nome_usuario) {
		this.nome_usuario = nome_usuario;
	}
	public int getIdImpressora() {
		return idImpressora;
	}
	public void setIdImpressora(int idImpressora) {
		this.idImpressora = idImpressora;
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
	public String getCodigo_patrimonio() {
		return codigo_patrimonio;
	}
	public void setCodigo_patrimonio(String codigo_patrimonio) {
		this.codigo_patrimonio = codigo_patrimonio;
	}
	public String getDepartamento() {
		return departamento;
	}
	public void setDepartamento(String departamento) {
		this.departamento = departamento;
	}
	public int getStatus() {
		return status;
	}
	public void setStatus(int status) {
		this.status = status;
	}
	
	
	
	
	
}
