 <style type="text/css">   
    
    td[rowspan] {
	  vertical-align: top;
	  text-align: left;
	}

	td {
	  vertical-align: top;
	  text-align: left;
	}
    /*inti layout*/
    .page {		
        width: 100%;
        min-height: 33cm;
        padding-top:20px;        
        
    }
    /*content dalam layout*/
    .subpage {
        font-family:"Times New Roman", Times, serif;
        /*height: 237mm;*/
		padding-right:20px;
        min-height: 29.56cm; /* height page di kurangi 6 , knpa kalo 4 cm kalo diprint lebih*/ 
        /*background :red;*/
    }
	/*inti layout*/
    
	table td {
		padding-top :2px;
		padding-bottom :2px;
	}
	.row-line td {
		  border-top: 1px solid black;
	}
	.row-line-bottom td {
		  border-bottom: 1px solid black;
	}
		
		.row-line caption + thead tr:first-child td,
		.row-line colgroup + thead tr:first-child td,
		.row-line thead:first-child tr:first-child td {
		  border-top: 0;
	}
	@page{
		margin:0px;	
		
	}
    
  </style>
<?php
  $kode_skpd = $this->session->userdata('kode_skpd');/*$_SESSION['kode_skpd'];*/
	$sql1=mysql_query("select * from tbl_skpd where kode_skpd='$kode_skpd'");
	//$nama_skpd="";
	while ($row=mysql_fetch_array($sql1)) {
		$nama_skpd = $row['nama_skpd'];
        $alamat_skpd = $row['alamat_skpd'];
        $telepon_skpd = $row['telepon_skpd'];
        $email_skpd = $row['email_skpd'];
        $website_skpd = $row['website_skpd'];
	} 
 ?>
