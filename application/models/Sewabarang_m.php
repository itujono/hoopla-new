<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewabarang_m extends MY_Model{
	
	protected $_table_name = 'hoopla_sewa_barang';
	protected $_order_by = 'idSEWA';
	protected $_primary_key = 'idSEWA';

	public $rules_sewabarang = array(
		'namaSEWA' => array(
			'field' => 'namaSEWA', 
			'label' => 'Nama Penyewa', 
			'rules' => 'trim|required'
		),
		'alamatSEWA' => array(
			'field' => 'alamatSEWA', 
			'label' => 'Alamat Penyewa', 
			'rules' => 'trim|required'
		),
		'telpSEWA' => array(
			'field' => 'telpSEWA', 
			'label' => 'Telepon Penyewa', 
			'rules' => 'trim|required|min_length[10]'
		),
		'antarjemputSEWA' => array(
			'field' => 'antarjemputSEWA', 
			'label' => 'Biaya antar jemput', 
			'rules' => 'trim|required'
		),
		'instagramSEWA' => array(
			'field' => 'instagramSEWA', 
			'label' => 'Instagram Penyewa', 
			'rules' => 'trim'
		),
		'periodeSEWA' => array(
			'field' => 'periodeSEWA', 
			'label' => 'Periode', 
			'rules' => 'trim|required'
		),
		'pengirimanSEWA' => array(
			'field' => 'pengirimanSEWA', 
			'label' => 'Tanggal Pengiriman', 
			'rules' => 'trim|required'
		),
		'rekomenSEWA' => array(
			'field' => 'rekomenSEWA', 
			'label' => 'Rekomendasikan Penyewa', 
			'rules' => 'trim'
		),
		'ketahuiSEWA' => array(
			'field' => 'ketahuiSEWA', 
			'label' => 'Mengetahui Hoopla', 
			'rules' => 'trim'
		),
		'permintaanSEWA' => array(
			'field' => 'permintaanSEWA', 
			'label' => 'Permintaan Khusus', 
			'rules' => 'trim'
		),
		'syaratSEWA' => array(
			'field' => 'syaratSEWA', 
			'label' => 'Persyaratan', 
			'rules' => 'trim|required'
		),
		'barangSEWA' => array(
			'field' => 'barangSEWA', 
			'label' => 'Barang sewa kamu', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}

	public function selectall_sewabarang($id = NULL) {
		$this->db->select('*');
		$this->db->from('sewa_barang');
		if ($id != NULL) {
			$this->db->where('idSEWA',$id);
		}
		return $this->db->get();
	}
}