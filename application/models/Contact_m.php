<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_m extends MY_Model{
	
	protected $_table_name = 'hoopla_contact';
	protected $_order_by = 'idCONTACT';
	protected $_primary_key = 'idCONTACT';

	public $rules_contact = array(
		'descriptionCONTACT' => array(
			'field' => 'descriptionCONTACT', 
			'label' => 'Isi Pesan', 
			'rules' => 'required'
		),
		'namaCONTACT' => array(
			'field' => 'namaCONTACT', 
			'label' => 'Nama', 
			'rules' => 'required'
		),
		'emailCONTACT' => array(
			'field' => 'emailCONTACT', 
			'label' => 'Email', 
			'rules' => 'required|valid_email'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function selectall_contact($id=NULL){
        $this->db->select('*');
        $this->db->from('contact');
        if($id != NULL){
        	$this->db->where('idCONTACT', $id);
        }
        return $this->db->get();
    }
}