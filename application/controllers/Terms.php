<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'terms';
		$data['title'] = 'Terms &amp; Conditions - Hoopla Toys Rent';
		$data['idbody'] = 'tc';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'terms', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
