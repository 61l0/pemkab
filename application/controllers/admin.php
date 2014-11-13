<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Admin extends CI_Controller
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
    $session = $this->session->userdata('isLogin');
      if($session == FALSE)
      {
        redirect('admin/login');
      }else
      {
        redirect('home');
      }
  }

  public function login()//dologin
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
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username',$username);
          //$this->session->set_userdata('kode_skpd',$kode_skpd);
  //        $this->session->set_userdata('level',$level);

         redirect(base_url());
        }else
        {
          $this->session->set_flasHdata('pesan','Username dan password salah.');
          redirect('admin/login');

        }
      }
  }


  public function logout()
  {
   $this->session->sess_destroy();
   redirect('admin/login');
  }

  public function get()
  {
   $user = $this->session->userdata('username');
   $cek = $this->m_login->dataPengguna($user);
   print_r($cek);
  }

}

?>
