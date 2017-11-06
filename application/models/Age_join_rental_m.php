<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Age_join_rental_m extends MY_Model{
	
	protected $_table_name = 'hoopla_age_join_rental';
	protected $_order_by = 'idAGEJOINRENTAL';
	protected $_primary_key = 'idAGEJOINRENTAL';

	function __construct (){
		parent::__construct();
	}

	public function checking_input($idrental=NULL, $idage=NULL){
		$this->db->select('idRENTAL, idAGE');
		$this->db->from('age_join_rental');
		$this->db->where('idRENTAL', $idrental);
		$this->db->where('idAGE', $idage);

		return $this->db->get();
	}
}