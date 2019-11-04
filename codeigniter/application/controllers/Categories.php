<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('categories_model');
	}

	public function index(){
		$data['categories'] = $this->categories_model->getAllCategories();
		$this->load->view('categorie/categorie_list.php', $data);
	}

	public function addnew(){
		$this->load->view('categorie/addform.php');
	}

	public function insert(){
		$categorie['libelle_categorie'] = $this->input->post('libelle_categorie');
		
		$query = $this->categories_model->insertcategorie($categorie);

		if($query){
			header('location:'.base_url('index.php/cat/index'));
		}

	}

	public function edit($id){
		$data['categorie'] = $this->categories_model->getcategorie($id);
		$this->load->view('categorie/editform', $data);
	}

	public function update($id){
		$categorie['libelle_categorie'] = $this->input->post('libelle_categorie');

		$query = $this->categories_model->updatecategorie($categorie, $id);

		if($query){
			header('location:'.base_url('index.php/cat/index'));
		}
	}

	public function delete($id){
		$query = $this->categories_model->deletecategorie($id);

		if($query){
			header('location:'.base_url('index.php/cat/index'));
		}
	}
}


?>