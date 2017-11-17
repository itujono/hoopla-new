<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Rental_m');
		$this->load->model('Brand_rental_m');
		$this->load->model('Age_rental_m');
		$this->load->model('Type_rental_m');
	}

	public function index() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Rental Mainan';
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
		$data['listrentalbycat'] = $this->Rental_m->selectall_rental('','','',1)->result();
		foreach ($data['listrentalbycat'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbycat'][$key]->idRENTAL), FALSE, TRUE);

			if (empty($map)) {
				$data['listrentalbycat'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbycat'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbycat'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['listrentalbyage'] = $this->Rental_m->selectall_rental('','','','',1)->result();
		foreach ($data['listrentalbyage'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbyage'][$key]->idRENTAL), FALSE, TRUE);

			if (empty($map)) {
				$data['listrentalbyage'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbyage'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbyage'][$key]->idRENTAL).'/'.$map[0];
			}
		}

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

        if(!empty($this->session->flashdata('notif_less_than_3_character'))) {
            $data['notif_less_than_3_character'] = $this->session->flashdata('notif_less_than_3_character');
        } else if(!empty($this->session->flashdata('not_found'))) {
        	$data['not_found'] = $this->session->flashdata('not_found');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id=NULL){
		$data['addONS'] = 'product-detail';
		$data['title'] = 'Product Detail - Toys Rent';
		$data['idbody'] = 'product-detail';

		$id = base64_decode(cutting($id));
		$data['getrental'] = $this->Rental_m->selectall_rental($id)->row();
		$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL), FALSE, TRUE);
		$maps = array();
		$imgs = array();
		if(!empty($map)){
			foreach ($map  as $key => $value) {
				$maps[] = base_url().'assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL).'/'.$value;
			}
		}
		$data['getrental']->map = $maps;

		$data['similarental'] = $this->Rental_m->selectall_random_rental($data['getrental']->idBRAND, $data['getrental']->idRENTAL)->result();

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

	public function filterby() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$filter = $this->input->get('filter');

		$Searching = $this->Rental_m->searching_filter($filter)->result();

        if(!empty($Searching)){
			$data['searching'] = $Searching;
			foreach ($data['searching'] as $key => $value) {
				$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['searching'][$key]->idRENTAL), FALSE, TRUE);

				if (empty($map)) {
					$data['searching'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
				} else {
					$data['searching'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['searching'][$key]->idRENTAL).'/'.$map[0];
				}
			}
		}

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function sortby() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$sortbrand = $this->input->get('sortbrand');
		$sorttype = $this->input->get('sorttype');
		$sortage = $this->input->get('sortage');

		$Searching = $this->Rental_m->searching_sortby($sortbrand, $sorttype, $sortage)->result();

        if(!empty($Searching)){
			$data['searchsortby'] = $Searching;
			foreach ($data['searchsortby'] as $key => $value) {
				$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['searchsortby'][$key]->idRENTAL), FALSE, TRUE);

				if (empty($map)) {
					$data['searchsortby'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
				} else {
					$data['searchsortby'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['searchsortby'][$key]->idRENTAL).'/'.$map[0];
				}
			}
		}

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function searching(){
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$search = $this->input->get('search');
		if(strlen($search) > 3){
			$Searching = $this->Rental_m->searching_all_rental($search)->result();
			$data['searching_all_rental'] = $Searching;

			if(!empty($data['searching_all_rental'])){
				foreach ($data['searching_all_rental'] as $key => $value) {
					$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['searching_all_rental'][$key]->idRENTAL), FALSE, TRUE);

					if (empty($map)) {
						$data['searching_all_rental'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
					} else {
						$data['searching_all_rental'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['searching_all_rental'][$key]->idRENTAL).'/'.$map[0];
					}
				}
				$data['keywords'] = strtolower($search);
			} else {
				$data = array(
					'title' => 'Maaf, ',
                    'text' => 'Barang anda tidak dapat kami temukan!',
                    'desc' => 'Silakan melakukan pencarian kembali.'
                );
                $this->session->set_flashdata('not_found', $data);
                redirect('product');
			}

			$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
	        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
	        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

			$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
			$this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);

		} else {
			$data = array(
				'title' => 'Maaf,',
                'text' => 'pencarian anda kurang dari 3 huruf, silakan melakukan pencarian kembali.'
          	);
	    	$this->session->set_flashdata('notif_less_than_3_character', $data);
	    	redirect('product');
		}
	}
}
