<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rental extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Rental_m');
		$this->load->model('Brand_rental_m');
		$this->load->model('Age_rental_m');
		$this->load->model('Type_rental_m');
	}

	public function index_product($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listrental'] = $this->Rental_m->selectall_rental()->result();

		foreach ($data['listrental'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrental'][$key]->idRENTAL), FALSE, TRUE);
			if(!empty($map)){
				$data['listrental'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrental'][$key]->idRENTAL).'/'.$map[0];
			} else {
				$data['listrental'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getrental'] = $this->Rental_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getrental'] = $this->Rental_m->selectall_rental($id)->row();
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL), FALSE, TRUE);
			$maps = array();
			$imgs = array();
			if(!empty($map)){
				foreach ($map  as $key => $value) {
					$maps[] = base_url().'assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL).'/'.$value;
					$imgs[] = $value;
				}
			}
			$data['getrental']->map = $maps;
			$data['getrental']->imgs = $imgs;
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        $data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand(1);
        $data['getage'] = $this->Age_rental_m->dropdown_getage(1);
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype(1);

		$data['subview'] = $this->load->view($this->data['backendDIR'].'rental', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saverental() {
		$rules = $this->Rental_m->rules_rental;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('numeric', 'Silakan masukan hanya berupa angka');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Rental_m->array_from_post(array('namaRENTAL','idBRAND','harga2RENTAL','harga4RENTAL','statusRENTAL','descriptionRENTAL','idTYPE','idAGE','popularRENTAL'));
			$data['statusRENTAL']=1;
			if($data['popularRENTAL'] == 'on')$data['popularRENTAL']=1;
			else $data['popularRENTAL']=0;
			$data['harga2RENTAL'] = str_replace(['Rp.',' ',','], ['','',''], $data['harga2RENTAL']);
			$data['harga4RENTAL'] = str_replace(['Rp.',' ',','], ['','',''], $data['harga4RENTAL']);
			$id = decode(urldecode($this->input->post('idRENTAL')));

			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Rental_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-rental-'.folenc($subject);

			if(!empty($_FILES['imgRENTAL']['name'][0])){
				$number_of_files = sizeof($_FILES['imgRENTAL']['tmp_name']);
				$files = $_FILES['imgRENTAL'];
				$path = 'assets/upload/rental/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	            for ($i = 0; $i < $number_of_files; $i++) {
			        $_FILES['imgRENTAL']['name'] = $files['name'][$i];
			        $_FILES['imgRENTAL']['type'] = $files['type'][$i];
			        $_FILES['imgRENTAL']['tmp_name'] = $files['tmp_name'][$i];
			        $_FILES['imgRENTAL']['error'] = $files['error'][$i];
			        $_FILES['imgRENTAL']['size'] = $files['size'][$i];
			        //now we initialize the upload library
			        $this->upload->initialize($config);
			        // we retrieve the number of files that were uploaded
			        if ($this->upload->do_upload('imgRENTAL')){
			          $data['uploads'][$i] = $this->upload->data();
			        }else{
			          $data['upload_errors'][$i] = $this->upload->display_errors();
			        }
			    }
	    	}
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/rental/index_product');
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_product();
		}
	}

	public function actiondelete($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Rental_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/rental/index_product');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/rental/index_product');
		}
	}

	public function deleteimgrental($id1=NULL, $id2=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			unlink('assets/upload/rental/pic-rental-'.folenc($id).'/'.$id2);
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('hooplaadmin/rental/index_product/'.$id1);
	}

	public function change_popular_product($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['popularRENTAL'] = $ss;
			$this->Rental_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/rental/index_product');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu telah terjadi',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/rental/index_product');
		}
	}

	public function brand_rental($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listbrandrental'] = $this->Brand_rental_m->selectall_brand_rental()->result();
		
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getbrand'] = $this->Brand_rental_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getbrand'] = $this->Brand_rental_m->selectall_brand_rental($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'brand_rental', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savebrandrental() {
		$rules = $this->Brand_rental_m->rules_brand_rental;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Brand_rental_m->array_from_post(array('namaBRAND','statusBRAND'));
			$data['statusBRAND']=1;
			$id = decode(urldecode($this->input->post('idBRAND')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Brand_rental_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/rental/brand_rental');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->brand_rental();
		}
	}

	public function actiondelete_brand($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Brand_rental_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/rental/brand_rental');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->brand_rental();
		}
	}

	public function age_rental($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listagerental'] = $this->Age_rental_m->selectall_age_rental()->result();
		
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getage'] = $this->Age_rental_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getage'] = $this->Age_rental_m->selectall_age_rental($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'age_rental', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveagerental() {
		$rules = $this->Age_rental_m->rules_age_rental;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Age_rental_m->array_from_post(array('namaAGE','statusAGE'));
			$data['statusAGE']=1;
			$id = decode(urldecode($this->input->post('idAGE')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Age_rental_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/rental/age_rental');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->age_rental();
		}
	}

	public function actiondelete_age($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Age_rental_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/rental/age_rental');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->age_rental();
		}
	}

	public function type_rental($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listtyperental'] = $this->Type_rental_m->selectall_type_rental()->result();
		
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['gettype'] = $this->Type_rental_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['gettype'] = $this->Type_rental_m->selectall_type_rental($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'type_rental', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savetyperental() {
		$rules = $this->Type_rental_m->rules_type_rental;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Type_rental_m->array_from_post(array('namaTYPE','statusTYPE'));
			$data['statusTYPE']=1;
			$id = decode(urldecode($this->input->post('idTYPE')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Type_rental_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/rental/type_rental');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->type_rental();
		}
	}

	public function actiondelete_type($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Type_rental_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/rental/type_rental');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->type_rental();
		}
	}
}