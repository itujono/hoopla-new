<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Rental_m');
		$this->load->model('Brand_rental_m');
		$this->load->model('Age_rental_m');
		$this->load->model('Type_rental_m');
	}

	public function index() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$data['listrentalbybrands'] = $this->Rental_m->selectall_rental()->result();
		foreach ($data['listrentalbybrands'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbybrands'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalbybrands'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbybrands'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbybrands'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['listrentalbycat'] = $this->Rental_m->selectall_rental('','','',1)->result();
		foreach ($data['listrentalbycat'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbycat'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalbycat'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbycat'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbycat'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['listrentalbyage'] = $this->Rental_m->selectall_rental('','','','',1)->result();
		foreach ($data['listrentalbyage'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['listrentalbyage'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['listrentalbyage'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['listrentalbyage'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['listrentalbyage'][$key]->idRENTAL).'/'.$map[0];
			}
		}

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

        if(!empty($this->session->flashdata('notif_less_than_3_character'))) {
            $data['notif_less_than_3_character'] = $this->session->flashdata('notif_less_than_3_character');
        } else if(!empty($this->session->flashdata('not_found'))) {
        	$data['not_found'] = $this->session->flashdata('not_found');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id=NULL){
		$data['addONS'] = 'product-detail';
		$data['title'] = 'Product Detail - Toys Rent';
		$data['idbody'] = 'product-detail';
	
		$id = base64_decode(cutting($id));
		$data['getrental'] = $this->Rental_m->selectall_rental($id)->row();
		$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL), FALSE, TRUE);
		$maps = array();
		$imgs = array();
		if(!empty($map)){
			foreach ($map  as $key => $value) {
				$maps[] = base_url().'assets/upload/rental/pic-rental-'.folenc($data['getrental']->idRENTAL).'/'.$value;
			}
		}
		$data['getrental']->map = $maps;
		
		$data['similarental'] = $this->Rental_m->selectall_random_rental($data['getrental']->idBRAND)->result();

		foreach ($data['similarental'] as $key => $value) {
			$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['similarental'][$key]->idRENTAL), FALSE, TRUE);
			
			if (empty($map)) {
				$data['similarental'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
			} else {
				$data['similarental'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['similarental'][$key]->idRENTAL).'/'.$map[0];
			}
		}
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function filterby() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$filter = $this->input->get('filter');

		$Searching = $this->Rental_m->searching_filter($filter)->result();
		
        if(!empty($Searching)){
			$data['searching'] = $Searching;
			foreach ($data['searching'] as $key => $value) {
				$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['searching'][$key]->idRENTAL), FALSE, TRUE);
				
				if (empty($map)) {
					$data['searching'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
				} else {
					$data['searching'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['searching'][$key]->idRENTAL).'/'.$map[0];
				}
			}
		}

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function sortby() {
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';
		
		$sortbrand = $this->input->get('sortbrand');
		$sorttype = $this->input->get('sorttype');
		$sortage = $this->input->get('sortage');
		
		$Searching = $this->Rental_m->searching_sortby($sortbrand, $sorttype, $sortage)->result();
		// print_r($this->db->last_query());
		// exit;
        if(!empty($Searching)){
			$data['searchsortby'] = $Searching;
			foreach ($data['searchsortby'] as $key => $value) {
				$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['searchsortby'][$key]->idRENTAL), FALSE, TRUE);
				
				if (empty($map)) {
					$data['searchsortby'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
				} else {
					$data['searchsortby'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['searchsortby'][$key]->idRENTAL).'/'.$map[0];
				}
			}
		}

		$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function submit_sewabarang() {
		$rules = $this->Sewabarang_m->rules_sewabarang;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('min_length', 'Silakan isi dengan minimal 10 angka nomor telepon anda');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Sewabarang_m->array_from_post(array('namaSEWA','alamatSEWA','telpSEWA','antarjemputSEWA','instagramSEWA','periodeSEWA','pengirimanSEWA','rekomenSEWA','ketahuiSEWA','permintaanSEWA','syaratSEWA','barangSEWA'));
			if($data['syaratSEWA'] == 'agree')$data['syaratSEWA']=1;
			
			$idsewa = $this->Sewabarang_m->save($data);

			if ($idsewa) {

				$email = $this->data['emailadmin'];

                if($this->sendemailsewabarang($idsewa, $email)){
               		
					$data = array(
	                    'text' => 'Terima kasih sudah mengisi form Sewa Mainan yang telah kami sediakan, kami akan secepatnya menghubungi anda, Terima Kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect($_SERVER['HTTP_REFERER']);

				} else {

					$data = array(
	                    'text' => 'Maaf, mungkin ada Kesalahan koneksi, mohon ulangi beberapa saat lagi.'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect($_SERVER['HTTP_REFERER']);
				}

			} else {

				$data = array(
		            'text' => 'Maaf, Sistem tidak dapat menyimpan data sewa anda, silakan ulangi beberapa saat lagi.'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect($_SERVER['HTTP_REFERER']);
			}
		} else {

			$data = array(
	            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form titip dan sewa anda!.'
	        );
	        $this->session->set_flashdata('message',$data);
	        redirect($_SERVER['HTTP_REFERER']);
		}
	}

	private function sendemailsewabarang($idsewa=NULL, $email=NULL){
		$datasewa = $this->Sewabarang_m->selectall_sewabarang($idsewa)->row();
		$name = $datasewa->namaSEWA;

		$from_email = 'no-reply@hooplarentalmainan.com';
		$subject = 'Penyewaan dari - '.ucwords($name);
		$message = '
		<!DOCTYPE html>
		<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
		<head>
		    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
		    <meta name="viewport" content="width=device-width">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="x-apple-disable-message-reformatting">
		    <title>'.$subject.'</title>
		    <!--[if mso]>
		        <style>
		            * {
		                font-family: sans-serif !important;
		            }
		        </style>
		    <![endif]-->

		    <!--[if !mso]><!-->
		    <!-- insert web font reference, eg: <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css"> -->
		    <!--<![endif]-->
		    <style>
		        html,
		        body {
		            margin: 0 auto !important;
		            padding: 0 !important;
		            height: 100% !important;
		            width: 100% !important;
		        }

		        /* What it does: Stops email clients resizing small text. */
		        * {
		            -ms-text-size-adjust: 100%;
		            -webkit-text-size-adjust: 100%;
		        }

		        div[style*="margin: 16px 0"] {
		            margin: 0 !important;
		        }

		        table,
		        td {
		            mso-table-lspace: 0pt !important;
		            mso-table-rspace: 0pt !important;
		        }

		        table {
		            border-spacing: 0 !important;
		            border-collapse: collapse !important;
		            table-layout: fixed !important;
		            margin: 0 auto !important;
		        }
		        table table table {
		            table-layout: auto;
		        }

		        img {
		            -ms-interpolation-mode:bicubic;
		        }

		        *[x-apple-data-detectors],  /* iOS */
		        .x-gmail-data-detectors,    /* Gmail */
		        .x-gmail-data-detectors *,
		        .aBn {
		            border-bottom: 0 !important;
		            cursor: default !important;
		            color: inherit !important;
		            text-decoration: none !important;
		            font-size: inherit !important;
		            font-family: inherit !important;
		            font-weight: inherit !important;
		            line-height: inherit !important;
		        }

		        .a6S {
		            display: none !important;
		            opacity: 0.01 !important;
		        }

		        img.g-img + div {
		            display: none !important;
		        }

		        .button-link {
		            text-decoration: none !important;
		        }

		        #order-masuk tr td {
		            border-bottom: transparent;
		        }

		        #contact-form dl dt, #email-titipsewa dl dt {
		            font-weight: bold;
		        }

		        #contact-form dl dd, #email-titipsewa dl dd {
		            margin: 0;
		            margin-bottom: 10px;
		        }
		        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
		            .email-container {
		                min-width: 375px !important;
		            }
		        }

		    </style>
		    <!-- CSS Reset : END -->

		    <!-- Progressive Enhancements : BEGIN -->
		    <style>

		    .button-td,
		    .button-a {
		        transition: all 100ms ease-in;
		    }
		    .button-td:hover,
		    .button-a:hover {
		        background: #555555 !important;
		        border-color: #555555 !important;
		    }

		    /* Media Queries */
		    @media screen and (max-width: 600px) {

		        /* What it does: Adjust typography on small screens to improve readability */
		        .email-container p {
		            font-size: 17px !important;
		            line-height: 22px !important;
		        }

		    }

		    </style>

		    <!--[if gte mso 9]>
		    <xml>
		        <o:OfficeDocumentSettings>
		            <o:AllowPNG/>
		            <o:PixelsPerInch>96</o:PixelsPerInch>
		        </o:OfficeDocumentSettings>
		    </xml>
		    <![endif]-->

		</head>
		<body width="100%" bgcolor="#222222" style="margin: 0; mso-line-height-rule: exactly;" id="email-titipsewa">
		    <center style="width: 100%; background: #dff0f7; text-align: left;">
		        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
		            Hi, Admin! ada '.$subject.'
		        </div>

		        <div style="max-width: 600px; margin: auto;" class="email-container">
		            <!--[if mso]>
		            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
		            <tr>
		            <td>
		            <![endif]-->

		            <!-- Email Header : BEGIN -->
		            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
		                <tr>
		                    <td style="padding: 20px 0; text-align: center">
		                        <img src="'.base_url().$this->data["asfront"].'img/logo-web.png" width="300" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 300px; height: auto; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;" class="g-img" alt="Hoopla Toys Rental">
		                    </td>
		                </tr>
		            </table>
		            <!-- Email Header : END -->

				            <!-- Email Body : BEGIN -->
				            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">

				                <!-- 1 Column Text + Button : BEGIN -->
				                <tr style="padding-bottom: 2em; border-bottom: 2px solid rgba(0, 0, 0, 0.09);">
				                    <td bgcolor="#ffffff">
				                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
				                            <tr>
		                                <td style="padding: 40px; padding-bottom: 15px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
		                                    <h1 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #96d019; font-weight: normal;">Hi, Admin! Ada pesanan baru masuk!</h1>
		                                    <p style="margin: 0;">Ada orderan rental baru dari '.$name.'. Silakan klik button di bawah ini untuk take action.</p>
		                                </td>
		                            </tr>
		                            <tr>
		                                <td style="padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
		                                    <!-- Button : BEGIN -->
		                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto; margin-bottom: 20px !important">
		                                        <tr>
		                                            <td style="border-radius: 50px; background: #96d019; text-align: center;" class="button-td">
		                                                <a href="'.base_url().'hoopladmin/sewabarang/index_sewabarang'.'" style="background: #96d019; font-family: sans-serif; font-size: 13px; line-height: 2.6; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;" class="button-a">
		                                                    <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;Coba lihat&nbsp;&nbsp;&nbsp;&nbsp;</span>
		                                                </a>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <!-- Button : END -->
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		                <!-- 1 Column Text + Button : END -->

		                <!-- Clear Spacer : BEGIN -->
		                <tr>
		                    <td aria-hidden="true" height="40" style="font-size: 0; line-height: 0;">
		                        &nbsp;
		                    </td>
		                </tr>
		                <!-- Clear Spacer : END -->

		                <!-- 1 Column Text : BEGIN -->
		                <tr style="border-bottom: 2px solid rgba(0, 0, 0, 0.09);">
		                    <td bgcolor="#ffffff">
		                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
		                            <tr>
		                                <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
		                                    <p style="margin: 0;">Email ini terkirim otomatis oleh sistem Codewell Indonesia. Tidak perlu reply atau mengirim email apapun ke alamat ini.</p>
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		                <!-- 1 Column Text : END -->

		            </table>
		            <!-- Email Body : END -->

		            <!-- Email Footer : BEGIN -->
		            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; line-height:18px;">
		                <tr>
		                    <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;" class="x-gmail-data-detectors">
		                        <br><br>
		                        Hoopla Rental Mainan<br>IG: @hoopla_rentalmainan<br>(0856) 6765 1688
		                        <br><br>
		                    </td>
		                </tr>
		            </table>
		            <!-- Email Footer : END -->

		            <!--[if mso]>
		            </td>
		            </tr>
		            </table>
		            <![endif]-->
		        </div>

		    </center>
		</body>
		</html>';

		//configure email settings
        $config = $this->mail_config();
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Hoopla Toys Rental');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}

	public function searching(){
		$data['addONS'] = 'product';
		$data['title'] = 'Product - Hoopla Toys Rent';
		$data['idbody'] = 'product';

		$search = $this->input->get('search');
		if(strlen($search) > 3){
			$Searching = $this->Rental_m->searching_all_rental($search)->result();
			$data['searching_all_rental'] = $Searching;
			
			if(!empty($data['searching_all_rental'])){
				foreach ($data['searching_all_rental'] as $key => $value) {
					$map = directory_map('assets/upload/rental/pic-rental-'.folenc($data['searching_all_rental'][$key]->idRENTAL), FALSE, TRUE);
				
					if (empty($map)) {
						$data['searching_all_rental'][$key]->imageRENTAL = base_url() . 'assets/upload/no-image-available.png';
					} else {
						$data['searching_all_rental'][$key]->imageRENTAL = base_url() . 'assets/upload/rental/pic-rental-'.folenc($data['searching_all_rental'][$key]->idRENTAL).'/'.$map[0];
					}
				}
				$data['keywords'] = strtolower($search);
			} else {
				$data = array(
					'title' => 'Maaf, ',
                    'text' => 'Barang anda tidak dapat kami temukan!',
                    'desc' => 'Silakan melakukan pencarian kembali.'
                );
                $this->session->set_flashdata('not_found', $data);
                redirect('product');
			}

			$data['getbrand'] = $this->Brand_rental_m->dropdown_getbrand()->result();
	        $data['getage'] = $this->Age_rental_m->dropdown_getage()->result();
	        $data['gettype'] = $this->Type_rental_m->dropdown_gettype()->result();
	        
			$data['subview'] = $this->load->view($this->data['frontendDIR'].'product', $data, TRUE);
			$this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);

		} else {
			$data = array(
				'title' => 'Maaf,',
                'text' => 'pencarian anda kurang dari 3 huruf, silakan melakukan pencarian kembali.'
          	);
	    	$this->session->set_flashdata('notif_less_than_3_character', $data);
	    	redirect('product');
		}
	}
}
