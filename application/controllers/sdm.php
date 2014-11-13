<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sdm extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('model_sdm');
	    $session = $this->session->userdata('isLogin');
      	if($session == FALSE)
      	{
        	redirect('admin/login');
      	}
      	date_default_timezone_set('Asia/Jakarta');

	}
	public function index()
	{
		$data =array('konten' => $this->load->view('sdm',array(),true) ,);
		$this->load->view('index',$data);
	}

	public function get_json($kondisi=""){
		//split kondisi,
		$kondisii="";
		if ($kondisi!="") {
		 	$str = explode("_",$kondisi);
		 //	$jum = count($str);
			$kondisii="";
			foreach($str as $i =>$j) {
			    $kondisii=$kondisii." and a.kd_sdm <> '".$j."'";
			}
			//echo $kondisii;
		 }
		$kondisii=$kondisii." and a.kode_skpd = '".$this->session->userdata('kode_skpd')."' ";

		$data = $this->model_sdm->get_filter_sdm($kondisii);
		if($data!=null){
			foreach ($data as $key) {
				$dataa[]=array(
				'kodepegawai'=>$key['kd_sdm'],
				'nip'=>$key['nip'],
				'nama'=>$key['nama'],
				'jabatan'=>$key['nama_jabatan'],
				'pangkat'=>$key['nama_pangkat'],
				'golongan'=>$key['golongan'],
				'ruang'=>$key['ruang'],
				);
			}
			echo json_encode($dataa);
		}else{
			echo '[]';
		}

	}
	public function get_ttd($jabatan,$kode_skpd=""){
		//$data = $this->model_sdm->get_sdm("where ".$field." = '".$input."'");
		$jabatan = str_replace('%20',' ',$jabatan);
		//echo $jabatan;
		if ($kode_skpd!="") {
			$kode_skpd=" kode_skpd='".$kode_skpd."' and";
		}

		$data = $this->model_sdm->get_sdm("where ".$kode_skpd." nama_jabatan like '%".$jabatan."%'");
		   //print_r($data);
		    foreach ($data as $key) {
            	$kd_sdm = $key['kd_sdm'];
            	$nip = $key['nip'];
            	$nama = $key['nama'];
            	$jabatan = $key['nama_jabatan'];
            }
		echo json_encode($data);
	}
}
