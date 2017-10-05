<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewabarang extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Sewabarang_m');
	}

	public function index_sewabarang(){
		$data['addONS'] = 'plugins_datatables';
		$data['sewabaranglist'] = $this->Sewabarang_m->selectall_sewabarang()->result();

		$data['subview'] = $this->load->view($this->data['backendDIR'].'sewabarang', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}
}