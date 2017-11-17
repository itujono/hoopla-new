<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trivia extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Trivia_m');
	}

	public function index() {
		$data['addONS'] = '';
		$data['title'] = 'Trivia - Hoopla Rental Mainan';
		$data['idbody'] = 'trivia';

		$data['listtrivia'] = $this->Trivia_m->selectall_trivia()->result();
		foreach ($data['listtrivia'] as $key => $value) {
			$map = directory_map('assets/upload/trivia/pic-trivia-'.folenc($data['listtrivia'][$key]->idTRIVIA), FALSE, TRUE);
			if(!empty($map)){
				$data['listtrivia'][$key]->imageTRIVIA = base_url() . 'assets/upload/trivia/pic-trivia-'.folenc($data['listtrivia'][$key]->idTRIVIA).'/'.$map[0];
			} else {
				$data['listtrivia'][$key]->imageTRIVIA = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		$data['listtriviaterbaru'] = $this->Trivia_m->selectall_trivia('','',1)->result();
		$data['listtriviaterpopuler'] = $this->Trivia_m->selectall_trivia('','','',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'trivia', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id){
		$data['addONS'] = 'trivia_post';
		$data['title'] = 'Trivia Post - Toys Rent';
		$data['idbody'] = 'trivia-post';

		$id = base64_decode(cutting($id));
		$data['gettrivia'] = $this->Trivia_m->selectall_trivia($id)->row();
		$map = directory_map('assets/upload/trivia/pic-trivia-'.folenc($data['gettrivia']->idTRIVIA), FALSE, TRUE);

		if(!empty($map)){
			$data['gettrivia']->imageTRIVIA = base_url() . 'assets/upload/trivia/pic-trivia-'.folenc($data['gettrivia']->idTRIVIA).'/'.$map[0];
		} else {
			$data['gettrivia']->imageTRIVIA = base_url() . 'assets/upload/no-image-available.png';
		}

		$data['similartrivia'] = $this->Trivia_m->selectall_similar_trivia($data['gettrivia']->idCATTRIVIA)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'trivia_post', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
