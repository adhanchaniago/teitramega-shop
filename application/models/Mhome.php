<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {

	public function get_kategori()
	{		
		$this->db->limit(8);
		return $this->db->get('kategori')->result();		
	}

	public function get_sub_kategori($param = 0)
	{
		return $this->db->get_where('sub_kategori', array('id_kategori' => $param) )->result();		
	}	

	public function get_produk_kategori($param = 0)
	{
		return $this->db->get_where('produk', array('id_kategori' => $param) )->result();	
	}
}

