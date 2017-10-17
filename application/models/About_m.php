<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_m extends MY_Model{
	
	protected $_table_name = 'hoopla_about';
	protected $_order_by = 'idABOUT';
	protected $_primary_key = 'idABOUT';

	public $rules_about = array(
		'title1ABOUT' => array(
			'field' => 'title1ABOUT', 
			'label' => 'Title Pertama', 
			'rules' => 'trim|required'
		),
		'title2ABOUT' => array(
			'field' => 'title2ABOUT', 
			'label' => 'Title Kedua', 
			'rules' => 'trim|required'
		),
		'title3ABOUT' => array(
			'field' => 'title3ABOUT', 
			'label' => 'Title Ketiga', 
			'rules' => 'trim|required'
		),
		'title4ABOUT' => array(
			'field' => 'title4ABOUT', 
			'label' => 'Title Keempat', 
			'rules' => 'trim|required'
		),
		'desc1ABOUT' => array(
			'field' => 'desc1ABOUT', 
			'label' => 'Deskripsi Pertama', 
			'rules' => 'trim|required'
		),
		'desc2ABOUT' => array(
			'field' => 'desc2ABOUT', 
			'label' => 'Deskripsi Kedua', 
			'rules' => 'trim|required'
		),
		'desc3ABOUT' => array(
			'field' => 'desc3ABOUT', 
			'label' => 'Deskripsi Ketiga', 
			'rules' => 'trim|required'
		),
		'desc4ABOUT' => array(
			'field' => 'desc4ABOUT', 
			'label' => 'Deskripsi Keempat', 
			'rules' => 'trim|required'
		),
		'link2ABOUT' => array(
			'field' => 'link2ABOUT', 
			'label' => 'Link Kedua', 
			'rules' => 'trim'
		),
		'link3ABOUT' => array(
			'field' => 'link3ABOUT', 
			'label' => 'Link Ketiga', 
			'rules' => 'trim'
		),
		'link4ABOUT' => array(
			'field' => 'link4ABOUT', 
			'label' => 'Link Keempat', 
			'rules' => 'trim'
		),
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$about = new stdClass();
		$about->idABOUT = '';
		$about->title1ABOUT = '';
		$about->title2ABOUT = '';
		$about->title3ABOUT = '';
		$about->title4ABOUT = '';
		$about->desc1ABOUT = '';
		$about->desc2ABOUT = '';
		$about->desc3ABOUT = '';
		$about->desc4ABOUT = '';
		$about->link2ABOUT = '';
		$about->link3ABOUT = '';
		$about->link4ABOUT = '';

		return $about;
	}

	public function selectall_about($id=NULL) {
		$this->db->select('*');
		$this->db->from('about');
		if($id != NULL){
			$this->db->where('idABOUT', $id);
		}
		return $this->db->get();
	}
}