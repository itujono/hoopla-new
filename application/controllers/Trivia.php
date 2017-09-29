<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trivia extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Trivia_m');
	}

	public function index() {
		$data['addONS'] = '';
		$data['title'] = 'Trivia - Toys Rent';
		$data['idbody'] = 'trivia';

		$data['listtrivia'] = $this->Trivia_m->selectall_trivia()->result();
		$data['listtriviaterbaru'] = $this->Trivia_m->selectall_trivia('','',1)->result();
		$data['listtriviaterpopuler'] = $this->Trivia_m->selectall_trivia('','','',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'trivia', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id){
		$data['addONS'] = '';
		$data['title'] = 'Titip Sewa - Toys Rent';
		$data['idbody'] = 'trivia-post';

		$id = base64_decode(cutting($id));
		$data['gettrivia'] = $this->Trivia_m->selectall_trivia($id)->row();
		$data['similartrivia'] = $this->Trivia_m->selectall_similar_trivia($data['gettrivia']->idCATTRIVIA)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'trivia_post', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}