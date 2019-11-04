<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Produits_model');
		$this->load->model('Categories_model');
	}

	public function index(){
		$data['categories'] = $this->Categories_model->getAllCategories();
		$data['produits'] = $this->Produits_model->getAllProduits();
		$this->load->view('produit/produit_list.php', $data);
	}

	public function addnew(){
		$data['categories'] = $this->Categories_model->getAllCategories();
		$this->load->view('produit/addform.php', $data);
	}

	public function insert(){
		$produit['libelle_produit'] = $this->input->post('libelle_produit');
		$produit['qte'] = $this->input->post('qte');
		$produit['pu'] = $this->input->post('pu');
		$produit['categorie_id'] = $this->input->post('categorie_id');
		
		$query = $this->Produits_model->insertproduit($produit);

		if($query){
			header('location:'.base_url('index.php/prod/index'));
		}

	}

	public function edit($id_produit){
		$data['produit'] = $this->Produits_model->getproduit($id_produit);
		$data['categories'] = $this->Categories_model->getAllCategories();
		$this->load->view('produit/editform.php', $data);
	}

	public function update($id_produit){
		$produit['libelle_produit'] = $this->input->post('libelle_produit');
		$produit['qte'] = $this->input->post('qte');
		$produit['pu'] = $this->input->post('pu');
		$produit['categorie_id'] = $this->input->post('categorie_id');

		$query = $this->Produits_model->updateproduit($produit, $id_produit);

		if($query){
			header('location:'.base_url('index.php/prod/index'));
		}
	}

	public function delete($id_produit){
		$query = $this->Produits_model->deleteproduit($id_produit);

		if($query){
			header('location:'.base_url('index.php/prod/index'));
		}
	}
}


?>