<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trivia_m extends MY_Model{
	
	protected $_table_name = 'hoopla_post_trivia';
	protected $_order_by = 'idTRIVIA';
	protected $_primary_key = 'idTRIVIA';

	public $rules_trivia = array(
		'titleTRIVIA' => array(
			'field' => 'titleTRIVIA', 
			'label' => 'Judul Trivia', 
			'rules' => 'trim|required'
		),
		'idCATTRIVIA' => array(
			'field' => 'idCATTRIVIA', 
			'label' => 'Kategori Trivia', 
			'rules' => 'trim|required'
		),
		'descriptionTRIVIA' => array(
			'field' => 'descriptionTRIVIA', 
			'label' => 'Deskripsi Trivia', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$trivia = new stdClass();
		$trivia->idTRIVIA = '';
		$trivia->titleTRIVIA = '';
		$trivia->idCATTRIVIA = '';
		$trivia->descriptionTRIVIA = '';
		$trivia->statusTRIVIA = '';
		return $trivia;
	}

	public function selectall_trivia($id = NULL, $status = NULL, $terbaru=NULL, $random=NULL) {
		$this->db->select('*');
		$this->db->select('category_trivia.namaCATTRIVIA');
		$this->db->from('post_trivia');
		$this->db->join('category_trivia', 'category_trivia.idCATTRIVIA = post_trivia.idCATTRIVIA');
		if ($id != NULL) {
			$this->db->where('idTRIVIA',$id);
		}
		if ($status != NULL) {
			$this->db->where('statusTRIVIA',$status);
		}
		if ($terbaru != NULL) {
			$this->db->order_by('idTRIVIA','desc');
		}
		if ($random != NULL) {
			$this->db->order_by('RAND()');
		}
		return $this->db->get();
	}

	public function dropdown_getcattrivia($dropdown=NULL){
		$this->db->from('category_trivia');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idCATTRIVIA] = $value->namaCATTRIVIA;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}

	public function selectall_similar_trivia($id=NULL) {
		$this->db->select('*');
		$this->db->from('post_trivia');
		$this->db->where('idCATTRIVIA', $id);
		$this->db->order_by('RAND()');
		return $this->db->get();
	}
}