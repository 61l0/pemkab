  <<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
    
 
  <style type="text/css">
     /*inti layout*/
    .page {
    
        width: 21cm;
        min-height: 33cm;
        padding: 0.5cm;`
        margin: 1cm auto;
       /* border: 1px #D3D3D3 solid;*/
       /* border-radius: 5px;*/
        background: white;
        /*box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);*/
    }

    /*content dalam layout*/
    .subpage {
        font-family:"Times New Roman", Times, serif;
        padding: 1px;
        /*border: 1px red solid;*/
        /*height: 237mm;*/
        min-height: 29.56cm; /* height page di kurangi 6 , knpa kalo 4 cm kalo diprint lebih*/ 
        /*outline: auto yellow solid;*/
        /*background :red;*/
    }
  table{
    border-spacing:0px;
  }
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
    
    @page {
        size: legal;
        margin: 0;
    }
    
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
      }
    }

    #kop img{
      
    }
  .style2 {font-weight: bold}
  </style>
<?php
 
 // $temp_no_surat = $no_surat;
 
 $kode_skpd = $this->session->userdata('kode_skpd');
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
   <div class="page" style="font-size:14px;">
      <div class="subpage">
        <table  height="383" border="0" id="table-isi" width="100%" rules="none" style="border-collapse:collapse;width:300px">
        <tr>
        <td height="106px" colspan="11" align="center"><img id="" align="left" style="" src="<?php echo base_url(); ?>assets/img/Logo-Pemkab-Malang.png" width="87px" height="100px" />
          <span  style="font-size:22px;">PEMERINTAH KABUPATEN MALANG</span><br/>
            <?php 
        $kd_skpd = $this->session->userdata('kode_skpd');
        //echo $kd_skpd;
        $filter = explode(".", $kd_skpd);
        //echo $filter;
        $filter = $filter[1]; // piece1
        //echo $filter;
        //$query="";
        if ($filter > 000 && $filter < 100) {
        
      ?> 
            <strong style="font-size:32px;">S E K R E T A R I A T &nbsp; D A E R A H </strong><br/> 
            <span style="font-size:14px; padding:0px; margin-top:-10px;">Jalan Merdeka Timur No. 3 Malang Telepon ( 0341 ) 326791 - 326793 <br/> 
              <em >Website:http:// www.malangkab.go.id  Email: sekda@malangkab.go.id</em></span><?php } else{ ?>
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
              <em >Website:<?php echo $website_skpd?>  Email: <?php echo $email_skpd?></em></span><?php } ?>
              
             <br/>
            <strong style="font-size:18px;"><u>M A L A N G   65119 </u></strong>
          <p align="center">&nbsp;</p></td>
      </tr>
           <tr>
             <td colspan="9">&nbsp;</td>
             <td>Nomor</td>
             <td>:<?php echo $no_surat ?></td>
           </tr>
           <tr>
        <td colspan="9"><div align="center"></div></td>
        <td width="68">Lembar ke</td>
        <td width="230">:</td>
      </tr>
           <tr>
             <td height="39" colspan="11">&nbsp;</td>
           </tr>
           <tr>
        <td height="39" colspan="11"><div align="center" style="font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><strong>SURAT PERINTAH PERJALANAN DINAS</strong></u><br/>
          <strong>&nbsp;&nbsp;&nbsp;<u>( S P P D )</u></strong><br/></div></td>
      </tr>
           <tr>
             <td width="14" rowspan="19" >&nbsp;</td>
             <td >&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="7">&nbsp;</td>
           </tr>
           <tr class="row-line" style=" border-top: 4px solid black;">
             <td >&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td colspan="7">&nbsp;</td>
           </tr>
           <tr class="row-line">
             <td width="11" >1.</td>
        <td width="212px">Pejabat yang memberi perintah</td>
        <td width="17"><div align="center">:</div></td>
        <td colspan="7"><strong>SEKRETARIS DAERAH</strong></td>
        </tr>
      <tr class="row-line">
        <td>2.</td>
        <td>Nama / NIP pegawai  yang diperintah </td>
        <td><div align="center">:</div></td>
        <td colspan="7"><strong id="nama_title"><?php echo $nama ?></strong></td>
        </tr>
      <tr >
        <td>&nbsp;</td>
        <td>mengadakan perjalanan Dinas</td>
        <td><div align="center"></div></td>
        <td colspan="7"><strong><?php echo $NIP?></strong></td>
        </tr>
      <tr class="row-line">
        <td>3.</td>
        <td>Jabatan, pangkat dan golongan dari </td>
        <td><div align="center">:</div></td>
        <td colspan="7"><?php echo($jabatan.' '.$nama_skpd); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>pegawai yang diperintah</td>
        <td>&nbsp;</td>
        <td colspan="7"><?php echo($pangkat); ?> ( <?php echo($gol); ?> / <?php echo($ruang); ?> )</td>
      </tr>
      <tr class="row-line">
        <td>4.</td>
        <td>Perjalanan Dinas yang diperintahkan</td>
        <td><div align="center">:</div></td>
        <td width="72">Dari </td>
        <td width="10"><div align="center">:</div></td>
        <td colspan="5"><?php echo($dari); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td>Ke</td>
        <td> <div align="center">:</div></td>
        <td colspan="5"><?php echo($ke); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td colspan="7">Transportasi menggunakan : <?php echo($transportasi); ?></td>
        </tr>
      
      <tr class="row-line">
        <td>5.</td>
        <td>&nbsp;Perjalanan Dinas yang direncanakan</td>
        <td><div align="center">:</div></td>
        <td colspan="7">Selama (<?php echo($lama); ?>) hari</td>
      </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
            <td colspan="3">Dari tanggal</td>
            <td colspan="4">: <?php echo($tgl_berangkat); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td colspan="3">s/d tanggal</td>
        <td colspan="4">: <?php echo($tgl_kembali); ?></td>
      </tr>
      <tr class="row-line">
        <td align="right" style="height:20px;"><div align="left">6.</div></td>
        <td align="right" style="height:20px;"><div align="left">Maksud mengadakan perjalanan</div></td>
        <td><div align="center">:</div></td>
        <td colspan="7" rowspan="2" align="right"><div align="left"><?php echo($maksud); ?></div></td>
      </tr>
      
      
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
      </tr>
      <tr class="row-line">
        <td>7.</td>
        <td>Perhitungan biaya perjalanan</td>
        <td><div align="center">:</div></td>
        <td colspan="4">Atas beban
          <div align="center"></div></td>
        <td colspan="3">: <?php echo($atas_beban); ?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td colspan="4">Pasal anggaran
          <div align="center"></div></td>
        <td colspan="3">: <?php echo($pasal_anggaran); ?></td>
        </tr>
      <tr class="row-line">
        <td>8.</td>
        <td>Keterangan</td>
        <td><div align="center">: </div></td>
        <td colspan="7" rowspan="2"><?php echo($ket); ?></td>
      </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
      </tr>
      
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4"> <div align="center"><strong>Malang, <span id="tgl_surat_title"><?php echo $tgl_surat; ?></span></strong></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
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
        <td colspan="7">&nbsp;</td>
        <td colspan="4"> <div align="center"><strong><?php echo $jabatan_pejabat; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4"><div align="center"><strong><?php echo $nama_pejabat; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;</td>
        <td colspan="4"><div align="center"><strong><?php echo $pangkat_pejabat; ?></strong></div></td>
      </tr>
      <tr>
        <td colspan="7">&nbsp;
          <div align="center"></div></td>
        <td colspan="4"><div align="center"><strong>NIP. <?php echo $nip_pejabat; ?></strong></div></td>
      </tr>
    </table>

     </div>    
    </div>
    
 <div class="page" >
  <div class="subpage">
        <p>K E T E R A N G A N :<BR/>
        I. DARI PEJABAT PEMBERI PERINTAH :        </p>
        <p>&nbsp;</p>
        <table width="auto" border="0" rules="cols" style="font-size:14px; border:1px solid #000000;">
  <tr>
    <td width="134px" rowspan="2"><div align="center"><strong>Tempat Kedudukan</strong></div>      <div align="center"><strong>Pegawai</strong></div>      <div align="center"><strong>yang diberi perintah</strong></div></td>
    <td colspan="2"><div align="center"><strong>Berangkat</strong></div></td>
    <td colspan="2"><div align="center"><strong>Kembali</strong></div></td>
  </tr>
  
  <tr class="row-line">
    <td width="77px"><div align="center">Tanggal</div></td>
    <td width="240px"><div align="center">Tanda Tangan</div></td>
    <td width="85px"><div align="center">Tanggal</div></td>
    <td width="234px"><div align="center">Tanda Tangan</div></td>
  </tr>
  <tr class="row-line">
    <td><div align="center"><?php echo $dari?></div></td>
    <td><div align="center"><?php echo $tgl_berangkat ?></div></td>
    <td><p align="center" class="style2"style="font-size:10px;">a.n. SEKRETARIS DAERAH</p>    </td>
    <td><div align="center"><?php echo $tgl_kembali ?></div></td>
    <td><p align="center" class="style2"style="font-size:10px;">a.n. SEKRETARIS DAERAH</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center" class="style2"style="font-size:10px;"><?php echo $jabatan_pejabat ?></div></td>
    <td>&nbsp;</td>
    <td><div align="center" class="style2"style="font-size:10px;"><?php echo $jabatan_pejabat ?> </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
    <td>&nbsp;</td>
    <td><span class="style2"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p align="center" class="style2"style="font-size:10px;"><u><?php echo $nama_pejabat?>.</u><br />
      <?php echo $pangkat_pejabat ?></p>
      <div align="center" class="style2"style="font-size:10px;">NIP. <?php echo $nip_pejabat ?></div></td>
    <td>&nbsp;</td>
    <td><p align="center" class="style2"style="font-size:10px;"><u><?php echo $nama_pejabat ?>.</u><br />
      <?php echo $pangkat_pejabat?></p>
        <div align="center" class="style2"style="font-size:10px;">NIP. <?php echo $nip_pejabat ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
        <p>&nbsp;</p>
        <p>II.  DARI PEJABAT DI DAERAH PENUGASAN YANG DIKUNJUNGI :

        </p>
        <table width="auto" border="0" rules="cols" style="font-size:14px; border:1px solid #000000;">
          <tr>
            <td width="134px" rowspan="2"><div align="center">Tempat Kedudukan</div>
                <div align="center">Pegawai</div>
              <div align="center">yang diberi perintah</div></td>
            <td colspan="2"><div align="center"><strong>Berangkat</strong></div></td>
            <td colspan="2"><div align="center">Kembali</div></td>
          </tr>
          <tr class="row-line">
            <td width="77px"><div align="center">Tanggal</div></td>
            <td width="240px"><div align="center">Tanda Tangan</div></td>
            <td width="85px"><div align="center">Tanggal</div></td>
            <td width="234px"><div align="center">Tanda Tangan</div></td>
          </tr>
          <tr class="row-line">
            <td><div align="center"><?php echo $ke?></div></td>
            <td><div align="center"></div></td>
            <td><p align="center" class="style2"style="font-size:10px;">&nbsp;</p></td>
            <td><div align="center"></div></td>
            <td><p align="center" class="style2"style="font-size:10px;">&nbsp;</p></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="center" class="style2"style="font-size:10px;"></div></td>
            <td>&nbsp;</td>
            <td><div align="center" class="style2"style="font-size:10px;"></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
            <td>&nbsp;</td>
            <td><span class="style2"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><p align="center" class="style2"style="font-size:10px;">&nbsp;</p>
            <div align="center" class="style2"style="font-size:10px;"></div></td>
            <td>&nbsp;</td>
            <td><p align="center" class="style2"style="font-size:10px;">&nbsp;</p>
            <div align="center" class="style2"style="font-size:10px;"></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
  </div> 

</div>
  </body>
  </html>  
  
