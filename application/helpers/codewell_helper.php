<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function encode($string){
    $CI =& get_instance();
    $id = $CI->encryption->encrypt($string);
    $id = str_replace(['+','/'], ['==11==','==12=='], $id);
    return $id;
}

function decode($string){
    $CI =& get_instance();
    $id = str_replace(['==11==','==12=='], ['+','/'], $string);
    $id = $CI->encryption->decrypt($id);
    return $id;
}

function txt($string){
	return addslashes($string);
}

function dF($date, $format){
	return date($format, strtotime($date));
}

function folderENCRYPT($id,$type=0){
    return base64_encode($id);
}

function selectall_menu_active(){
    $CI =& get_instance();
    $CI->db->select('*');
    $CI->db->from('menu_admin');
    $CI->db->where('statusMENU', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_category_active(){
    $CI =& get_instance();
    $CI->db->select('namaCATEGORY, statusCATEGORY');
    $CI->db->from('category_rental');
    $CI->db->where('statusCATEGORY', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_category_trivia_active(){
    $CI =& get_instance();
    $CI->db->select('namaCATTRIVIA, statusCATTRIVIA');
    $CI->db->from('category_trivia');
    $CI->db->where('statusCATTRIVIA', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_category_sale_active(){
    $CI =& get_instance();
    $CI->db->select('namaCATSALE, statusCATSALE');
    $CI->db->from('category_sale');
    $CI->db->where('statusCATSALE', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function folenc($id){
    $folenc = base64_encode($id);
    return strtolower($folenc);
}

function count_notif(){
	$CI =& get_instance();
    $CI->db->select('isreadORDER, idPARTNER');
	$CI->db->from('orders');
    $partner = $CI->session->userdata('idUSER');

    if($CI->session->userdata('roleUSER') == 26){
        $CI->db->where('idPARTNER',$partner);
         $CI->db->where('isreadORDER',0);
    } elseif ($CI->session->userdata('roleUSER') == 22) {
        $CI->db->where('orders.isreadadminORDER', 0);
    } elseif ($CI->session->userdata('roleUSER') == 24) {
        $CI->db->where('orders.isreadadminORDER', 0);
    }

	$data = $CI->db->get()->num_rows();
	return $data;
}

function selectunreadorders(){
	$CI =& get_instance();
	$CI->db->select('orders.idORDER, orders.idCUSTOMER, kodeORDER, pickuptimeORDER, pickupADDRESSORDERKOTOR, createdateORDER');
	$CI->db->select('customers.nameCUSTOMER');
	$CI->db->from('orders');
	$CI->db->join('customers','customers.idCUSTOMER = orders.idCUSTOMER');
    $partner = $CI->session->userdata('idUSER');
    
    if($CI->session->userdata('roleUSER') == 26){
        $CI->db->where('orders.idPARTNER',$partner);
        $CI->db->where('orders.isreadORDER', 0);
    } elseif ($CI->session->userdata('roleUSER') == 22) {
        $CI->db->where('orders.isreadadminORDER', 0);
    } elseif ($CI->session->userdata('roleUSER') == 24) {
        $CI->db->where('orders.isreadadminORDER', 0);
    }
	
	$CI->db->order_by('createdateORDER', 'DESC');
	$data = $CI->db->get()->result();
	return $data;
}

function timeAgo($timestamp){

    $time = time() - $timestamp;

    if ($time < 60)
    return ( $time > 1 ) ? $time . ' detik yang lalu' : 'satu detik';

    elseif ($time < 3600) {
    $tmp = floor($time / 60);
    return ($tmp > 1) ? $tmp . ' menit yang lalu' : ' satu menit yang lalu';
    }

    elseif ($time < 86400) {
    $tmp = floor($time / 3600);
    return ($tmp > 1) ? $tmp . ' jam yang lalu' : ' satu jam yang lalu';
    }

    elseif ($time < 2592000) {
    $tmp = floor($time / 86400);
    return ($tmp > 1) ? $tmp . ' hari lalu' : ' satu hari lalu';
    }

    elseif ($time < 946080000) {
    $tmp = floor($time / 2592000);
    return ($tmp > 1) ? $tmp . ' bulan lalu' : ' satu bulan lalu';
    }

    else {
    $tmp = floor($time / 946080000);
    return ($tmp > 1) ? $tmp . ' years' : ' a year';
    }
}

function replacesymbol($string){
    return str_replace([' ','&',',','.','(',')','!','?'], ['','','','','','','',''], $string);
}

function seo_url($string){
    $change = str_replace([' ','&',',','.','(',')','!','?'], ['-','-','-','-','-','-','-','-'], $string);
    return strtolower($change);
}

function cutting($string=NULL){
    $replace = str_replace('-',' ', $string);
    $cut = substr($replace, 0, 4);
    return $cut;
}
function cetak($str){
    echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}