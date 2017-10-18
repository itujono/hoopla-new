<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_m extends MY_Model{
	
	protected $_table_name = 'hoopla_social';
	protected $_order_by = 'idSOCIAL';
	protected $_primary_key = 'idSOCIAL';

	public $rules_social = array(
		'waSOCIAL' => array(
			'field' => 'waSOCIAL', 
			'label' => 'Nomor Whatsapp', 
			'rules' => 'trim|required'
		),
		'lineSOCIAL' => array(
			'field' => 'lineSOCIAL', 
			'label' => 'Akun Line', 
			'rules' => 'trim|required'
		),
		'igSOCIAL' => array(
			'field' => 'igSOCIAL', 
			'label' => 'Akun Instagram', 
			'rules' => 'trim|required'
		),
		'email1SOCIAL' => array(
			'field' => 'email1SOCIAL', 
			'label' => 'Email Pertama', 
			'rules' => 'trim|required'
		),
		'email2SOCIAL' => array(
			'field' => 'email2SOCIAL', 
			'label' => 'Email Kedua', 
			'rules' => 'trim|required'
		),
		'telpSOCIAL' => array(
			'field' => 'telpSOCIAL', 
			'label' => 'Nomor Telepon', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$trivia = new stdClass();
		$trivia->idSOCIAL = '';
		$trivia->waSOCIAL = '';
		$trivia->lineSOCIAL = '';
		$trivia->igSOCIAL = '';
		$trivia->email1SOCIAL = '';
		$trivia->email2SOCIAL = '';
		$trivia->telpSOCIAL = '';
		return $trivia;
	}

	public function selectall_social($id = NULL) {
		$this->db->select('*');
		$this->db->from('social');
		if ($id != NULL) {
			$this->db->where('idSOCIAL',$id);
		}
		return $this->db->get();
	}
}