<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titipsewa extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Titipsewa_m');
	}

	public function index_titipsewa(){
		$data['addONS'] = 'plugins_datatables';
		$data['titipsewalist'] = $this->Titipsewa_m->selectall_titipsewa()->result();

		$data['subview'] = $this->load->view($this->data['backendDIR'].'titipsewa', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}
}