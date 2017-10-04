<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Age_rental_m extends MY_Model{
	
	protected $_table_name = 'hoopla_age_rental';
	protected $_order_by = 'idAGE';
	protected $_primary_key = 'idAGE';

	public $rules_age_rental = array(
		'namaAGE' => array(
			'field' => 'namaAGE', 
			'label' => 'Nama Age Barang Rental', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$cat = new stdClass();
		$cat->idAGE = '';
		$cat->namaAGE = '';
		$cat->statusAGE = '';
		return $cat;
	}

	public function selectall_age_rental($id=NULL) {
		$this->db->select('*');
		$this->db->from('age_rental');
		if($id != NULL){
			$this->db->where('idAGE', $id);
		}
		return $this->db->get();
	}

	public function dropdown_getage($dropdown=NULL){
		$this->db->cache_on();
		$this->db->from('age_rental');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idAGE] = $value->namaAGE;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}
}