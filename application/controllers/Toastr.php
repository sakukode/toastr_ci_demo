<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toastr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->library('session');
		$this->load->helper('url');
	}
	/**
	 * Menampilkan form
	 * @return [type] [description]
	 */					
	public function index()
	{
		$this->load->view('demo/toastr');
	}

	/**
	 * Memproses action dari form
	 * Mengambil variabel nama dari input name
	 * Mengeset pesan/notifikasi untuk nantinya ditampilkan dengan toastr pada view
	 * @return [type] [description]
	 */
	public function post()
	{
		//get name from input
		$name = $this->input->post('name');
		//set sucess message using flashdata
		$this->session->set_flashdata('success', 'Selamat datang, '.$name);

		redirect('toastr');
	}
}
