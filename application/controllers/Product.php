<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->model('productmodel');
		$data['products'] = $this->productmodel->getProduct();
		$data['categories'] = $this->productmodel->getCategory();
		$this->load->view('products', $data);
	}

	// public function getCategory(){
	// 	$this->load->model('productmodel');
	// 	$data['product'] = $this->productmodel->getCategory();
	// 	$this->load->view('products', $data);
	// }
}

?>