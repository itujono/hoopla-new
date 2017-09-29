<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_rental_m extends MY_Model{
	
	protected $_table_name = 'hoopla_category_rental';
	protected $_order_by = 'idCATEGORY';
	protected $_primary_key = 'idCATEGORY';

	public $rules_category_rental = array(
		'namaCATEGORY' => array(
			'field' => 'namaCATEGORY', 
			'label' => 'Nama Kategori Barang Rental', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$cat = new stdClass();
		$cat->idCATEGORY = '';
		$cat->namaCATEGORY = '';
		$cat->statusCATEGORY = '';
		return $cat;
	}

	public function selectall_category_rental($id=NULL) {
		$this->db->select('*');
		$this->db->from('category_rental');
		if($id != NULL){
			$this->db->where('idCATEGORY', $id);
		}
		return $this->db->get();
	}
}