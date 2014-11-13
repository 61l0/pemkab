<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sdm extends CI_Model {
	public function get_filter_sdm($kondisi=""){
		date_default_timezone_set('Asia/Jakarta');		
		$tgl = date('Y-m-d');
		//echo $tgl;
		//$data = $this->db->query("select kd_sdm,nip,nama,nama_jabatan,nama_pangkat,golongan,ruang from tbl_sdm as a inner join tbl_jabatan as b on a.kd_jabatan = b.kd_jabatan inner join tbl_pangkat_gol as c on a.kd_pg = c.kd_pg where a.kd_sdm not in(select kd_sd from tbl_sppd where ".$kondisi." tanggal_surat = '$tgl') order by kd_sdm asc");
		$data = $this->db->query("select kd_sdm,nip,nama,nama_jabatan,nama_pangkat,golongan,ruang from tbl_sdm as a inner join tbl_jabatan as b on a.kd_jabatan = b.kd_jabatan inner join tbl_pangkat_gol as c on a.kd_pg = c.kd_pg 
			where a.kd_sdm not in(select kd_sdm from tbl_sppd where tanggal_surat = '$tgl') 
			and a.kd_sdm not in(select pengikut1 from tbl_sppd where tanggal_surat = '$tgl') 
			and a.kd_sdm not in(select pengikut2 from tbl_sppd where tanggal_surat = '$tgl') 
			and a.kd_sdm not in(select pengikut3 from tbl_sppd where tanggal_surat = '$tgl') 
			".$kondisi."order by kd_sdm asc");
		
		$data = $data->result_array();
	    //.where
		return $data;
	}

	public function get_sdm($kondisi=""){
		$data = $this->db->query("select kd_sdm,nip,nama,nama_jabatan,nama_pangkat,golongan,ruang from tbl_sdm as a inner join tbl_jabatan as b on a.kd_jabatan = b.kd_jabatan inner join tbl_pangkat_gol as c on a.kd_pg = c.kd_pg ".$kondisi." order by kd_sdm asc");
		return $data->result_array();
	}

}