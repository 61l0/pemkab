<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $session = $this->session->userdata('isLogin');
      	if($session == FALSE)
      	{
        	redirect('admin/login');
      	}
      	//$this->load->library('pdf');
		//$this->mpdf->WriteHTML($html);
	}

	public function index()
	{
		redirect('surat/baru');
	}
	public function baru()
	{
		$data =array('konten' => $this->load->view('surat_baru',array(),true) , );
		$this->load->view('index',$data);
	}

	public function surat_tugas()
	{
		$modal = array('del_confirm_surat'=>$this->load->view('modal_confirm_del_surat',array(),true) ,
						'modal_view_surat'=>$this->load->view('modal_surat',array(),true)
		);
		$data =array('konten' => $this->load->view('surat_tugas',$modal,true) ,);
		$this->load->view('index',$data);
	}

	public function sppd()
	{
		$modal = array('del_confirm_surat'=>$this->load->view('modal_confirm_del_surat',array(),true) ,
						'modal_view_surat'=>$this->load->view('modal_surat',array(),true),
			);
		$data =array('konten' => $this->load->view('sppd',$modal,true) ,);
		$this->load->view('index',$data);
	}

	//fungsi get pengikut
	private function get_pengikut($kd_sdm){
			//$data = $this->db->query("select * from tbl_sdm where kd_sdm='$kd_sdm'");
			$this->load->model('model_sdm');
				if ($kd_sdm!="") {
					$data=$this->model_sdm->get_sdm("where kd_sdm='$kd_sdm'");
					foreach ($data as $row)
						{
						   $nama= $row['nama'];
						}
					return $data = $nama." , ";
				}else{
					return $data="";
				}
		}
	public function get_json($tipe,$skpd){
		if ($tipe=="sppd") {
			$data = $this->model_surat->get_surat("sppd","where a.kode_skpd='$skpd'");
			if($data!=null){
				foreach ($data as $key) {
					$dataa[]=array(
						'no_surat'=>$key['no_surat'],
						'pegawai'=>$key['nama'].'<br />'.$key['nip'].'&nbsp'.$key['nama_pangkat'].$key['golongan'].$key['ruang'],
						'pengikut'=>$this->get_pengikut($key['pengikut1']).'<br />'.$this->get_pengikut($key['pengikut2']).'<br />'.$this->get_pengikut($key['pengikut3']),
						'perjalanan'=>$key['dari'].' ke '.$key['ke'],
						'transportasi'=>$key['transportasi'],
						'waktu_perjalanan'=> $this->date_id->generate($key['tgl_berangkat']).' - '.$this->date_id->generate($key['tgl_kembali']).',<br/>lama '.$key['lama'].'&nbsp;hari.',
						'maksud_perjalanan'=>$key['untuk'],
						'atas_beban'=>$key['atas_beban'],
						'pasal_anggaran'=>$key['pasal_anggaran'],
						'keterangan'=>$key['keterangan'],
						'pejabat'=>$key['nama_pejabat'],
						'no_surat'=>$key['no_surat'],
						'untuk'=>$key['untuk'],
						'plus'=>$key['lama'].'<br />'.$key['transportasi'],
						);
				}
				echo json_encode($dataa);
			}else{
				echo '[]';
			}

		}else if($tipe=="surat_tugas"){
			$data = $this->model_surat->get_surat("surat_tugas","where a.kode_skpd='$skpd'");
			if($data!=null){
				foreach ($data as $key) {
					$dataa[]=array(
						'no_surat'=>$key['no_surat'],
						'pegawai'=>$key['nama'].'<br />'.$key['nip'].'&nbsp'.$key['nama_pangkat'].$key['golongan'].$key['ruang'],
						'pengikut'=>$this->get_pengikut($key['pengikut1']).'<br />'.$this->get_pengikut($key['pengikut2']).'<br />'.$this->get_pengikut($key['pengikut3']),
						'pembuka_surat'=>$key['pembuka_surat'],
						'dasar'=>$key['dasar'],
						'tujuan'=>$key['tujuan'],
						//'plus'=>$key['lama'].'<br />'.$key['transportasi'],
						);
				}
				echo json_encode($dataa);
			}else{
					echo '[]';
			}
		}
	}
	public function delete(){
		$no_surat = $_POST['par_no_surat'];
		//echo "<script> alert('".$no_surat."');</script>";
		$data = $this->model_surat->deleteByNoSurat($no_surat);
		if(!$data){
			echo "<script>new PNotify({
				    title: '',
				    text: 'Gagal menghapuus surat.',
				    type: 'error'
					});</script>";
		}else{
			if ($data>=1) {
			echo "<script>new PNotify({
			    title: '',
			    text: 'Berhasil menghapus surat.',
			    type: 'success'
				});</script>";
			}else{
				echo "<script>new PNotify({
				    title: '',
				    text: 'Gagal menghapuus surat.',
				    type: 'error'
					});</script>";
			}
		};
	}

	public function view($tipe,$ns1,$ns2,$ns3,$ns4){
		$no_surat=$ns1."/".$ns2."/".$ns3."/".$ns4;
		if($tipe=="surat_tugas"){
			$st = $this->model_surat->get_surat("surat_tugas","where no_surat = '".$no_surat."'");
			/*$pengikut1=$this->db->query("SELECT * from tbl_sdm where kd_sdm ='$st[0]['pengikut1']'");
			foreach ($pengikut1->result_array() as $key) {
				$nama_pengikut1=$key['nama'];
			}
			echo $nama_pengikut1;
			*/
			$data = array(
				'no_surat'=>$st[0]['no_surat'],
				'nama'=>$st[0]['nama'],
				'nip'=>$st[0]['nip'],
				'pangkat'=>$st[0]['nama_pangkat'],
				'gol'=>$st[0]['golongan'],
				'ruang'=>$st[0]['ruang'],
				'jabatan'=>$st[0]['nama_jabatan'],
				'pengikut1'=>$st[0]['pengikut1'],
				'pengikut2'=>$st[0]['pengikut2'],
				'pengikut3'=>$st[0]['pengikut3'],
				'dasar'=>$st[0]['dasar'],
				'pembuka_surat'=>$st[0]['pembuka_surat'],
				'maksud'=>$st[0]['tujuan'],
				'nama_pejabat' => $st[0]['nama_pejabat'],
			    'nip_pejabat' => $st[0]['nip_pejabat'],
			    'jabatan_pejabat' => $st[0]['jabatan_pejabat'],
			    'pangkat_pejabat' => $st[0]['pangkat_pejabat'],
			    'golongan_pejabat' => $st[0]['golongan_pejabat'],
			    'ruang_pejabat' => $st[0]['ruang_pejabat'],
			    'tgl_surat' =>$this->date_id->generate($st[0]['tanggal_surat']),
//				);
			);
			if($st[0]['pengikut1']!=""){
		 		echo $this->load->view('cetak-st-pengikut',$data,true);
			}else{
			 echo $this->load->view('cetak-st',$data,true);
			}
		}else if($tipe=="sppd"){
			$sppd = $this->model_surat->get_surat("sppd","where no_surat = '".$no_surat."'");
			$data = array(
				'no_surat' => $sppd[0]['no_surat'],
				'nama' => $sppd[0]['nama'],
			    'NIP' => $sppd[0]['nip'],
			    'pangkat' => $sppd[0]['nama_pangkat'],
			    'jabatan' => $sppd[0]['nama_jabatan'],
			    'gol' => $sppd[0]['golongan'],
			    'pengikut1'=>$sppd[0]['pengikut1'],
				'pengikut2'=>$sppd[0]['pengikut2'],
				'pengikut3'=>$sppd[0]['pengikut3'],
			    'ruang' => $sppd[0]['ruang'],
			    'maksud' => $sppd[0]['untuk'],
			    'dari' => $sppd[0]['dari'],
			    'ke' => $sppd[0]['ke'],
			    'tgl_berangkat' => $this->date_id->generate($sppd[0]['tgl_berangkat']),
			    'tgl_kembali' =>  $this->date_id->generate($sppd[0]['tgl_kembali']),
			    'lama' => $sppd[0]['lama'],
			    'transportasi' => $sppd[0]['transportasi'],
			    'atas_beban' => $sppd[0]['atas_beban'],
			    'pasal_anggaran' => $sppd[0]['pasal_anggaran'],
			    'ket' => $sppd[0]['keterangan'],
			    'tgl_surat' =>$this->date_id->generate($sppd[0]['tanggal_surat']),
			    'nama_pejabat' => $sppd[0]['nama_pejabat'],
			    'nip_pejabat' => $sppd[0]['nip_pejabat'],
			    'jabatan_pejabat' => $sppd[0]['jabatan_pejabat'],
			    'pangkat_pejabat' => $sppd[0]['pangkat_pejabat'],
			    'golongan_pejabat' => $sppd[0]['golongan_pejabat'],
			    'ruang_pejabat' => $sppd[0]['ruang_pejabat'],
			);
			if($sppd[0]['pengikut1']!=""){
		 		echo $this->load->view('cetak-sppd-pengikut',$data,true);
			}else{
			 	echo $this->load->view('cetak-sppd',$data,true);
			}
			//echo $this->load->view('cetak-sppd',$data,true);
		}
		//$modal = array('konten'=>$this->load->view('modal_surat',array(),true) ,);
		//$this->load->view('index',$data);
	}

	public function insert(){
		//print_r($_POST);

		$kd_sdm = $_POST['par_pegawai'];
		$pengikut1 = $_POST['par_pengikut1'];
		$pengikut2 = $_POST['par_pengikut2'];
		$pengikut3 = $_POST['par_pengikut3'];
		$no_surat = $_POST['par_nosurat'];
		$tanggal_surat = date("Y-m-d");
		$tujuan = $_POST['par_tujuan'];
		$dasar = $_POST['par_dasarSurat'];
		$pembuka_surat = $_POST['par_pembukaSurat'];
		$tgl_berangkat = $_POST['par_tglBerangkat'];
		$tgl_kembali= $_POST['par_tglKembali'];
		$lama = $_POST['par_lama'];
		$dari_kota = $_POST['par_dariKota'];
		$ke_kota = $_POST['par_keKota'];
		$transportasi = $_POST['par_angkutan'];
		//tujuan
		$atas_beban = $_POST['par_atasBeban'];
		$pasal_anggaran = $_POST['par_pasalAnggaran'];
		$ket = $_POST['par_keterangan'];
		//tglsurat
		$status = $_POST['par_status'];
		$pejabat = $_POST['par_pejabat'];
		$kode_skpd = $_POST['par_kode_skpd'];
		//echo "sukses";

		$data_st = array(
			'no_surat'=>$no_surat,
			'kd_sdm'=>$kd_sdm,
			'pengikut1'=>$pengikut1,
			'pengikut2'=>$pengikut2,
			'pengikut3'=>$pengikut3,
			'tanggal_surat'=>$tanggal_surat,
			'tujuan'=>$tujuan,
			'dasar'=>$dasar,
			'pembuka_surat'=>$pembuka_surat,
			'status'=>$status,
			'pejabat'=>$pejabat,
			'kode_skpd'=>$kode_skpd,
		);
		$data_sppd = array(
			'no_surat'=>$no_surat,
			'kd_sdm'=>$kd_sdm,
			'pengikut1'=>$pengikut1,
			'pengikut2'=>$pengikut2,
			'pengikut3'=>$pengikut3,
			'tgl_berangkat'=>$tgl_berangkat,
			'tgl_kembali'=>$tgl_kembali,
			'lama'=>$lama,
			'untuk'=>$tujuan,
			'dari'=>$dari_kota,
			'ke'=>$ke_kota,
			'transportasi'=>$transportasi,
			'atas_beban'=>$atas_beban,
			'pasal_anggaran'=>$pasal_anggaran,
			'keterangan'=>$ket,
			'tanggal_surat'=>$tanggal_surat,
			'status'=>$status,
			'pejabat'=>$pejabat,
			'kode_skpd'=>$kode_skpd,
		);

		//echo print_r($data_st).print_r($data_sppd) ;
		$data = $this->model_surat->insert($data_st,$data_sppd);
		//echo $data;
		if($data==true){
						echo "<script>new PNotify({
			    title: '',
			    text: 'Berhasil membuat surat.',
			    type: 'success'
				});</script>";
		}
	}

	public function cetakpdf($tipe,$ns1,$ns2,$ns3,$ns4){
		//$this->load->library('mpdf');
		$no_surat=$ns1."/".$ns2."/".$ns3."/".$ns4;
		if($tipe=="surat_tugas"){
			$st = $this->model_surat->get_surat("surat_tugas","where no_surat = '".$no_surat."'");
			//$data = array($data);
			$data = array(
				'no_surat'=>$st[0]['no_surat'],
				'nama'=>$st[0]['nama'],
				'nip'=>$st[0]['nip'],
				'pangkat'=>$st[0]['nama_pangkat'],
				'gol'=>$st[0]['golongan'],
				'ruang'=>$st[0]['ruang'],
				'jabatan'=>$st[0]['nama_jabatan'],
				'dasar'=>$st[0]['dasar'],
				'pembuka_surat'=>$st[0]['pembuka_surat'],
				'maksud'=>$st[0]['tujuan'],
				'nama_pejabat' => $st[0]['nama_pejabat'],
			    'nip_pejabat' => $st[0]['nip_pejabat'],
			    'jabatan_pejabat' => $st[0]['jabatan_pejabat'],
			    'pangkat_pejabat' => $st[0]['pangkat_pejabat'],
			    'golongan_pejabat' => $st[0]['golongan_pejabat'],
			    'ruang_pejabat' => $st[0]['ruang_pejabat'],
				'tgl_surat' =>$this->date_id->generate($st[0]['tanggal_surat']),
			);
			$html = $this->load->view('cetak-st-pdf',$data,true);
				  $this->load->helper('mediatutorialpdf');
			generate_pdf($html,"name",false);

		}else if($tipe=="sppd"){
			$sppd = $this->model_surat->get_surat("sppd","where no_surat = '".$no_surat."'");
			$data = array(
				'no_surat' => $sppd[0]['no_surat'],
				'nama' => $sppd[0]['nama'],
			    'NIP' => $sppd[0]['nip'],
			    'pangkat' => $sppd[0]['nama_pangkat'],
			    'jabatan' => $sppd[0]['nama_jabatan'],
			    'gol' => $sppd[0]['golongan'],
			    'ruang' => $sppd[0]['ruang'],
			    'maksud' => $sppd[0]['untuk'],
			    'dari' => $sppd[0]['dari'],
			    'ke' => $sppd[0]['ke'],
			    'tgl_berangkat' => $this->date_id->generate($sppd[0]['tgl_berangkat']),
			    'tgl_kembali' =>  $this->date_id->generate($sppd[0]['tgl_kembali']),
			    'lama' => $sppd[0]['lama'],
			    'transportasi' => $sppd[0]['transportasi'],
			    'atas_beban' => $sppd[0]['atas_beban'],
			    'pasal_anggaran' => $sppd[0]['pasal_anggaran'],
			    'ket' => $sppd[0]['keterangan'],
			    'tgl_surat' =>$this->date_id->generate($sppd[0]['tanggal_surat']),
			    'nama_pejabat' => $sppd[0]['nama_pejabat'],
			    'nip_pejabat' => $sppd[0]['nip_pejabat'],
			    'jabatan_pejabat' => $sppd[0]['jabatan_pejabat'],
			    'pangkat_pejabat' => $sppd[0]['pangkat_pejabat'],
			    'golongan_pejabat' => $sppd[0]['golongan_pejabat'],
			    'ruang_pejabat' => $sppd[0]['ruang_pejabat'],
			);
			$html=$this->load->view('cetak-sppd-pdf',$data,true);
			//echo($html);
			$this->load->helper('mediatutorialpdf');
			generate_pdf($html,"name",false);
			//	ob_end_clean();
	/*$this->load->library('mpdf');
	$mpdf=new mPDF('utf-8', 'folio');
	ob_start();
	$mpdf->WriteHTML(utf8_encode($html));
	ob_end_clean();
	$mpdf->Output("SS.pdf" ,'I');

	exit;

*/

		}
	}
	public function test(){

	/*ob_end_clean();
	$this->load->library('mpdf');
	$mpdf=new mPDF('utf-8', 'legal');
	ob_start();
	$mpdf->WriteHTML(utf8_encode('<P>HELLO</P>FFFFFFFFFFFFFFFF DFBSJHG AJHFVGA <table rules="all"><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr></table>'));
	$mpdf->Output("SS.pdf" ,'I');
	exit;*/
	$html='
	<table width="auto" rules="all">
	<tr>
	<td width="100px">11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	</tr>
	<tr>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	</tr>
	<tr>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	</tr>
	<tr>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	<td>11</td>
	</tr>
	</table>

	';
	$this->load->helper('mediatutorialpdf');
	generate_pdf($html,"name");
	}
}
