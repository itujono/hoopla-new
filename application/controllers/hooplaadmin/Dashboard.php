<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Dashboard_m');
		$this->load->model('Titipsewa_m');
		$this->load->model('Sewabarang_m');
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
        $data['titipsewalist'] = $this->Titipsewa_m->selectall_titipsewa('',1)->result();
        $data['sewabaranglist'] = $this->Sewabarang_m->selectall_sewabarang('',1)->result();

		$data['subview'] = $this->load->view($this->data['backendDIR'].'dashboard', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}
}
