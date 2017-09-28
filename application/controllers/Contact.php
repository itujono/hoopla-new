<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'contact';
		$data['title'] = 'Contact us - Toys Rent';
		$data['idbody'] = 'contact';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'contact', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}