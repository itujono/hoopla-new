<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Terms_m');
		$this->load->model('Terms_caratitip_m');
	}

	public function index_terms($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listterms'] = $this->Terms_m->selectall_terms()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getterms'] = $this->Terms_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getterms'] = $this->Terms_m->selectall_terms($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'terms', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveterms() {
		$rules = $this->Terms_m->rules_terms;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
				$data = $this->Terms_m->array_from_post(array('title1TERMS','title2TERMS','title3TERMS','title4TERMS','desc1TERMS','desc2TERMS','desc3TERMS','desc4TERMS','harga1TERMS','harga2TERMS','harga3TERMS','harga4TERMS','place1TERMS','place2TERMS','place3TERMS','place4TERMS'));
				$id = decode(urldecode($this->input->post('idTERMS')));

				if(empty($id))$id=NULL;
				$data = $this->security->xss_clean($data);
				$this->Terms_m->save($data, $id);
		  		$data = array(
	            	'title' => 'Sukses',
	                'text' => 'Penyimpanan Data berhasil dilakukan',
	                'type' => 'success'
	          	);
		    	$this->session->set_flashdata('message', $data);
		  		redirect('hooplaadmin/terms/index_terms');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_terms();
		}
	}

	public function actiondelete_terms($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Terms_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/terms/index_terms');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/terms/index_terms');
		}
	}

	public function index_terms_cara_titipsewa($id = NULL){
		$data['addONS'] = 'plugins_terms_titipsewa';
		$id = decode(urldecode($id));
		
		$data['listcaratitip'] = $this->Terms_caratitip_m->selectall_termscartip()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getcartip'] = $this->Terms_caratitip_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getcartip'] = $this->Terms_caratitip_m->selectall_termscartip($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'terms_caratitip', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveterms_caratitip() {
		$rules = $this->Terms_caratitip_m->rules_terms_caratitip;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
				$data = $this->Terms_caratitip_m->array_from_post(array('titleTERMSTITIP','textTERMSTITIP','syaratTERMSTITIP','caraTERMSTITIP'));
				$id = decode(urldecode($this->input->post('idTERMSTITIP')));

				if(empty($id))$id=NULL;
				$data = $this->security->xss_clean($data);
				$this->Terms_caratitip_m->save($data, $id);
		  		$data = array(
	            	'title' => 'Sukses',
	                'text' => 'Penyimpanan Data berhasil dilakukan',
	                'type' => 'success'
	          	);
		    	$this->session->set_flashdata('message', $data);
		  		redirect('hooplaadmin/terms/index_terms_cara_titipsewa');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_terms_cara_titipsewa();
		}
	}

	public function actiondelete_terms_caratitip($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Terms_caratitip_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/terms/index_terms_cara_titipsewa');
		}else{
			$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/terms/index_terms_cara_titipsewa');
		}
	}
}