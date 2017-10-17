<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_caratitip_m extends MY_Model{
	
	protected $_table_name = 'hoopla_terms_caratitip';
	protected $_order_by = 'idTERMSTITIP';
	protected $_primary_key = 'idTERMSTITIP';

	public $rules_terms_caratitip = array(
		'titleTERMSTITIP' => array(
			'field' => 'titleTERMSTITIP', 
			'label' => 'Title', 
			'rules' => 'trim|required'
		),
		'textTERMSTITIP' => array(
			'field' => 'textTERMSTITIP', 
			'label' => 'Deskripsi', 
			'rules' => 'trim|required'
		),
		'syaratTERMSTITIP' => array(
			'field' => 'syaratTERMSTITIP', 
			'label' => 'Syarat', 
			'rules' => 'trim|required'
		),
		'caraTERMSTITIP' => array(
			'field' => 'caraTERMSTITIP', 
			'label' => 'Title Keempat', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$terms = new stdClass();
		$terms->idTERMSTITIP = '';
		$terms->titleTERMSTITIP = '';
		$terms->textTERMSTITIP = '';
		$terms->syaratTERMSTITIP = '';
		$terms->caraTERMSTITIP = '';
		
		return $terms;
	}

	public function selectall_termscartip($id=NULL) {
		$this->db->select('*');
		$this->db->from('terms_caratitip');
		if($id != NULL){
			$this->db->where('idTERMSTITIP', $id);
		}
		return $this->db->get();
	}
}