<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_trivia_m extends MY_Model{
	
	protected $_table_name = 'hoopla_category_trivia';
	protected $_order_by = 'idCATTRIVIA';
	protected $_primary_key = 'idCATTRIVIA';

	public $rules_category_trivia= array(
		'namaCATTRIVIA' => array(
			'field' => 'namaCATTRIVIA', 
			'label' => 'Nama Kategori Trivia', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$cat = new stdClass();
		$cat->idCATTRIVIA = '';
		$cat->namaCATTRIVIA = '';
		$cat->statusTRIVIA = '';
		return $cat;
	}

	public function selectall_category_trivia($id=NULL) {
		$this->db->select('*');
		$this->db->from('category_trivia');
		if($id != NULL){
			$this->db->where('idCATTRIVIA', $id);
		}
		return $this->db->get();
	}
}