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
		'harga1RENTAL' => array(
			'field' => 'harga1RENTAL', 
			'label' => 'Harga Per 1 Minggu Rental', 
			'rules' => 'trim'
		),
		'harga2RENTAL' => array(
			'field' => 'harga2RENTAL', 
			'label' => 'Harga Per 2 Minggu Rental', 
			'rules' => 'trim'
		),
		'harga3RENTAL' => array(
			'field' => 'harga3RENTAL', 
			'label' => 'Harga Per 3 Minggu Rental', 
			'rules' => 'trim'
		),
		'harga4RENTAL' => array(
			'field' => 'harga4RENTAL', 
			'label' => 'Harga Per 4 Minggu Rental', 
			'rules' => 'trim'
		),
		'idAGE[]' => array(
			'field' => 'idAGE[]', 
			'label' => 'Umur Anak', 
			'rules' => 'trim|required'
		),
		'descriptionRENTAL' => array(
			'field' => 'descriptionRENTAL', 
			'label' => 'Deskripsi Barang Rental', 
			'rules' => 'trim'
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
		$rental->harga1RENTAL = '';
		$rental->harga2RENTAL = '';
		$rental->harga3RENTAL = '';
		$rental->harga4RENTAL = '';
		$rental->umurRENTAL = '';
		$rental->descriptionRENTAL = '';
		$rental->idTYPE = '';
		$rental->statusRENTAL = '';
		$rental->popularRENTAL = '';
		return $rental;
	}

	public function selectall_rental($id = NULL, $status = NULL,$bybrand=NULL, $bycat=NULL, $random=NULL, $mostrecent=NULL, $popular=NULL) {
		$this->db->select('*');
		$this->db->select('brand_rental.namaBRAND');
		$this->db->select('type_rental.namaTYPE');
		$this->db->from('barang_rental');
		$this->db->join('brand_rental', 'brand_rental.idBRAND = barang_rental.idBRAND');
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
			$this->db->limit(4);
		}
		if($popular != NULL){
			$this->db->where('popularRENTAL', 1);
			$this->db->limit(4);
		}
		return $this->db->get();
	}

	public function selectall_random_rental($id=NULL, $id2=NULL) {
		$this->db->select('*');
		$this->db->from('barang_rental');
		$this->db->where('idBRAND', $id);
		$this->db->where('idRENTAL !=', $id2);
		$this->db->order_by('RAND()');
		$this->db->limit(4);
		return $this->db->get();
	}

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
    	
    	$this->db->select('barang_rental.idRENTAL,barang_rental.namaRENTAL, barang_rental.harga2RENTAL');
		$this->db->select('brand_rental.namaBRAND');
		$this->db->select('type_rental.namaTYPE');
		$this->db->from('barang_rental');
		$this->db->join('brand_rental', 'brand_rental.idBRAND = barang_rental.idBRAND');
		$this->db->join('type_rental', 'type_rental.idTYPE = barang_rental.idTYPE');

		if($sortbrand != NULL){
			$this->db->where('barang_rental.idBRAND', $sortbrand);
		} else if($sorttype != NULL){
			$this->db->where('barang_rental.idTYPE', $sorttype);
		} else if($sortage != NULL){
			$this->db->select('age_rental.namaAGE, age_rental.idAGE');
		    $this->db->select('age_join_rental.idAGEJOINRENTAL');
		    $this->db->from('age_rental');
		    $this->db->join('age_join_rental', 'age_join_rental.idRENTAL = barang_rental.idRENTAL');
			$this->db->where('age_join_rental.idAGE', $sortage);
		}
		
		$this->db->group_by('barang_rental.idRENTAL');
		return $this->db->get();
    }

    public function searching_all_rental($search) {
    	$this->db->cache_on();
		$this->db->select('*');
		$this->db->select('brand_rental.namaBRAND');
		$this->db->select('age_rental.namaAGE, age_rental.idAGE');
		$this->db->select('age_join_rental.idAGEJOINRENTAL');
		$this->db->select('type_rental.namaTYPE');
		$this->db->from('barang_rental');
		$this->db->join('brand_rental', 'brand_rental.idBRAND = barang_rental.idBRAND');
		$this->db->join('age_join_rental', 'age_join_rental.idRENTAL = barang_rental.idRENTAL');
		$this->db->join('age_rental', 'age_rental.idAGE = age_join_rental.idAGE');
		$this->db->join('type_rental', 'type_rental.idTYPE = barang_rental.idTYPE');

		$this->db->like('brand_rental.namaBRAND', $search);
		$this->db->or_like('age_rental.namaAGE', $search);
		$this->db->or_like('type_rental.namaTYPE', $search);
		$this->db->or_like('namaRENTAL', $search);
		$this->db->group_by('namaRENTAL');

		return $this->db->get();
	}
}