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
        $data = array('del_confirm_user'=>$this->load->view('backoffice/modal_confirm_del_user',array(),true) ,
          'tambah_user'=>$this->load->view('backoffice/tambah-skpd',array(),true),
          'edit_user'=>$this->load->view('backoffice/edit-skpd',array(),true),
          'title_content'=>'List User',
        );
        $data =array('content' => $this->load->view('backoffice/user',$data,true) , );  
        $this->load->view('backoffice/index',$data);
        break;
      case 'get_user_all':
        $data = $this->model_user->get_user_all();
        //print_r($data);
        $dataa='';
        if($data!=null){
          foreach ($data as $key) {
            $dataa[]=array(
            'no_user'=>$key['no'],
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
      case 'delete':
        $no_user = $_POST['par_no_user'];
        //print_r($_POST);
        $respon=$this->model_user->delete(array('no' => $no_user));
        echo $respon;
        break;
      default:

        break;
    }
  }

  public function skpd($par=''){
    switch ($par) {
      case '':
        //load modal del ,update ,tambah
        $data = array('del_confirm_skpd'=>$this->load->view('backoffice/modal_confirm_del_skpd',array(),true) ,
          'tambah_skpd'=>$this->load->view('backoffice/tambah-skpd',array(),true),
          'edit_skpd'=>$this->load->view('backoffice/edit-skpd',array(),true),
          'title_content'=>'List Satuan Kerja Perangkat Daerah',
        );
        
        $data =array('content' => $this->load->view('backoffice/skpd',$data,true) , );  
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
      case 'delete':
        $kode_skpd = $_POST['par_kode_skpd'];
        //print_r($_POST);
        $respon=$this->model_skpd->delete(array('kode_skpd' => $kode_skpd));
        echo $respon;
        break;
      case 'baru':
        
        //print_r($_POST);
        $data=array(
          'kode_skpd' => $_POST['par_kodeskpd'],
          'nama_skpd' => $_POST['par_namaskpd'],
          'telepon_skpd' => $_POST['par_telpskpd'],
          'alamat_skpd' => $_POST['par_alamatskpd'],
          'email_skpd' => $_POST['par_emailskpd'],
          'website_skpd' => $_POST['par_websiteskpd'],
        );
        //print_r($data);
        $respon=$this->model_skpd->insert($data);
        echo $respon;
        break;
      case 'update':
        $data=array(          
          'nama_skpd' => $_POST['par_namaskpd'],
          'telepon_skpd' => $_POST['par_telpskpd'],
          'alamat_skpd' => $_POST['par_alamatskpd'],
          'email_skpd' => $_POST['par_emailskpd'],
          'website_skpd' => $_POST['par_websiteskpd'],
        );
        //print_r($data);

        $respon=$this->model_skpd->update($data,$_POST['par_kodeskpd']);
        echo $respon;
        break;
      case 'get_by_kode':
        $kode=$_POST['par_kodeskpd'];
        //echo $kode;
        $data = $this->model_skpd->get_by_kode($kode);
        echo json_encode($data);
        //print_r($data);
        //echo 'update';
        break;
      default:

        break;
    }
  }

}

?>
