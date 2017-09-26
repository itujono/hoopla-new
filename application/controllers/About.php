<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'about';
		$data['title'] = 'About - Toys Rent';
		$data['idbody'] = 'about';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'about', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
