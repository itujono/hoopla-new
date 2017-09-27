<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Sale_m');
	}

	public function index (){
		$this->salelist();
	}

	public function salelist($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listsale'] = $this->Sale_m->selectall_sale()->result();

		foreach ($data['listsale'] as $key => $value) {
			$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['listsale'][$key]->idSALE), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listsale'][$key]->imageSALE = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listsale'][$key]->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['listsale'][$key]->idSALE).'/'.$map[0];
			}
		}

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getsale'] = $this->Sale_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getsale'] = $this->Sale_m->selectall_sale($id)->row();
			$map = directory_map('assets/upload/sale/pic-sale-'.folenc($data['getsale']->idSALE), FALSE, TRUE);
			
			if (empty($map)) {
				$data['getsale']->imageSALE = '';
			} else {
				$data['getsale']->imageSALE = base_url() . 'assets/upload/sale/pic-sale-'.folenc($data['getsale']->idSALE).'/'.$map[0];
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        $data['getcatsale'] = $this->Sale_m->dropdown_getcatsale(1);
		$data['subview'] = $this->load->view($this->data['backendDIR'].'sale', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savesale() {
		$rules = $this->Sale_m->rules_sale;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('numeric', 'Silakan masukan hanya berupa angka');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Sale_m->array_from_post(array('namaSALE','brandSALE','hargaSALE','statusSALE','descriptionSALE','idCATSALE'));
			$data['statusSALE']=1;
			$data['hargaSALE'] = str_replace(['Rp.',' ',','], ['','',''], $data['hargaSALE']);
			$id = decode(urldecode($this->input->post('idSALE')));

			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Sale_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-sale-'.folenc($subject);

			$path = 'assets/upload/sale/'.$filenamesubject;
			$map = directory_map($path, FALSE, TRUE);

			if (!file_exists( $path )){
            	mkdir($path, 0777, true);
        	}
        	if(isset($_FILES['imgSALE']['tmp_name'])){
				$config['upload_path']          = $path;
		      	$config['allowed_types']        = 'jpg|png|jpeg';
		      	$config['overwrite']             = TRUE;
		      	$config['file_name']             = $this->security->sanitize_filename($filenamesubject);

		      	$this->upload->initialize($config);
		      	$this->upload->do_upload('imgSALE');
	  		}
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/sale');
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
			$this->Sale_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/sale');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/sale');
		}
	}

	public function deleteimgsale($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/sale/pic-sale-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/sale/pic-sale-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/sale/pic-sale-'.folenc($id).'/'.$value);
			}
			if(is_dir($path)){
				rmdir($path);
			}
		}
		redirect('hooplaadmin/sale/salelist/'.$id1);
	}
}