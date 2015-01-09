<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->model('model_user');
     $this->load->model('model_skpd');
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
       // redirect('admin');
//        $content = $this->load->view('backoffice/home',true)
  //      $this->load->view('backoffice/index');

        $data =array('content' => $this->load->view('backoffice/home',array('title_content'=>'Home'),true) , );  
        $this->load->view('backoffice/index',$data);
      }
  }

  public function login()//dologin
  {
    $session = $this->session->userdata('isLogin');
      if($session == FALSE)
      {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');
    //$this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

      if($this->form_validation->run()==FALSE)
      {
        $this->load->view('backoffice/form_login_admin');
      }else
      {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $cek = $this->m_login->ambilPengguna($username, $password);

        if($cek <> 0)
        {
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username_admin',$username);
          //$this->session->set_userdata('kode_skpd',$kode_skpd);
  //        $this->session->set_userdata('level',$level);

         redirect('admin');
        }else
        {
          $this->session->set_flashdata('pesan','<div class="col-sm-12"><div class="alert alert-danger" role="alert">Username dan password salah.</div></div>');
          redirect('admin/login');

        }
      }}else{
        redirect('admin');
      }
  }


  public function logout()
  {
   //$this->session->sess_destroy();
    $this->session->unset_userdata('isLogin');
    $this->session->unset_userdata('username_admin');
   redirect('admin/login');
  }

  public function get()
  {
   $user = $this->session->userdata('username_admin');
   $cek = $this->m_login->dataPengguna($user);
   print_r($cek);
  }

  public function user($par='')
  { 

    switch ($par) {
      case '':
        $data =array('content' => $this->load->view('backoffice/user',array('title_content'=>'List User'),true) , );  
        $this->load->view('backoffice/index',$data);
        break;
      case 'get_user_all':
        $data = $this->model_user->get_user_all();
        //print_r($data);
        $dataa='';
        if($data!=null){
          foreach ($data as $key) {
            $dataa[]=array(
            'kode_skpd'=>$key['kode_skpd'],
            'username'=>$key['username'],
            'password'=>$key['password'],
            'skpd'=>$key['nama_skpd'],
            );
          }
          echo json_encode($dataa);
        }else{
          echo '[]';
        }
        break;
      default:

        break;
    }
  }

  public function skpd($par=''){
    switch ($par) {
      case '':
        $data =array('content' => $this->load->view('backoffice/skpd',array('title_content'=>'List Satuan Kerja Perangkat Daerah'),true) , );  
        $this->load->view('backoffice/index',$data);
        break;
      case 'get_all':
        $data = $this->model_skpd->get_all();
        //print_r($data);
        $dataa='';
        if($data!=null){
          foreach ($data as $key) {
            $dataa[]=array(
            'kode_skpd'=>$key['kode_skpd'],
            'nama_skpd'=>$key['nama_skpd'],
            'alamat_skpd'=>$key['alamat_skpd'],
            'telepon_skpd'=>$key['telepon_skpd'],
            'email_skpd'=>$key['email_skpd'],
            'website_skpd'=>$key['website_skpd'],
            );
          }
          echo json_encode($dataa);
        }else{
          echo '[]';
        }
        break;
      default:

        break;
    }
  }

}

?>
