<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Why extends Frontend_Controller {

	public function index() {
		$data['addONS'] = 'about';
		$data['idbody'] = 'why';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'why', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
