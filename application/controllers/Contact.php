<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Contact_m');
	}

	public function index() {
		$data['addONS'] = '';
		$data['title'] = 'Contact us - Hoopla Rental Mainan';
		$data['idbody'] = 'contact';

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'contact', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function savecontact() {
		$rules = $this->Contact_m->rules_contact;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Silakan isi dengan email anda yang valid');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Contact_m->array_from_post(array('namaCONTACT','emailCONTACT','descriptionCONTACT'));
			$idsave = $this->Contact_m->save($data);
	      	if ($idsave) {
	      		$emailadmin = $this->data['emailadmin'];
	      		$this->sendemailsewabarang($idsave,$emailadmin);
	        	$data = array(
	            	'title' => 'Terima kasih banyak!',
                    'text' => 'Form sudah berhasil disubmit. Akan kami lihat dan proses secepatnya, ya.'
	          	);
	   		} else {
				$data = array(
					'title' => 'Maaf, Gagal! :(',
                    'text' => 'Kami tidak dapat mengirim pesan anda, coba beberapa saat lagi!'
				);
	      	}
	    	$this->session->set_flashdata('message', $data);
	  		redirect('contact');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index();
		}
	}

	private function sendemailsewabarang($idcontact=NULL, $emailadmin=NULL){
		$contact = $this->Contact_m->selectall_contact($idcontact)->row();
		$name = $contact->namaCONTACT;
		$email = $contact->emailCONTACT;
		$terkirim = indonesian_date($contact->createdateCONTACT);
		$isipesan = $contact->descriptionCONTACT;

		$from_email = 'no-reply@hooplarentalmainan.com';
		$subject = 'Entry Contact Form dari- '.ucwords($name);
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
			                                    <h1 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #96d019; font-weight: normal;">Hi, Admin! Ada entry contact form baru masuk, nih!</h1>
			                                    <dl>
			                                        <dt>Nama pengirim</dt>
			                                        <dd>'.$name.'</dd>
			                                        <dt>Email pengirim</dt>
			                                        <dd>'.$email.'</dd>
			                                        <dt>Terkirim pada</dt>
			                                        <dd>'.$terkirim.'</dd>
			                                        <dt>Isi pesan</dt>
			                                        <dd>'.$isipesan.'</dd>
			                                    </dl>
			                                </td>
			                            </tr>
			                            <tr>
			                                <td style="padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
			                                    <!-- Button : BEGIN -->
			                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto; margin-bottom: 20px !important">
			                                        <tr>
			                                            <td style="border-radius: 50px; background: #96d019; text-align: center;" class="button-td">
			                                                <a href="'.base_url().'hooplaadmin/contact/index_contact'.'" style="background: #96d019; font-family: sans-serif; font-size: 13px; line-height: 2.6; text-align: center; text-decoration: none; display: block; border-radius: 50px; font-weight: bold;" class="button-a">
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
        $this->email->to($emailadmin);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}
}
