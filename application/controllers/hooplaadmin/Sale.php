<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends Admin_Controller{

	public function __construct (){
		parent::__construct();
		$this->load->model('Sale_m');
		$this->load->model('Category_sale_m');
	}

	public function index_sale($id = NULL){
		$data['addONS'] = 'plugins_create_products_sale';
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
			$maps = array();
			$imgs = array();
			if(!empty($map)){
				foreach ($map  as $key => $value) {
					$maps[] = base_url().'assets/upload/sale/pic-sale-'.folenc($data['getsale']->idSALE).'/'.$value;
					$imgs[] = $value;
				}
			}
			$data['getsale']->map = $maps;
			$data['getsale']->imgs = $imgs;
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

			if(!empty($_FILES['imgSALE']['name'][0])){
				$number_of_files = sizeof($_FILES['imgSALE']['tmp_name']);
				$files = $_FILES['imgSALE'];
				$path = 'assets/upload/sale/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	            for ($i = 0; $i < $number_of_files; $i++) {
			        $_FILES['imgSALE']['name'] = $files['name'][$i];
			        $_FILES['imgSALE']['type'] = $files['type'][$i];
			        $_FILES['imgSALE']['tmp_name'] = $files['tmp_name'][$i];
			        $_FILES['imgSALE']['error'] = $files['error'][$i];
			        $_FILES['imgSALE']['size'] = $files['size'][$i];
			        $this->upload->initialize($config);
			        if ($this->upload->do_upload('imgSALE')){
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
	  		redirect('hooplaadmin/sale/index_sale');
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_sale();
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
                redirect('hooplaadmin/sale/index_sale');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		    );
		        $this->session->set_flashdata('message',$data);
		        redirect('hooplaadmin/sale/index_sale');
		}
	}

	public function deleteimgsale($id1=NULL, $id2=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			unlink('assets/upload/sale/pic-sale-'.folenc($id).'/'.$id2);
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('hooplaadmin/sale/index_sale/'.$id1);
	}

	public function category_sale($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listcategorysale'] = $this->Category_sale_m->selectall_category_sale()->result();
		
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getcatsale'] = $this->Category_sale_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getcatsale'] = $this->Category_sale_m->selectall_category_sale($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'category_sale', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savecategorysale() {
		$rules = $this->Category_sale_m->rules_category_sale;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Category_sale_m->array_from_post(array('namaCATSALE','statusCATSALE'));
			$data['statusCATSALE']=1;
			$id = decode(urldecode($this->input->post('idCATSALE')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);
			$idsave = $this->Category_sale_m->save($data, $id);
	  		$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('hooplaadmin/sale/category_sale');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->category_sale();
		}
	}

	public function actiondelete_sale($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Category_sale_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('hooplaadmin/sale/category_sale');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->category_sale();
		}
	}
}