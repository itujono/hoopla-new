<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Rental_m');
	}

	public function index() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$data['listrentalbybrands'] = $this->Rental_m->selectall_rental()->result();
		foreach ($data['listrentalbybrands'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbybrands'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalbybrands'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbybrands'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbybrands'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['listrentalbybrand'] = $this->Rental_m->selectall_rental('','',1)->result();
		foreach ($data['listrentalbybrand'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbybrand'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalbybrand'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbybrand'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbybrand'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['listrentalbycat'] = $this->Rental_m->selectall_rental('','','',1)->result();
		foreach ($data['listrentalbycat'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbycat'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalbycat'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbycat'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbycat'][$key]->idRENTAL).'/'.$map[0];
			}
		}

		$data['getcategory'] = $this->Rental_m->dropdown_getcategory()->result();
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id=NULL){
		$data['addONS'] = 'product';
		$data['title'] = 'Product Detail - Toys Rent';
		$data['idbody'] = 'product-detail';
	
		$id = base64_decode(cutting($id));
		$data['getrental'] = $this->Rental_m->selectall_rental($id)->row();
		$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL), FALSE, TRUE);
		
		if (empty($map)) {
			$data['getrental']->imageRENTAL = '';
		} else {
			$data['getrental']->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL).'/'.$map[0];
		}
		
		$data['similarental'] = $this->Rental_m->selectall_random_rental()->result();

		foreach ($data['similarental'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['similarental'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['similarental'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['similarental'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['similarental'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
