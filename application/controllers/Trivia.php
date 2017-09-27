<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trivia extends Frontend_Controller {

	public function index() {
		$data['addONS'] = '';
		$data['title'] = 'Trivia - Toys Rent';
		$data['idbody'] = 'trivia';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'trivia', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail(){
		$data['addONS'] = '';
		$data['title'] = 'Titip Sewa - Toys Rent';
		$data['idbody'] = 'trivia-post';
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'trivia_post', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}