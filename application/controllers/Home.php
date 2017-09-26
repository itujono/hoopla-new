<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'home';
		$data['title'] = 'Hoopla - Toys Rent';
		$data['idbody'] = 'home';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'home', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
