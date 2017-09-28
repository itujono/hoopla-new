<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rental extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Rental_m');
	}

	public function index (){
		$this->rentallist();
	}

	public function rentallist($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listrental'] = $this->Rental_m->selectall_rental()->result();

		foreach ($data['listrental'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrental'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrental'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrental'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrental'][$key]->idRENTAL).'/'.$map[0];
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
			
			if (empty($map)) {
				$data['getrental']->imageRENTAL = '';
			} else {
				$data['getrental']->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL).'/'.$map[0];
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        $data['getcategory'] = $this->Rental_m->dropdown_getcategory(1);
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
			$data = $this->Rental_m->array_from_post(array('namaRENTAL','brandRENTAL','hargaRENTAL','statusRENTAL','durasiRENTAL','descriptionRENTAL','idCATEGORY'));
			$data['statusRENTAL']=1;
			$data['hargaRENTAL'] = str_replace(['Rp.',' ',','], ['','',''], $data['hargaRENTAL']);
			$id = decode(urldecode($this->input->post('idRENTAL')));

			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Rental_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-rental-'.folenc($subject);

			$path = 'assets/upload/rental/'.$filenamesubject;
			$map = directory_map($path, FALSE, TRUE);

			if (!file_exists( $path )){
            	mkdir($path, 0777, true);
        	}
        	if(isset($_FILES['imgRENTAL']['tmp_name'])){
				$config['upload_path']          = $path;
		      	$config['allowed_types']        = 'jpg|png|jpeg';
		      	$config['overwrite']             = TRUE;
		      	$config['file_name']             = $this->security->sanitize_filename($filenamesubject);

		      	$this->upload->initialize($config);
		      	$this->upload->do_upload('imgRENTAL');
	  		}
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/rental');
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->rentallist();
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
                redirect('hooplaadmin/rental');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/rental');
		}
	}

	public function deleteimgrental($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/rental/pic-rental-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/rental/pic-rental-'.folenc($id).'/'.$value);
			}
			if(is_dir($path)){
				rmdir($path);
			}
		}
		redirect('hooplaadmin/rental/rentallist/'.$id1);
	}
}