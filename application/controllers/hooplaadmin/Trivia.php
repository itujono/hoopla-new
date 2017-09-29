<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trivia extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Trivia_m');
		$this->load->model('Category_trivia_m');
	}

	public function index (){
		$this->trivialist();
	}

	public function trivialist($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listtrivia'] = $this->Trivia_m->selectall_trivia()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['gettrivia'] = $this->Trivia_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['gettrivia'] = $this->Trivia_m->selectall_trivia($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        $data['getcattrivia'] = $this->Trivia_m->dropdown_getcattrivia(1);
		$data['subview'] = $this->load->view($this->data['backendDIR'].'trivia', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savetrivia() {
		$rules = $this->Trivia_m->rules_trivia;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Trivia_m->array_from_post(array('titleTRIVIA','idCATTRIVIA','descriptionTRIVIA','statusTRIVIA'));
			$data['statusTRIVIA']=1;
			$id = decode(urldecode($this->input->post('idTRIVIA')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Trivia_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/trivia');
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->salelist();
		}
	}

	public function actiondelete($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Trivia_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/trivia');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/trivia');
		}
	}

	public function category_trivia($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listcategorytrivia'] = $this->Category_trivia_m->selectall_category_trivia()->result();
		
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getcattrivia'] = $this->Category_trivia_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getcattrivia'] = $this->Category_trivia_m->selectall_category_trivia($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'category_trivia', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savecategorytrivia() {
		$rules = $this->Category_trivia_m->rules_category_trivia;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Category_trivia_m->array_from_post(array('namaCATTRIVIA','statusCATTRIVIA'));
			$data['statusCATTRIVIA']=1;
			$id = decode(urldecode($this->input->post('idCATTRIVIA')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Category_trivia_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/trivia/category_trivia');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->category_trivia();
		}
	}

	public function actiondelete_cattrivia($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Category_trivia_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/trivia/category_trivia');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->category_trivia();
		}
	}
}