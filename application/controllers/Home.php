<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Rental_m');
		$this->load->model('Brand_rental_m');
		$this->load->model('Age_rental_m');
		$this->load->model('Type_rental_m');
		$this->load->model('Slider_m');
		$this->load->model('Trivia_m');
	}

	public function index() {
		$data['addONS'] = 'home';
		$data['title'] = 'Hoopla - Toys Rent';
		$data['idbody'] = 'home';

		$data['listrentalmostrecent'] = $this->Rental_m->selectall_rental('','','','','',1)->result();
		foreach ($data['listrentalmostrecent'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalmostrecent'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalmostrecent'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalmostrecent'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalmostrecent'][$key]->idRENTAL).'/'.$map[0];
			}
		}

		$data['listrentalmostpopular'] = $this->Rental_m->selectall_rental('','','','',1,'')->result();
		foreach ($data['listrentalmostpopular'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalmostpopular'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalmostpopular'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalmostpopular'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalmostpopular'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		
		$data['listslider'] = $this->Slider_m->selectall_slider()->result();
		foreach ($data['listslider'] as $key => $value) {
			$map = directory_map('assets/upload/slider/pic-slider-'.folenc($data['listslider'][$key]->idSLIDER), FALSE, TRUE);
			if(!empty($map)){
				$data['listslider'][$key]->imageSLIDER = base_url() . 'assets/upload/slider/pic-slider-'.folenc($data['listslider'][$key]->idSLIDER).'/'.$map[0];
			} else {
				$data['listslider'][$key]->imageSLIDER = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['featuredtrivia'] = $this->Trivia_m->selectfeatured_trivia()->row();

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'home', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
