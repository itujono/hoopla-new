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
		$province = new stdClass();
		$province->idRENTAL = '';
		$province->namaRENTAL = '';
		$province->hargaRENTAL = '';
		$province->durasiRENTAL = '';
		$province->descriptionRENTAL = '';
		$province->idCATEGORY = '';
		$province->statusRENTAL = '';
		return $province;
	}

	public function selectall_rental($id = NULL, $status = NULL) {
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
}