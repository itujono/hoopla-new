<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_sale_m extends MY_Model{
	
	protected $_table_name = 'hoopla_category_sale';
	protected $_order_by = 'idCATSALE';
	protected $_primary_key = 'idCATSALE';

	public $rules_category_sale= array(
		'namaCATSALE' => array(
			'field' => 'namaCATSALE', 
			'label' => 'Nama Kategori Barang Sale', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$sale = new stdClass();
		$sale->idCATSALE = '';
		$sale->namaCATSALE = '';
		$sale->statusCATSALE = '';
		return $sale;
	}

	public function selectall_category_sale($id=NULL) {
		$this->db->select('*');
		$this->db->from('category_sale');
		if($id != NULL){
			$this->db->where('idCATSALE', $id);
		}
		return $this->db->get();
	}
}