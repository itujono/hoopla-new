<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E1 extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'about';
		$data['title'] = 'Pesanan datang!';
		$data['idbody'] = 'e1';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'e1', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
