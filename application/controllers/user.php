<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->library(array('form_validation','session'));
    $this->load->database();
    $this->load->helper('url');
  }

  public function index()
  {
      $session = $this->session->userdata('isUserLogin');
      if($session == FALSE)
      {
        redirect('user/login');
      }else
      {
        redirect('');
      }
  }

  public function login()//dologin
  {
    $session = $this->session->userdata('isUserLogin');
      if($session == FALSE)
      {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');
    //$this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

      if($this->form_validation->run()==FALSE)
      {
        $this->load->view('form_login');
      }else
      {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $cek = $this->m_login->ambilPengguna($username, $password);

        if($cek <> 0)
        {
          $this->session->set_userdata('isUserLogin', TRUE);
          $this->session->set_userdata('username',$username);
          //$this->session->set_userdata('kode_skpd',$kode_skpd);
  //        $this->session->set_userdata('level',$level);

         redirect(base_url());
        }else
        {
          $this->session->set_flasHdata('pesan','<div class="col-sm-12"><div class="alert alert-danger" role="alert">Username dan password salah.</div></div>');
          redirect('user/login');

        }
      }}else{
        redirect('');
      }
  }


  public function logout()
  {
   //$this->session->sess_destroy();
    $this->session->unset_userdata('isUserLogin');
    $this->session->unset_userdata('username');
    //$this->session->unset_userdata('username');
    redirect('user/login');
  }

  public function get()
  {
   $user = $this->session->userdata('username');
   $cek = $this->m_login->dataPengguna($user);
   print_r($cek);
  }

}

?>