<div class="book" id="PrintElem">
<div class="page" style="font-size:14px padding-bottom:0px; color:#000000;">
        <div class="subpage">
        <table  height="383" border="0" id="table-isi" width="100%" rules="none" style="font-size:16px">
              <tr>
                <td height="106" colspan="13" align="center"><img style="position:absolute;padding-left:20px;" src="<?php echo base_url(); ?>assets/img/Logo-Pemkab-Malang-header.png" alt="kop" width="77" height="90" align="left" id="img" style="" /> <div align="center"><span  style="font-size:22px;">PEMERINTAH KABUPATEN MALANG</span><br/>
                  <?php 
				//$kd_skpd = $_SESSION['kode_skpd'];
				//echo $kd_skpd;
				$filter = explode(".", $kode_skpd);
				//echo $filter;
				$filter = $filter[1]; // piece1
				//echo $filter;
				//$query="";
				if ($filter > 000 && $filter < 100) {
				
			?> 
                          <strong style="font-size:32px;">S E K R E T A R I A T &nbsp; D A E R A H </strong><br/> 
                          <span style="font-size:14px; padding:0px; margin-top:-10px;">Jalan Merdeka Timur No. 3 Malang Telepon ( 0341 ) 326791 - 326793 <br/> 
                                  <em >Website:http:// www.malangkab.go.id  Email: sekda@malangkab.go.id</em></span>
                  <?php } else{ ?>
                        <strong style="font-size:32px;">
                          
                        <?php
              $nama_skpd1 = strtoupper($nama_skpd);
					$length = strlen($nama_skpd1);
					if($length>22){
						echo($nama_skpd1);
					}else{
						$char = str_split($nama_skpd1);
						
						foreach($char as $key=>$value){
							echo ($value."&nbsp;");
						}
					}
				?>
                              </strong><br/> 
                          <span style="font-size:14px; padding:0px; margin-top:-10px;"><?php echo $alamat_skpd?> Telepon <?php echo $telepon_skpd?> <br/> 
                                  <em >Website:<?php echo $website_skpd?>  Email: <?php echo $email_skpd?></em></span>
                  <?php } ?>
                  
                  
                  <br/>
                  <strong style="font-size:18px;">&nbsp;&nbsp;&nbsp;<u>M A L A N G   65119</u></strong></div></td>
              </tr>
           <tr>
             <td height="39" colspan="13">&nbsp;</td>
           </tr>
           <tr>
             <td width="17">&nbsp;&nbsp;&nbsp;</td>
             <td colspan="12"><div align="center"><u><strong>SURAT TUGAS</strong></u></div></td>
             </tr>
           <tr>
             <td>&nbsp;</td>
             <td colspan="12"><div align="center">Nomor : <?php echo $no_surat?></div></td>
             </tr>
           
      
           <tr>
             <td colspan="13" >&nbsp;</td>
           </tr>
           
           
           <?php  if($dasar==""){
		   	echo('<tr>
			<td align="right" style="height:20px;">&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$pembuka_surat.' ,dengan ini:</td>
           </tr>');
		   }else{
		echo('
			 <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Dasar</td>
               <td>:</td>
               <td colspan="9" rowspan="2">'.$dasar.' ,dengan ini:</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
          </tr>
		');
		   }
		   ?>
           <tr>
             <td align="right" style="height:20px;">&nbsp;</td>
             <td width="8" align="right" style="height:20px;"></td>
             <td colspan="11" rowspan="2" align="right" style="height:20px;"><div align="left"></div>
             <div align="center"></div>               <div align="center">MENUGASKAN</div></td>
             </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td width="64">Kepada</td>
               <td width="13"><div align="center">: </div></td>
               <td width="15">1.</td>
               <td width="100">Nama</td>
               <td width="14">:</td>
               <td colspan="6"><?php echo $nama ?></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Pangkat Golongan</td>
               <td>:</td>
               <td colspan="6"><?php  if($nip!=""){ 
                    echo $pangkat .' ('. $gol.'/'.$ruang.')';
} else{
    echo ("-");
} ?></td>
          </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>NIP</td>
               <td>:</td>
               <td colspan="6"><?php 
                  if($nip!=""){
                    echo $nip;
                  }else{
                    echo"-";
                  }
                ?></td>
          </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Jabatan</td>
               <td>:</td>
               <td colspan="6"> <?php echo  $jabatan.' '.$nama_skpd; ?></td>
          </tr>             
             <?php 
			 	//query pengikut 1
				$sql1=mysql_query("select kd_sdm,nip,nama,nama_jabatan,nama_pangkat,golongan,ruang from tbl_sdm as a inner join tbl_jabatan as b on a.kd_jabatan = b.kd_jabatan inner join tbl_pangkat_gol as c on a.kd_pg = c.kd_pg where kd_sdm = '$pengikut1'");
				while ($row=mysql_fetch_array($sql1)) {
					$nama_pengikut1 = $row['nama'];
					$nip_pengikut1 = $row['nip'];
					$jabatan_pengikut1 = $row['nama_jabatan'];
					$pangkat_pengikut1 = $row['nama_pangkat'];
					$golongan_pengikut1 = $row['golongan'];
					$ruang_pengikut1 = $row['ruang'];
				} 
			 ?>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>2.</td>
               <td>Nama</td>
               <td>:</td>
               <td colspan="6"><?php echo $nama_pengikut1 ?></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Pangkat Golongan</td>
               <td>:</td>
               <td colspan="6">
               <?php 
			   		if($nip_pengikut1!=""){echo $pangkat_pengikut1." (".$golongan_pengikut1."/".$ruang_pengikut1.")";}else{echo"-";};
			   ?>               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>NIP</td>
               <td>:</td>
               <td colspan="6">
               <?php 
			   		if($nip_pengikut1!=""){echo $nip_pengikut1;}else{echo"-";};
			   ?>               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Jabatan</td>
               <td>:</td>
               <td colspan="6"><?php echo  $jabatan_pengikut1.'&nbsp;'.$nama_skpd; ?></td>
             </tr>
             
             <?php 
			 	if($pengikut2!=""){
						 	//query pengikut 1
				$sql1=mysql_query("select kd_sdm,nip,nama,nama_jabatan,nama_pangkat,golongan,ruang from tbl_sdm as a inner join tbl_jabatan as b on a.kd_jabatan = b.kd_jabatan inner join tbl_pangkat_gol as c on a.kd_pg = c.kd_pg where kd_sdm = '$pengikut2'");
				while ($row=mysql_fetch_array($sql1)) {
					$nama_pengikut1 = $row['nama'];
					$nip_pengikut1 = $row['nip'];
					$jabatan_pengikut1 = $row['nama_jabatan'];
					$pangkat_pengikut1 = $row['nama_pangkat'];
					$golongan_pengikut1 = $row['golongan'];
					$ruang_pengikut1 = $row['ruang'];
				} 
			 ?>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>3.</td>
               <td>Nama</td>
               <td>:</td>
               <td colspan="6"><?php echo $nama_pengikut1 ?></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Pangkat Golongan</td>
               <td>:</td>
               <td colspan="6">
               <?php 
			   		if($nip_pengikut1!=""){echo $pangkat_pengikut1." (".$golongan_pengikut1."/".$ruang_pengikut1.")";}else{echo"-";};
			   ?>               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>NIP</td>
               <td>:</td>
               <td colspan="6">
               <?php 
			   		if($nip_pengikut1!=""){echo $nip_pengikut1;}else{echo"-";};
			   ?>               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Jabatan</td>
               <td>:</td>
               <td colspan="6"><?php echo  $jabatan_pengikut1.'&nbsp;'.$nama_skpd; ?></td>
             </tr>
             <?php } ?>
             
             <?php 
			 	if($pengikut3!=""){
						 	//query pengikut 1
				$sql1=mysql_query("select kd_sdm,nip,nama,nama_jabatan,nama_pangkat,golongan,ruang from tbl_sdm as a inner join tbl_jabatan as b on a.kd_jabatan = b.kd_jabatan inner join tbl_pangkat_gol as c on a.kd_pg = c.kd_pg where kd_sdm = '$pengikut3'");
				while ($row=mysql_fetch_array($sql1)) {
					$nama_pengikut1 = $row['nama'];
					$nip_pengikut1 = $row['nip'];
					$jabatan_pengikut1 = $row['nama_jabatan'];
					$pangkat_pengikut1 = $row['nama_pangkat'];
					$golongan_pengikut1 = $row['golongan'];
					$ruang_pengikut1 = $row['ruang'];
				} 
			 ?>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>4.</td>
               <td>Nama</td>
               <td>:</td>
               <td colspan="6"><?php echo $nama_pengikut1 ?></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Pangkat Golongan</td>
               <td>:</td>
               <td colspan="6">
               <?php 
			   		if($nip_pengikut1!=""){echo $pangkat_pengikut1." (".$golongan_pengikut1."/".$ruang_pengikut1.")";}else{echo"-";};
			   ?>               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>NIP</td>
               <td>:</td>
               <td colspan="6">
               <?php 
			   		if($nip_pengikut1!=""){echo $nip_pengikut1;}else{echo"-";};
			   ?>               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>Jabatan</td>
               <td>:</td>
               <td colspan="6"><?php echo  $jabatan_pengikut1.'&nbsp;'.$nama_skpd; ?></td>
             </tr>
             <?php } ?>

             
           <tr>
             <td align="right" style="height:20px;">&nbsp;</td>
             <td align="right" style="height:20px;">&nbsp;</td>
             <td align="right" style="height:20px;"><div align="left">Untuk</div></td>
             <td><div align="center">:</div></td>
             <td colspan="9" rowspan="2" align="right"><div align="left"><?php echo($maksud); ?></div></td>
             </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td><div align="center"></div></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai prosedur, setelah  melaksanakan kegiatan dimaksud agar melaporkan hasilnya kepada Bapak Bupati  Malang.</td>
             </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="11"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian untuk dilaksanakan  dengan penuh tanggung jawab.</div></td>
             </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td width="11">&nbsp;</td>
             <td colspan="2">Di keluarkan di</td>
             <td width="13"><div align="center">:</div></td>
             <td width="0">Malang</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="2">Pada tanggal</td>
             <td><div align="center">:</div></td>
             <td><span id="tgl_surat_title2"><?php echo $tgl_surat; ?></span></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td width="32">&nbsp;</td>
             <td width="117">&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4"><div align="center"><strong>
             <?php   	
			if(stristr($jabatan_pejabat,'Sekretaris')){
				echo('a.n. Bupati');		
			}else if(stristr($jabatan_pejabat,'Asisten')){
				echo('a.n. SEKRETARIS DAERAH');
			}else if(stristr($jabatan_pejabat,'Kepala Bagian Tata Pemerintahan') or stristr($jabatan_pejabat,'Kepala Bagian Hukum ')or stristr($jabatan_pejabat,'Kepala Bagian Pertanahan')){
				echo('a.n. Asisten Pemerintahan');
			}else if(stristr($jabatan_pejabat,'Kepala Bagian Perekonomian') or stristr($jabatan_pejabat,'Kepala Bagian Administrasi Pembangunan ')or stristr($jabatan_pejabat,'Kepala Bagian Kerjasama ') or stristr($jabatan_pejabat,'Kepala Bagian Pengelola Data Elektronik')){
				echo('a.n. Asisten Perekonomian dan Pembangunan');
			}else if(stristr($jabatan_pejabat,'Kepala Bagian Umum dan Protokol') or stristr($jabatan_pejabat,'Kepala Bagian Tata Usaha ')or stristr($jabatan_pejabat,'Kepala Hubungan Masyarakat') or stristr($jabatan_pejabat,'Kepala Bagian Organisasi')){
				echo('a.n. Asisten Administrasi');
			}else if(stristr($jabatan_pejabat,'Kepala Bagian Kesejahteraan Rakyat') or stristr($jabatan_pejabat,'Kepala Bagian Bina Mental dan Kerohanian')){
				echo('a.n. Kesejahteraan Rakyat');
			}
			
		?>
             </strong></div></td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4"><div align="center"><strong><?php echo $jabatan_pejabat; ?></strong></div></td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4">&nbsp;</td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4">&nbsp;</td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4"><div align="center"><strong><?php echo $nama_pejabat; ?></strong></div></td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4"><div align="center"><strong><?php echo $pangkat_pejabat; ?></strong></div></td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="4"><div align="center"><strong>NIP. <?php echo $nip_pejabat; ?></strong></div></td>
          </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td><div align="center"></div></td>
             </tr>
    </table>

    </div>    
    </div>
    
    </div>


<script type="text/javascript">
    //var title = $("#nama_title").val();
  var title = document.getElementById("nama_title").innerHTML+" "+document.getElementById("tgl_surat_title").innerHTML;
  title = title.trim();
  $(document).ready(function () {
  

  //jQuery(document).bind("keyup keydown", function(e){ //ctrl+p
  //if(e.ctrlKey && e.keyCode == 80){
    //PrintElem(".book");
  //}
//});

});

</script>

