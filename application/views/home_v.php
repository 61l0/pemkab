<html>
 <head>
  <title>Selamat Datang Friend</title> 
 <style>
 body
   {
    font-family:Calibri;
   }
 </style>  
 </head>
 <body>
 <?php
  if($level == "1")
  {
 ?>
 <h2>Hai <?php echo $pengguna->nama;?>, anda login sebagai Administrator <?php echo anchor('login/logout', 'Keluar &raquo;');?></h2>
 <?php
 }else
 {
  ?>
  <h2>Hai <?php echo $pengguna->nama;?>, anda login sebagai Operator <?php echo anchor('login/logout', 'Keluar &raquo;');?></h2>
  <?php
 }
 ?>
 </body>
</html>