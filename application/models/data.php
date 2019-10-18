<?php 
 
class data extends CI_Model{
	function tampil_data(){
		return $this->db->get('berita');
	}
public function berita($ID){
        $this->db->select('berita');
        $this->db->from($this->berita);
        $this->db->where('ID', $u);
        $query = $this->db->get();
        return $query->result();
    }
}

    ?>