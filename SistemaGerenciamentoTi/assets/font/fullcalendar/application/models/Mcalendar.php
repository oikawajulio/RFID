<?php
/**
* 
*/
class Mcalendar extends CI_Model
{
	
	public function getEventos(){
		$this->db->select('idEvento id, nombre title, fecInicio start, fecFin end, url');
		$this->db->from('eventos');

		return $this->db->get()->result();
	}

	public function updEvento($param){
		$campos = array(
			'fecInicio' => $param['fecini'],
			'fecFin' => $param['fecfin']
			);

		$this->db->where('idEvento',$param['id']);
		$this->db->update('eventos',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	public function deleteEvento($id){
		$this->db->where('idEvento', $id);
		return $this->db->delete('eventos');
	}

	public function updEvento2($param){
		$campos = array(
			'nombre' => $param['nome'],
			'url' => $param['web']
			);

		$this->db->where('idEvento',$param['id']);
		$this->db->update('eventos',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}
}