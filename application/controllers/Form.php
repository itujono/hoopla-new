<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'form';
		$data['title'] = 'Titip Sewa - Toys Rent';
		$data['idbody'] = 'titip-sewa';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'form', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}