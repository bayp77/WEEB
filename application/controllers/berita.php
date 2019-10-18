<?php
class berita extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['berita'] = $this->data->tampil_data()->result();
		$this->load->view('isi',$data);
	}
}