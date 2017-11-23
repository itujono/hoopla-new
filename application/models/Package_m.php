<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_m extends MY_Model{
	
	protected $_table_name = 'hoopla_package';
	protected $_order_by = 'idPAKET';
	protected $_primary_key = 'idPAKET';

	public $rules_package = array(
		'titlePAKET' => array(
			'field' => 'titlePAKET', 
			'label' => 'Title Paket', 
			'rules' => 'trim|required'
		),
		'validPAKET' => array(
			'field' => 'validPAKET', 
			'label' => 'Tanggal Valid', 
			'rules' => 'trim|required'
		),
		'descPAKET' => array(
			'field' => 'descPAKET', 
			'label' => 'Deskripsi Paket', 
			'rules' => 'trim|required'
		),
		'tablePAKET' => array(
			'field' => 'tablePAKET', 
			'label' => 'Tabel Paket', 
			'rules' => 'trim'
		),
		'titlebenefitPAKET' => array(
			'field' => 'titlebenefitPAKET', 
			'label' => 'Judul Benefit', 
			'rules' => 'trim'
		),
		'titlebuttonPAKET' => array(
			'field' => 'titlebuttonPAKET', 
			'label' => 'Judul Button', 
			'rules' => 'trim'
		),
		'linkbuttonPAKET' => array(
			'field' => 'linkbuttonPAKET', 
			'label' => 'Link Button', 
			'rules' => 'trim'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$paket = new stdClass();
		$paket->idPAKET = '';
		$paket->titlePAKET = '';
		$paket->validPAKET = '';
		$paket->descPAKET = '';
		$paket->tablePAKET = '';
		$paket->titlebenefitPAKET = '';
		$paket->descbenefitPAKET = '';
		$paket->titlebuttonPAKET = '';
		$paket->linkbuttonPAKET = '';
		$paket->featuredPAKET = '';

		return $paket;
	}

	public function selectall_package($id=NULL, $featured=NULL) {
		$this->db->select('*');
		$this->db->from('package');
		if($id != NULL){
			$this->db->where('idPAKET', $id);
		}
		if($featured != NULL){
			$this->db->where('featuredPAKET', 1);
		}
		return $this->db->get();
	}
}