<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function ambilPengguna($username, $password)
  {
    //$sql = mysql_query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
    $this->db->select('*');
    $this->db->from('tbl_admin');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get();    
    return $query->num_rows();
  }
  
  
  public function dataPengguna($username)
  {
   $this->db->select('username');
   $this->db->select('nama_admin');
   $this->db->select('kode_skpd');//kode skpd nama skpd dll
   $this->db->where('username', $username);//where pake kode skpd
   $query = $this->db->get('tbl_admin');
   
   return $query->row();
  }
  
}  

?>