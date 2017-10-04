<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_rental_m extends MY_Model{
	
	protected $_table_name = 'hoopla_brand_rental';
	protected $_order_by = 'idBRAND';
	protected $_primary_key = 'idBRAND';

	public $rules_brand_rental = array(
		'namaBRAND' => array(
			'field' => 'namaBRAND', 
			'label' => 'Nama Brand Barang Rental', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$cat = new stdClass();
		$cat->idBRAND = '';
		$cat->namaBRAND = '';
		$cat->statusBRAND = '';
		return $cat;
	}

	public function selectall_brand_rental($id=NULL) {
		$this->db->select('*');
		$this->db->from('brand_rental');
		if($id != NULL){
			$this->db->where('idBRAND', $id);
		}
		return $this->db->get();
	}

	public function dropdown_getbrand($dropdown=NULL){
		$this->db->cache_on();
		$this->db->from('brand_rental');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idBRAND] = $value->namaBRAND;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}
}