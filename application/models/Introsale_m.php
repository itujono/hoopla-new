<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Introsale_m extends MY_Model{
	
	protected $_table_name = 'hoopla_intro_sale';
	protected $_order_by = 'idINTROSALE';
	protected $_primary_key = 'idINTROSALE';

	public $rules_intro = array(
		'titleINTROSALE' => array(
			'field' => 'titleINTROSALE', 
			'label' => 'Judul', 
			'rules' => 'trim|required'
		),
		'descINTROSALE' => array(
			'field' => 'descINTROSALE', 
			'label' => 'Deskripsi', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$intro = new stdClass();
		$intro->idINTROSALE = '';
		$intro->titleINTROSALE = '';
		$intro->descINTROSALE = '';

		return $intro;
	}

	public function selectall_intro($id=NULL) {
		$this->db->select('*');
		$this->db->from('intro_sale');
		if($id != NULL){
			$this->db->where('idINTROSALE', $id);
		}
		return $this->db->get();
	}
}