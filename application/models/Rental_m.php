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
		'idBRAND' => array(
			'field' => 'idBRAND', 
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
		'idAGE' => array(
			'field' => 'idAGE', 
			'label' => 'Umur Anak', 
			'rules' => 'trim|required'
		),
		'descriptionRENTAL' => array(
			'field' => 'descriptionRENTAL', 
			'label' => 'Deskripsi Barang Rental', 
			'rules' => 'trim|required'
		),
		'idTYPE' => array(
			'field' => 'idTYPE', 
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
		$rental->idBRAND = '';
		$rental->hargaRENTAL = '';
		$rental->durasiRENTAL = '';
		$rental->umurRENTAL = '';
		$rental->descriptionRENTAL = '';
		$rental->idTYPE = '';
		$rental->idAGE = '';
		$rental->statusRENTAL = '';
		return $rental;
	}

	public function selectall_rental($id = NULL, $status = NULL,$bybrand=NULL, $bycat=NULL, $random=NULL, $mostrecent=NULL) {
		$this->db->select('*');
		$this->db->select('brand_rental.namaBRAND');
		$this->db->select('age_rental.namaAGE');
		$this->db->select('type_rental.namaTYPE');
		$this->db->from('barang_rental');
		$this->db->join('brand_rental', 'brand_rental.idBRAND = barang_rental.idBRAND');
		$this->db->join('age_rental', 'age_rental.idAGE = barang_rental.idAGE');
		$this->db->join('type_rental', 'type_rental.idTYPE = barang_rental.idTYPE');
		if ($id != NULL) {
			$this->db->where('idRENTAL',$id);
		}
		if ($status != NULL) {
			$this->db->where('statusRENTAL',$status);
		}
		if ($bybrand != NULL) {
			$this->db->order_by('brand_rental.namaBRAND', 'desc');
		}
		if ($bycat != NULL) {
			$this->db->order_by('brand_rental.namaBRAND', 'asc');
		}
		if ($random != NULL) {
			$this->db->order_by('RAND()');
		}
		if($mostrecent != NULL){
			$this->db->order_by('idRENTAL', 'desc');
		}
		return $this->db->get();
	}

	// public function selectall_random_rental($id=NULL) {
	// 	$this->db->select('*');
	// 	$this->db->from('barang_rental');
	// 	$this->db->where('idCATEGORY', $id);
	// 	$this->db->order_by('RAND()');
	// 	return $this->db->get();
	// }

	public function searching_filter($filter){
    	
    	$this->db->select('*');
    	$this->db->select('brand_rental.namaBRAND');
		$this->db->from('barang_rental');
		$this->db->join('brand_rental', 'brand_rental.idBRAND = barang_rental.idBRAND');
		if($filter == 'az'){
			$this->db->order_by('namaRENTAL', 'asc');
		} else if($filter == 'za'){
			$this->db->order_by('namaRENTAL', 'desc');
		} else if($filter == 'category'){
			$this->db->order_by('namaBRAND', 'asc');
		}
		return $this->db->get();
    }

    public function searching_sortby($sortbrand=NULL, $sorttype=NULL, $sortage=NULL){
    	
    	$this->db->select('*');
		$this->db->select('brand_rental.namaBRAND');
		$this->db->select('age_rental.namaAGE');
		$this->db->select('type_rental.namaTYPE');
		$this->db->from('barang_rental');
		$this->db->join('brand_rental', 'brand_rental.idBRAND = barang_rental.idBRAND');
		$this->db->join('age_rental', 'age_rental.idAGE = barang_rental.idAGE');
		$this->db->join('type_rental', 'type_rental.idTYPE = barang_rental.idTYPE');

		if($sortbrand != NULL AND $sorttype != NULL){
			$this->db->where('barang_rental.idBRAND', $sortbrand);
			$this->db->or_where('barang_rental.idTYPE', $sorttype);
		}  else if($sorttype != NULL AND $sortage != NULL){
			$this->db->where('barang_rental.idTYPE', $sorttype);
			$this->db->or_where('barang_rental.idAGE', $sortage);
		}  else if($sortbrand != NULL AND $sortage != NULL){
			$this->db->where('barang_rental.idBRAND', $sorttype);
			$this->db->or_where('barang_rental.idAGE', $sortage);
		} else if($sortage != NULL){
			$this->db->where('barang_rental.idAGE', $sortage);
		} else if($sortbrand != NULL){
			$this->db->where('barang_rental.idBRAND', $sortbrand);
		} else if($sorttype != NULL){
			$this->db->where('barang_rental.idTYPE', $sorttype);
		}

		return $this->db->get();
    }
}