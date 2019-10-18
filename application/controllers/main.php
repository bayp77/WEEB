<?php
class main extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['berita'] = $this->data->tampil_data()->result();
		$this->load->view('home',$data);
	}
	

	public function isi()
    {   
        $u = 1; //we need to set value for spesific id
        //we can only call the model's function in controller 
        $data['call_id'] = $this->mo_product->call_by_id($u);

        $this->load->view('isi', $data);
    }
}


