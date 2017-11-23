<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Package extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Package_m');
	}

	public function index_package($id = NULL){
		$data['addONS'] = 'plugins_create_paket';
		$id = decode(urldecode($id));
		
		$data['listpackage'] = $this->Package_m->selectall_package()->result();
		foreach ($data['listpackage'] as $key => $value) {
			$map = directory_map('assets/upload/package/pic-package-'.folenc($data['listpackage'][$key]->idPAKET), FALSE, TRUE);
			if(!empty($map)){
				$data['listpackage'][$key]->imagePACKAGE = base_url() . 'assets/upload/package/pic-package-'.folenc($data['listpackage'][$key]->idPAKET).'/'.$map[0];
			} else {
				$data['listpackage'][$key]->imagePACKAGE = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getpackage'] = $this->Package_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getpackage'] = $this->Package_m->selectall_package($id)->row();
			$map = directory_map('assets/upload/package/pic-package-'.folenc($data['getpackage']->idPAKET), FALSE, TRUE);
			if(!empty($map)){
				$data['getpackage']->imagePACKAGE = base_url() . 'assets/upload/package/pic-package-'.folenc($data['getpackage']->idPAKET).'/'.$map[0];
			} else {
				$data['getpackage']->imagePACKAGE = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'package', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savepackage() {
		$rules = $this->Package_m->rules_package;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Package_m->array_from_post(array('titlePAKET','validPAKET','tablePAKET','titlebenefitPAKET','descbenefitPAKET','titlebuttonPAKET','linkbuttonPAKET','featuredPAKET'));
			if($data['featuredPAKET'] == 'on')$data['featuredPAKET']=1;
			else $data['featuredPAKET']=0;
			$data['descbenefitPAKET'] = encodingdata($this->input->post('title_benefit'), 0, $this->input->post('desc_benefit'));

			$id = decode(urldecode($this->input->post('idPAKET')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$data['descPAKET'] = $this->input->post('descPAKET');
			$idsave = $this->Package_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-package-'.folenc($subject);
			
			if(!empty($_FILES['imgPACKAGE']['name'][0])){

				$path = 'assets/upload/package/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}
				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);
		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('imgPACKAGE')){
		        	$data['uploads'] = $this->upload->data();
		        }
  			}

	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/package/index_package');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_package();
		}
	}

	public function actiondelete_package($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Package_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/package/index_package');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/package/index_package');
		}
	}

	public function deleteimgpackage($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/package/pic-package-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/package/pic-package-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/package/pic-package-'.folenc($id).'/'.$value);
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
		redirect('hooplaadmin/package/index_package/'.$id1);
	}
}