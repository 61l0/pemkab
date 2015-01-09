<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_skpd extends CI_Model {
	public function get_all($value='')
	{
		$data =$this->db->query("select * from tbl_skpd");
		return $data->result_array();
	}
}
?>