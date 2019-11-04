<?php
	class Commandes_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllCommandes(){
			$query = $this->db->get('commandes');
			return $query->result(); 
		}

		public function insertCommande($Commande){
			$prod = $this->db->get_where('produits',array('id_produit'=>$Commande->produit_id))->row_array();
			$prod['qte'] -= $Commande->qtecmd;
			$this->db->update('produits',$prod,array('id_produit'=>$Commande->produit_id));
			return $this->db->insert('commandes', $Commande);
		}

		public function getCommande($id_cmd){
			$query = $this->db->get_where('commandes',array('id_cmd'=>$id_cmd));
			return $query->row_array();
		}

		public function updateCommande($Commande, $id_cmd){
			$this->db->where('commandes.id_cmd', $id_cmd);
			return $this->db->update('commandes', $Commande);
		}

		public function deleteCommande($id_cmd){
			$this->db->where('commandes.id_cmd', $id_cmd);
			return $this->db->delete('commandes');
		}

	}
?>