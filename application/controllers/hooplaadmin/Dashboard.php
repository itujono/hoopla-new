<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Dashboard_m');
	}

	public function index_dashboard() {
		$data['addONS'] = 'plugins_dashboard';

		$data['totalprodukrental'] = $this->Dashboard_m->jumlah_data('barang_rental');
        $data['totalproduksale'] = $this->Dashboard_m->jumlah_data('barang_sale');
        $data['totaltrivia'] = $this->Dashboard_m->jumlah_data('post_trivia');
        $data['totalvisitor'] = $this->Dashboard_m->jumlah_data('visitor');

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'dashboard', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}
}
