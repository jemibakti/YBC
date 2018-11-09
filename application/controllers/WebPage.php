<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WebPage extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
	}
	public function index(){
		$wheres['group_id'] = 1;
		$wheres['status'] = 1;
		$wheres['delete_status'] = 0;
		
		$data['slider'] = $this->Model_dop->get_table_wheres('m_pictrue',$wheres);
		
        $data["jenis"] = 1;
        $wheres['group_id'] = 9;
		$data['gallery'] = $this->Model_dop->get_table_wheres('m_pictrue',$wheres,4,'id','desc');
		
        $data["jenis"] = 1;
        $wheres['group_id'] = 4;
		$data['berita'] = $this->Model_dop->get_table_wheres('m_pictrue',$wheres,4,'id','desc');
		
		$wheres['group_id'] = 6;
		$data['room'] = $this->Model_dop->get_table_wheres('m_pictrue',$wheres);
		$wheres['group_id'] = 7;
		$data['dokter'] = $this->Model_dop->get_table_wheres('m_pictrue',$wheres);
		$wheres['group_id'] = 8;
		$data['other'] = $this->Model_dop->get_table_wheres('m_pictrue',$wheres);
		
		$this->load->view('webpage/index',$data);
	}
	
	function getDataTreath(){
		$data 	= $this->Model_dop->get_table_where('m_treat','id','2');
		header('Content-Type: application/json');
		if($data){
			echo json_encode($data);
		}else{
			$data = 'kosong';
			echo json_encode($data);
		}
	}
	function tesSel2(){
		$data = '';
		$this->load->view('webpage/tesSel2',$data);
	}
	function search(){
		if($this->input->get('q')){
		$data 	= $this->Model_dop->tesSel2();
		echo json_encode($data);
		}
	}
}