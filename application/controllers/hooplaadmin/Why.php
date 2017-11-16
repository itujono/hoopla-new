<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Why extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Why_m');
	}

	public function index_why($id = NULL){
		$data['addONS'] = 'plugins_create_why_data';
		$id = decode(urldecode($id));
		
		$data['listwhy'] = $this->Why_m->selectall_why()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getwhy'] = $this->Why_m->get_new();
		} else {
			
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getwhy'] = $this->Why_m->selectall_why($id)->row();
			$map = directory_map('assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($data['getwhy']->idWHY), FALSE, TRUE);
			if(!empty($map)){
				$data['getwhy']->imagewhyHOOPLA = base_url() . 'assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($data['getwhy']->idWHY).'/'.$map[0];
			} else {
				$data['getwhy']->imagewhyHOOPLA = '';
			}

			$map2 = directory_map('assets/upload/why/must-why/pic-must-why-1-'.folenc($data['getwhy']->idWHY), FALSE, TRUE);
			if(!empty($map2)){
				$data['getwhy']->imagewhymustHOOPLA = base_url() . 'assets/upload/why/must-why/pic-must-why-1-'.folenc($data['getwhy']->idWHY).'/'.$map2[0];
			} else {
				$data['getwhy']->imagewhymustHOOPLA = '';
			}

			$map3 = directory_map('assets/upload/why/must-why-second/pic-must-why-2-'.folenc($data['getwhy']->idWHY), FALSE, TRUE);
			if(!empty($map3)){
				$data['getwhy']->imagewhymust2HOOPLA = base_url() . 'assets/upload/why/must-why-second/pic-must-why-2-'.folenc($data['getwhy']->idWHY).'/'.$map3[0];
			} else {
				$data['getwhy']->imagewhymust2HOOPLA = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'why', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savewhy() {
		$rules = $this->Why_m->rules_why;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Why_m->array_from_post(array('titleWHY','descWHY','pointWHY','title2WHY','mustWHY','descmustWHY','must2WHY','descmust2WHY'));
			$data['pointWHY'] = encodingdata($data['pointWHY'], 0, $this->input->post('descpointWHY'));
			$id = decode(urldecode($this->input->post('idWHY')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$idsave = $this->Why_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-why-hoopla-'.folenc($subject);
			$filenamesubject2 = 'pic-must-why-1-'.folenc($subject);
			$filenamesubject3 = 'pic-must-why-2-'.folenc($subject);

			if(!empty($_FILES['imgwhyHOOPLA']['name'][0])) {
			$path = 'assets/upload/why/why-hoopla/'.$filenamesubject;
			if (!file_exists($path)){
            	mkdir($path, 0777, true);
        	}

			$config['upload_path']		= $path;
            $config['allowed_types']	= 'jpg|png|jpeg';
            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('imgwhyHOOPLA')){
	        	$data['uploads'] = $this->upload->data();
	        }

	  	}

	  	if(!empty($_FILES['imgmustwhyHOOPLA']['name'][0])) {
	  		$path2 = 'assets/upload/why/must-why/'.$filenamesubject2;
			if (!file_exists($path2)){
            	mkdir($path2, 0777, true);
        	}

			$config['upload_path']		= $path2;
            $config['allowed_types']	= 'jpg|png|jpeg';
            $config['file_name']        = $this->security->sanitize_filename($filenamesubject2);

	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('imgmustwhyHOOPLA')){
	        	$data['uploads'] = $this->upload->data();
	        }
	  	}

	  	if(!empty($_FILES['imgmustwhy2HOOPLA']['name'][0])) {
	  		$path3 = 'assets/upload/why/must-why-second/'.$filenamesubject3;
			if (!file_exists($path3)){
            	mkdir($path3, 0777, true);
        	}

			$config['upload_path']		= $path3;
            $config['allowed_types']	= 'jpg|png|jpeg';
            $config['file_name']        = $this->security->sanitize_filename($filenamesubject3);

	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('imgmustwhy2HOOPLA')){
	        	$data['uploads'] = $this->upload->data();
	        }
	  	}

  		$data = array(
        	'title' => 'Sukses',
            'text' => 'Penyimpanan Data berhasil dilakukan',
            'type' => 'success'
      	);
    	$this->session->set_flashdata('message', $data);
  		redirect('hooplaadmin/why/index_why');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_why();
		}
	}

	public function actiondelete_why($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Why_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/why/index_why');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/why/index_why');
		}
	}

	public function deleteimg_why($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));

			$map = directory_map('assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($id).'/'.$value);
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
		redirect('hooplaadmin/why/index_why/'.$id1);
	}

	public function deleteimg_mustwhy($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/why/must-why/pic-must-why-1-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/why/must-why/pic-must-why-1-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/why/must-why/pic-must-why-1-'.folenc($id).'/'.$value);
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
		redirect('hooplaadmin/why/index_why/'.$id1);
	}

	public function deleteimg_mustwhy_second($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/why/must-why-second/pic-must-why-2-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/why/must-why-second/pic-must-why-2-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/why/must-why-second/pic-must-why-2-'.folenc($id).'/'.$value);
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
		redirect('hooplaadmin/why/index_why/'.$id1);
	}
}