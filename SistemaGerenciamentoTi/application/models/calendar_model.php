<?php

class Calendar_Model extends CI_Model
{
function _contruct(){
      parent::_construct();    
    }  

		public function get_events($start, $end){
                        
        return $this->db->where("start >=", $start)->where("end <=", $end)->get("tblagendar_manutencao");
}

			public function add_event($data)
			{
				$this->db->insert("tblagendar_manutencao", $data);
			}

			public function get_event($id)
			{
				return $this->db->where("idAgendar", $id)->get("tblagendar_manutencao");
			}

			public function update_event($id, $data)
			{
				$this->db->where("idAgendar", $id)->update("tblagendar_manutencao", $data);
			}

			public function delete_event($id)
			{
				$this->db->where("idAgendar", $id)->delete("tblagendar_manutencao");
			}
       
			
			public function get_agendamentos(){
				return $this->db->get("tblagendar_manutencao")->result();
				  
			}
}

?>