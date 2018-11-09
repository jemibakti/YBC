<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OborWeb extends CI_Controller {
	
	public $wheres = [];
	
	public function __construct()
	{
		parent::__construct();
		$this->wheres['status'] = 1;
		$this->wheres['delete_status'] = 0;
		date_default_timezone_set('Asia/Bangkok');
	}
	public function index(){
		$wheres = $this->wheres;
		$fotoKeluarga = $this->devideFotoKeluarga($wheres);
		$data["fotoKeluarga1"] = $fotoKeluarga["fk1"];
		$data["fotoKeluarga2"] = $fotoKeluarga["fk2"];
		$this->load->view('obor/index',$data);
	}
	function devideFotoKeluarga($wheres){
		
        $wheres['group_id'] = 2;
		$data = $this->Model_dop->get_table_wheres('m_pictrue',$wheres,6,'rand()','rand()');
		$total = count($data)/2;
		$result["fk1"] = $this->pushObjectFoto($data,$total,0);
		$result["fk2"] = $this->pushObjectFoto($data,$total,$total);
		return $result;
	}
	
	function pushObjectFoto($data,$total,$add){
		for( $no = 0 ; $no < $total ; $no++ ) {
			$result[$no] = $data[$no + $add];
		}
		// debug($result);
		return $result;
	}
}