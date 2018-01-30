<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trivia extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Trivia_m');
		$this->load->model('Category_trivia_m');
	}

	public function index_trivia($id = NULL){
		$data['addONS'] = 'plugins_create_products_sale';
		$id = decode(urldecode($id));
		
		$data['listtrivia'] = $this->Trivia_m->selectall_trivia()->result();
		foreach ($data['listtrivia'] as $key => $value) {
			$map = directory_map('assets/upload/trivia/pic-trivia-'.folenc($data['listtrivia'][$key]->idTRIVIA), FALSE, TRUE);
			if(!empty($map)){
				$data['listtrivia'][$key]->imageTRIVIA = base_url() . 'assets/upload/trivia/pic-trivia-'.folenc($data['listtrivia'][$key]->idTRIVIA).'/'.$map[0];
			} else {
				$data['listtrivia'][$key]->imageTRIVIA = base_url() . 'assets/upload/no-image-available.png';
			}
		}
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
			$map = directory_map('assets/upload/trivia/pic-trivia-'.folenc($data['gettrivia']->idTRIVIA), FALSE, TRUE);
			if(!empty($map)){
				$data['gettrivia']->imageTRIVIA = base_url() . 'assets/upload/trivia/pic-trivia-'.folenc($data['gettrivia']->idTRIVIA).'/'.$map[0];
			} else {
				$data['gettrivia']->imageTRIVIA = '';
			}
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
			$data = $this->Trivia_m->array_from_post(array('titleTRIVIA','idCATTRIVIA','statusTRIVIA','featuredTRIVIA'));
			$data['statusTRIVIA']=1;
			if($data['featuredTRIVIA'] == 'on')$data['featuredTRIVIA']=1;
			else $data['featuredTRIVIA']=0;

			$id = decode(urldecode($this->input->post('idTRIVIA')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$data['descriptionTRIVIA'] = $this->input->post('descriptionTRIVIA');
			$idsave = $this->Trivia_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-trivia-'.folenc($subject);

			$path = 'assets/upload/trivia/'.$filenamesubject;
			if (!file_exists($path)){
            	mkdir($path, 0777, true);
        	}

			$config['upload_path']		= $path;
            $config['allowed_types']	= 'jpg|png|jpeg';
            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('imgTRIVIA')){
	        	$data['uploads'] = $this->upload->data();
	        }
	        $data = array(
	        	'title' => 'Sukses',
	            'text' => 'Penyimpanan Data berhasil dilakukan',
	            'type' => 'success'
      		);
	        $this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/trivia/index_trivia');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_trivia();
		}
	}

	public function actiondelete_trivia($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Trivia_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/trivia/index_trivia');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/trivia/index_trivia');
		}
	}

	public function deleteimgtrivia($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/trivia/pic-trivia-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/trivia/pic-trivia-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/trivia/pic-trivia-'.folenc($id).'/'.$value);
			}
			if(is_dir($path)){
				rmdir($path);
			}
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('hooplaadmin/trivia/index_trivia/'.$id1);
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