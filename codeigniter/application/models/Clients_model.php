<?php
	class Clients_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllClients(){
			$query = $this->db->get('clients');
			return $query->result(); 
		}

		public function insertClient($Client){
			return $this->db->insert('clients', $Client);
		}

		public function getClient($id_client){
			$query = $this->db->get_where('clients',array('id_client'=>$id_client));
			return $query->row_array();
		}

		public function updateClient($Client, $id_client){
			$this->db->where('clients.id_client', $id_client);
			return $this->db->update('clients', $Client);
		}

		public function deleteClient($id_client){
			$this->db->where('clients.id_client', $id_client);
			return $this->db->delete('clients');
		}

	}
?>