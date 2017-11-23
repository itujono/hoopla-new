<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Package_m');
	}

	public function index() {
		$data['addONS'] = 'discount';
		$data['title'] = 'Paket - Hoopla Rental Mainan';
		$data['idbody'] = 'discount';

		$data['listpackage'] = $this->Package_m->selectall_package()->result();
		foreach ($data['listpackage'] as $key => $value) {
			$map = directory_map('assets/upload/package/pic-package-'.folenc($data['listpackage'][$key]->idPAKET), FALSE, TRUE);
			if(!empty($map)){
				$data['listpackage'][$key]->imagePACKAGE = base_url() . 'assets/upload/package/pic-package-'.folenc($data['listpackage'][$key]->idPAKET).'/'.$map[0];
			} else {
				$data['listpackage'][$key]->imagePACKAGE = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'package', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
