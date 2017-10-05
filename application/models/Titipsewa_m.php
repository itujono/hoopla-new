<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titipsewa_m extends MY_Model{
	
	protected $_table_name = 'hoopla_titip_sewa';
	protected $_order_by = 'idTITIP';
	protected $_primary_key = 'idTITIP';

	public $rules_titipsewa = array(
		'namaTITIP' => array(
			'field' => 'namaTITIP', 
			'label' => 'Nama Penitip', 
			'rules' => 'trim|required'
		),
		'emailTITIP' => array(
			'field' => 'emailTITIP', 
			'label' => 'Email Penitip', 
			'rules' => 'trim|required|valid_email'
		),
		'telpTITIP' => array(
			'field' => 'telpTITIP', 
			'label' => 'Deskripsi Trivia', 
			'rules' => 'trim|required|min_length[10]'
		),
		'merekTITIP' => array(
			'field' => 'merekTITIP', 
			'label' => 'Merek Mainan', 
			'rules' => 'trim|required'
		),
		'kondisiTITIP' => array(
			'field' => 'kondisiTITIP', 
			'label' => 'Merek Mainan', 
			'rules' => 'trim|required'
		),
		'tipeTITIP' => array(
			'field' => 'tipeTITIP', 
			'label' => 'Tipe Mainan', 
			'rules' => 'trim|required'
		),
		'syaratTITIP' => array(
			'field' => 'syaratTITIP', 
			'label' => 'Syarat dan Ketentuan Titip Sewa', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}

	public function selectall_titipsewa($id = NULL) {
		$this->db->select('*');
		$this->db->from('titip_sewa');
		if ($id != NULL) {
			$this->db->where('idTITIP',$id);
		}
		return $this->db->get();
	}
}