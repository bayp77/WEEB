<?php 
 
class isidata extends CI_Model{
	function tampil_data(){
		return $this->db->get('berita');
	}
}