<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Social extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Social_m');
	}

	public function index_social($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listsocial'] = $this->Social_m->selectall_social()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getsocial'] = $this->Social_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getsocial'] = $this->Social_m->selectall_social($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'social', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savesocial() {
		$rules = $this->Social_m->rules_social;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Social_m->array_from_post(array('waSOCIAL','lineSOCIAL','igSOCIAL','email1SOCIAL','email2SOCIAL','telpSOCIAL'));
			$id = decode(urldecode($this->input->post('idSOCIAL')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Social_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/social/index_social');
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_social();
		}
	}

	public function actiondelete($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Social_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/social/index_social');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/social/index_social');
		}
	}
}