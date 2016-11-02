<?php
class tilaus_model extends CI_Model 
	{

		public function getTilaus() {
			$this->db->select('etunimi,sukunimi,tuote');
			$this->db->from('asiakas');
			$this->db->join('tilaus','asiakas.id_asiakas=tilaus.id_asiakas','left');
			return $this->db->get()->result_array();
		}

		public function searchTilaus($id){
			$this->db->select('tuote');
			$this->db->from('tilaus');
			$this->db->where('id_asiakas',$id);
			return $this->db->get()->result_array();

		}
}