<?php
	class Produits_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllProduits(){
			$query = $this->db->get('produits');
			return $query->result(); 
		}

		public function insertProduit($Produit){
			return $this->db->insert('produits', $Produit);
		}

		public function getProduit($id_produit){
			$query = $this->db->get_where('produits',array('id_produit'=>$id_produit));
			return $query->row_array();
		}

		public function updateProduit($Produit, $id_produit){
			$this->db->where('produits.id_produit', $id_produit);
			return $this->db->update('produits', $Produit);
		}

		public function deleteProduit($id_produit){
			$this->db->where('produits.id_produit', $id_produit);
			return $this->db->delete('produits');
		}
       /* public function getQte($id_produit){
			$query=$this->db->query("select qte from produits where ".$id_produit);
			return $query->result_array();
		}
		public function updateQte($qtedemmande,$id_produit){
		
		}*/
	}
?>