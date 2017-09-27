<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'sale';
		$data['title'] = 'For Sale - Toys Rent';
		$data['idbody'] = 'sale';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'sale', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
