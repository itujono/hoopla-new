<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discount extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'discount';
		$data['title'] = 'Discount - Hoopla Rental Mainan';
		$data['idbody'] = 'discount';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'discount', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
