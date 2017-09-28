<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_m extends MY_Model{
	
	protected $_table_name = 'hoopla_barang_rental';
	protected $_order_by = 'idRENTAL';
	protected $_primary_key = 'idRENTAL';

	public $rules_rental = array(
		'namaRENTAL' => array(
			'field' => 'namaRENTAL', 
			'label' => 'Nama Barang Rental', 
			'rules' => 'trim|required'
		),
		'brandRENTAL' => array(
			'field' => 'brandRENTAL', 
			'label' => 'Brand Barang Rental', 
			'rules' => 'trim|required'
		),
		'hargaRENTAL' => array(
			'field' => 'hargaRENTAL', 
			'label' => 'Harga Barang Rental', 
			'rules' => 'trim|required'
		),
		'durasiRENTAL' => array(
			'field' => 'durasiRENTAL', 
			'label' => 'Durasi Barang Rental', 
			'rules' => 'trim|required'
		),
		'descriptionRENTAL' => array(
			'field' => 'descriptionRENTAL', 
			'label' => 'Deskripsi Barang Rental', 
			'rules' => 'trim|required'
		),
		'idCATEGORY' => array(
			'field' => 'idCATEGORY', 
			'label' => 'Kategori Barang', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$rental = new stdClass();
		$rental->idRENTAL = '';
		$rental->namaRENTAL = '';
		$rental->brandRENTAL = '';
		$rental->hargaRENTAL = '';
		$rental->durasiRENTAL = '';
		$rental->descriptionRENTAL = '';
		$rental->idCATEGORY = '';
		$rental->statusRENTAL = '';
		return $rental;
	}

	public function selectall_rental($id = NULL, $status = NULL,$bybrand=NULL, $bycat=NULL, $random=NULL, $mostrecent=NULL) {
		$this->db->select('*');
		$this->db->select('category_rental.namaCATEGORY');
		$this->db->from('barang_rental');
		$this->db->join('category_rental', 'category_rental.idCATEGORY = barang_rental.idCATEGORY');
		if ($id != NULL) {
			$this->db->where('idRENTAL',$id);
		}
		if ($status != NULL) {
			$this->db->where('statusRENTAL',$status);
		}
		if ($bybrand != NULL) {
			$this->db->order_by('brandRENTAL', 'desc');
		}
		if ($bycat != NULL) {
			$this->db->order_by('namaCATEGORY', 'asc');
		}
		if ($bycat != NULL) {
			$this->db->order_by('RAND()');
		}
		if($mostrecent != NULL){
			$this->db->order_by('idRENTAL', 'desc');
		}
		return $this->db->get();
	}

	public function dropdown_getcategory($dropdown=NULL){
		$this->db->cache_on();
		$this->db->from('category_rental');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idCATEGORY] = $value->namaCATEGORY;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}

	public function selectall_random_rental($id=NULL) {
		$this->db->select('*');
		$this->db->from('barang_rental');
		$this->db->where('idCATEGORY', $id);
		$this->db->order_by('RAND()');
		return $this->db->get();
	}
}