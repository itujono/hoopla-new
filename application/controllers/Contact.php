<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Contact_m');
	}

	public function index() {
		$data['addONS'] = '';
		$data['title'] = 'Contact us - Toys Rent';
		$data['idbody'] = 'contact';

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'contact', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function savecontact() {
		$rules = $this->Contact_m->rules_contact;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Contact_m->array_from_post(array('namaCONTACT','emailCONTACT','descriptionCONTACT'));
	      	if ($this->Contact_m->save($data, $id)) {
	        	$data = array(
	            	'title' => 'Sukses',
                    'text' => 'Pesan anda berhasil kami terima',
                    'type' => 'success'
	          	);
	   		} else {
				$data = array(
					'title' => 'Gagal',
                    'text' => 'Maaf, kami tidak dapat mengirim pesan anda, coba lagi nanti',
                    'type' => 'error'
				);
	      	}
	    	$this->session->set_flashdata('message', $data);
	  		redirect('contact');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index();
		}
	}
}