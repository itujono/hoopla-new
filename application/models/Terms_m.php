<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_m extends MY_Model{
	
	protected $_table_name = 'hoopla_terms';
	protected $_order_by = 'idTERMS';
	protected $_primary_key = 'idTERMS';

	public $rules_terms = array(
		'title1TERMS' => array(
			'field' => 'title1TERMS', 
			'label' => 'Title Pertama', 
			'rules' => 'trim|required'
		),
		'title2TERMS' => array(
			'field' => 'title2TERMS', 
			'label' => 'Title Kedua', 
			'rules' => 'trim|required'
		),
		'title3TERMS' => array(
			'field' => 'title3TERMS', 
			'label' => 'Title Ketiga', 
			'rules' => 'trim|required'
		),
		'title4TERMS' => array(
			'field' => 'title4TERMS', 
			'label' => 'Title Keempat', 
			'rules' => 'trim|required'
		),
		'desc1TERMS' => array(
			'field' => 'desc1TERMS', 
			'label' => 'Deskripsi Pertama', 
			'rules' => 'trim|required'
		),
		'desc2TERMS' => array(
			'field' => 'desc2TERMS', 
			'label' => 'Deskripsi Kedua', 
			'rules' => 'trim|required'
		),
		'desc3TERMS' => array(
			'field' => 'desc3TERMS', 
			'label' => 'Deskripsi Ketiga', 
			'rules' => 'trim|required'
		),
		'desc4TERMS' => array(
			'field' => 'desc4TERMS', 
			'label' => 'Deskripsi Keempat', 
			'rules' => 'trim|required'
		),
		'harga1TERMS' => array(
			'field' => 'harga1TERMS', 
			'label' => 'Harga Pertama', 
			'rules' => 'trim|required'
		),
		'harga2TERMS' => array(
			'field' => 'harga2TERMS', 
			'label' => 'Harga Kedua', 
			'rules' => 'trim|required'
		),
		'harga3TERMS' => array(
			'field' => 'harga3TERMS', 
			'label' => 'Harga Keempat', 
			'rules' => 'trim|required'
		),
		'harga4TERMS' => array(
			'field' => 'harga4TERMS', 
			'label' => 'Harga Keempat', 
			'rules' => 'trim|required'
		),
		'place1TERMS' => array(
			'field' => 'place1TERMS', 
			'label' => 'Tempat Pertama', 
			'rules' => 'trim|required'
		),
		'place2TERMS' => array(
			'field' => 'place2TERMS', 
			'label' => 'Tempat Kedua', 
			'rules' => 'trim|required'
		),
		'place3TERMS' => array(
			'field' => 'place3TERMS', 
			'label' => 'Tempat Ketiga', 
			'rules' => 'trim|required'
		),
		'place4TERMS' => array(
			'field' => 'place4TERMS', 
			'label' => 'Tempat Ketiga', 
			'rules' => 'trim|required'
		),
		'deschargaplaceTERMS' => array(
			'field' => 'deschargaplaceTERMS', 
			'label' => 'Deskripsi Harga & Tempat', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$terms = new stdClass();
		$terms->idTERMS = '';
		$terms->title1TERMS = '';
		$terms->title2TERMS = '';
		$terms->title3TERMS = '';
		$terms->title4TERMS = '';
		$terms->desc1TERMS = '';
		$terms->desc2TERMS = '';
		$terms->desc3TERMS = '';
		$terms->desc4TERMS = '';
		$terms->harga1TERMS = '';
		$terms->harga2TERMS = '';
		$terms->harga3TERMS = '';
		$terms->harga4TERMS = '';
		$terms->place1TERMS = '';
		$terms->place2TERMS = '';
		$terms->place3TERMS = '';
		$terms->place4TERMS = '';
		$terms->deschargaplaceTERMS = '';
		
		return $terms;
	}

	public function selectall_terms($id=NULL) {
		$this->db->select('*');
		$this->db->from('terms');
		if($id != NULL){
			$this->db->where('idTERMS', $id);
		}
		return $this->db->get();
	}
}