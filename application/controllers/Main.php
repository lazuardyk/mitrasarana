<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function about(){
		$this->load->view('about');
	}

	public function contactus(){
		$this->load->view('contact-us');
	}

	public function detailproduct(){
		$this->load->view('detail-product');
	}

	public function guestbook(){
		$this->load->view('guest-book');
	}

	public function news(){
		$this->load->view('news');
	}

	public function services(){
		$this->load->view('services');
	}
}
