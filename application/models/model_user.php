<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function get_user_all($value='')
	{
		$data =$this->db->query("select * from tbl_admin as a inner join tbl_skpd as b on a.kode_skpd = b.kode_skpd");
		return $data->result_array();
	}
	public function delete($no)
	{
		$query=$this->db->delete('tbl_admin',$no);
		if ($query) {
			return 1;
		}else{
			return 0;
		}
	}
}
?>