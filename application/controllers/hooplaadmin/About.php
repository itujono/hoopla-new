<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('About_m');
	}

	public function index_about($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listabout'] = $this->About_m->selectall_about()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getabout'] = $this->About_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getabout'] = $this->About_m->selectall_about($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'about', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveabout() {
		$rules = $this->About_m->rules_about;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
				$data = $this->About_m->array_from_post(array('title1ABOUT','title2ABOUT','title3ABOUT','title4ABOUT','desc1ABOUT','desc2ABOUT','desc3ABOUT','desc4ABOUT','link2ABOUT','link3ABOUT','link4ABOUT'));
				$id = decode(urldecode($this->input->post('idABOUT')));

				if(empty($id))$id=NULL;
				$data = $this->security->xss_clean($data);
				$this->About_m->save($data, $id);
		  		$data = array(
	            	'title' => 'Sukses',
	                'text' => 'Penyimpanan Data berhasil dilakukan',
	                'type' => 'success'
	          	);
		    	$this->session->set_flashdata('message', $data);
		  		redirect('hooplaadmin/about/index_about');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_about();
		}
	}

	public function actiondelete_about($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->About_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/about/index_about');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/about/index_about');
		}
	}
}