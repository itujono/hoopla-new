<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_m extends MY_Model{
	
	protected $_table_name = 'hoopla_barang_sale';
	protected $_order_by = 'idSALE';
	protected $_primary_key = 'idSALE';

	public $rules_sale = array(
		'namaSALE' => array(
			'field' => 'namaSALE', 
			'label' => 'Nama Barang Sale', 
			'rules' => 'trim|required'
		),
		'brandSALE' => array(
			'field' => 'brandSALE', 
			'label' => 'Brand Barang Sale', 
			'rules' => 'trim|required'
		),
		'hargaSALE' => array(
			'field' => 'hargaSALE', 
			'label' => 'Harga Barang Sale', 
			'rules' => 'trim|required'
		),
		'descriptionSALE' => array(
			'field' => 'descriptionSALE', 
			'label' => 'Deskripsi Barang Sale', 
			'rules' => 'trim|required'
		),
		'idCATSALE' => array(
			'field' => 'idCATSALE', 
			'label' => 'Kategori Barang Sale', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$sale = new stdClass();
		$sale->idSALE = '';
		$sale->namaSALE = '';
		$sale->brandSALE = '';
		$sale->hargaSALE = '';
		$sale->descriptionSALE = '';
		$sale->idCATSALE = '';
		$sale->statusSALE = '';
		return $sale;
	}

	public function selectall_sale($id = NULL, $status = NULL) {
		$this->db->select('*');
		$this->db->select('category_sale.namaCATSALE');
		$this->db->from('barang_sale');
		$this->db->join('category_sale', 'category_sale.idCATSALE = barang_sale.idCATSALE');
		if ($id != NULL) {
			$this->db->where('idSALE',$id);
		}
		if ($status != NULL) {
			$this->db->where('statusRENTAL',$status);
		}
		return $this->db->get();
	}

	public function dropdown_getcatsale($dropdown=NULL){
		$this->db->cache_on();
		$this->db->from('category_sale');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idCATSALE] = $value->namaCATSALE;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}

	public function selectall_random_sale($id=NULL) {
		$this->db->select('*');
		$this->db->from('barang_sale');
		$this->db->where('idCATSALE', $id);
		$this->db->order_by('RAND()');
		return $this->db->get();
	}

	public function searching_filter($filter){
    	
    	$this->db->select('*');
    	$this->db->select('category_sale.namaCATSALE');
		$this->db->from('barang_sale');
		$this->db->join('category_sale', 'category_sale.idCATSALE = barang_sale.idCATSALE');
		if($filter == 'az'){
			$this->db->order_by('namaSALE', 'asc');
		} else if($filter == 'za'){
			$this->db->order_by('namaSALE', 'desc');
		} else if($filter == 'category'){
			$this->db->order_by('namaCATSALE', 'asc');
		}

		return $this->db->get();
    }

    public function searching_sortby($sortby){
    	
    	$this->db->select('*');
    	$this->db->select('category_sale.namaCATSALE');
		$this->db->from('barang_sale');
		$this->db->join('category_sale', 'category_sale.idCATSALE = barang_sale.idCATSALE');
		if($sortby == 'trending'){
			$this->db->order_by('RAND()');
		} else if($sortby == 'highlow'){
			$this->db->order_by('hargaSALE', 'asc');
		} else if($sortby == 'lowhigh'){
			$this->db->order_by('hargaSALE', 'desc');
		} else if($sortby == 'date'){
			$this->db->order_by('createdateSALE', 'asc');
		}

		return $this->db->get();
    }
}