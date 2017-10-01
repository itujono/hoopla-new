<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Contact_m');
	}

	public function index(){
		$data['addONS'] = 'plugins_datatables';
		$data['contactlist'] = $this->Contact_m->selectall_contact()->result();

		$data['subview'] = $this->load->view($this->data['backendDIR'].'contact', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}
}