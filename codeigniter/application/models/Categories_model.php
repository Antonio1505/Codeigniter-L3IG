<?php
	class Categories_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllCategories(){
			$query = $this->db->get('categories');
			return $query->result(); 
		}

		public function insertCategorie($Categorie){
			return $this->db->insert('categories', $Categorie);
		}

		public function getCategorie($id_categorie){
			$query = $this->db->get_where('categories',array('id_categorie'=>$id_categorie));
			return $query->row_array();
		}

		public function updateCategorie($Categorie, $id_categorie){
			$this->db->where('categories.id_categorie', $id_categorie);
			return $this->db->update('categories', $Categorie);
		}

		public function deleteCategorie($id_categorie){
			$this->db->where('categories.id_categorie', $id_categorie);
			return $this->db->delete('categories');
		}

	}
?>