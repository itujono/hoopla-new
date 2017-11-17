<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Sale_m');
	}

	public function index() {
		$data['addONS'] = 'sale';
		$data['title'] = 'For Sale - Hoopla Toys Rent';
		$data['idbody'] = 'sale';

		$data['listsale'] = $this->Sale_m->selectall_sale()->result();
		foreach ($data['listsale'] as $key => $value) {
			$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['listsale'][$key]->idSALE), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listsale'][$key]->imageSALE = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listsale'][$key]->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['listsale'][$key]->idSALE).'/'.$map[0];
			}
		}
		$data['getcatsale'] = $this->Sale_m->dropdown_getcatsale()->result();
		
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'sale', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id=NULL){
		$data['addONS'] = 'product';
		$data['title'] = 'Product Sale - Hoopla Toys Rent';
		$data['idbody'] = 'product-detail';
	
		$id = base64_decode(cutting($id));
		$data['getsale'] = $this->Sale_m->selectall_sale($id)->row();
		$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['getsale']->idSALE), FALSE, TRUE);
		
		if (empty($map)) {
			$data['getsale']->imageSALE = '';
		} else {
			$data['getsale']->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['getsale']->idSALE).'/'.$map[0];
		}
		
		$data['similarsale'] = $this->Sale_m->selectall_random_sale($data['getsale']->idCATSALE, $data['getsale']->idSALE)->result();

		foreach ($data['similarsale'] as $key => $value) {
			$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['similarsale'][$key]->idSALE), FALSE, TRUE);
			
			if (empty($map)) {
				$data['similarsale'][$key]->imageSALE = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['similarsale'][$key]->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['similarsale'][$key]->idSALE).'/'.$map[0];
			}
		}
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product_detail_sale', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function filterby() {
		$data['addONS'] = 'sale';
		$data['title'] = 'Sale - Hoopla Toys Rent';
		$data['idbody'] = 'sale';

		$filter = $this->input->get('filter');

		$Searching = $this->Sale_m->searching_filter($filter)->result();
        if(!empty($Searching)){
			$data['searching'] = $Searching;
			foreach ($data['searching'] as $key => $value) {
				$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['searching'][$key]->idSALE), FALSE, TRUE);
				
				if (empty($map)) {
					$data['searching'][$key]->imageSALE = base_url() . 'assets/upload/no-image-available.png';
				} else {
					$data['searching'][$key]->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['searching'][$key]->idSALE).'/'.$map[0];
				}
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'sale', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function sortby() {
		$data['addONS'] = 'sale';
		$data['title'] = 'Sale - Hoopla Toys Rent';
		$data['idbody'] = 'sale';
		
		$sortby = $this->input->get('sortby');
		
		$Searching = $this->Sale_m->searching_sortby($sortby)->result();
        if(!empty($Searching)){
			$data['searchsortby'] = $Searching;
			foreach ($data['searchsortby'] as $key => $value) {
				$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['searchsortby'][$key]->idSALE), FALSE, TRUE);
				
				if (empty($map)) {
					$data['searchsortby'][$key]->imageSALE = base_url() . 'assets/upload/no-image-available.png';
				} else {
					$data['searchsortby'][$key]->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['searchsortby'][$key]->idSALE).'/'.$map[0];
				}
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'sale', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
