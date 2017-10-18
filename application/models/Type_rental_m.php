<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_rental_m extends MY_Model{
	
	protected $_table_name = 'hoopla_type_rental';
	protected $_order_by = 'idTYPE';
	protected $_primary_key = 'idTYPE';

	public $rules_type_rental = array(
		'namaTYPE' => array(
			'field' => 'namaTYPE', 
			'label' => 'Nama Type Barang Rental', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$cat = new stdClass();
		$cat->idTYPE = '';
		$cat->namaTYPE = '';
		$cat->statusTYPE = '';
		return $cat;
	}

	public function selectall_type_rental($id=NULL) {
		$this->db->select('*');
		$this->db->from('type_rental');
		if($id != NULL){
			$this->db->where('idTYPE', $id);
		}
		return $this->db->get();
	}

	public function dropdown_gettype($dropdown=NULL){
		$this->db->from('type_rental');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idTYPE] = $value->namaTYPE;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}
}