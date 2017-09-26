<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
