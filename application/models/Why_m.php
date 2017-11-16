<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Why_m extends MY_Model{
	
	protected $_table_name = 'hoopla_why';
	protected $_order_by = 'idWHY';
	protected $_primary_key = 'idWHY';

	public $rules_why = array(
		'titleWHY' => array(
			'field' => 'titleWHY', 
			'label' => 'Title', 
			'rules' => 'trim|required'
		),
		'descWHY' => array(
			'field' => 'descWHY', 
			'label' => 'Deskripsi', 
			'rules' => 'trim|required'
		),
		'pointWHY' => array(
			'field' => 'pointWHY', 
			'label' => 'Title Ketiga', 
			'rules' => 'trim'
		),
		'title2WHY' => array(
			'field' => 'title2WHY', 
			'label' => 'Title Keempat', 
			'rules' => 'trim|required'
		),
		'mustWHY' => array(
			'field' => 'mustWHY', 
			'label' => 'Deskripsi Pertama', 
			'rules' => 'trim|required'
		),
		'descmustWHY' => array(
			'field' => 'descmustWHY', 
			'label' => 'Deskripsi Kedua', 
			'rules' => 'trim|required'
		),
		'must2WHY' => array(
			'field' => 'must2WHY', 
			'label' => 'Deskripsi Ketiga', 
			'rules' => 'trim|required'
		),
		'descmust2WHY' => array(
			'field' => 'descmust2WHY', 
			'label' => 'Deskripsi Keempat', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$why = new stdClass();
		$why->idWHY = '';
		$why->titleWHY = '';
		$why->descWHY = '';
		$why->pointWHY = '';
		$why->title2WHY = '';
		$why->mustWHY = '';
		$why->descmustWHY = '';
		$why->must2WHY = '';
		$why->descmust2WHY = '';

		return $why;
	}

	public function selectall_why($id=NULL) {
		$this->db->select('*');
		$this->db->from('why');
		if($id != NULL){
			$this->db->where('idWHY', $id);
		}
		return $this->db->get();
	}
}