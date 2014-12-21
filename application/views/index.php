<!DOCTYPE html>

<html>
<head>
     <?php 
     //	include(base_url()."assets/dateID.php");
     	//session_start();
     	
     	
     ?>
	<title>SPPD & Surat Tugas || Pemkab Malang</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jqueryui/jquery-ui.css">
  	<script src="<?php echo base_url();?>assets/jqueryui/external/jquery/jquery.js"></script>
  	<script src="<?php echo base_url();?>assets/jqueryui/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/jqueryui/jquery.ui.datepicker-id.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />			
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
    
   
    <script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/pnotify.custom.min.js"></script>
    <link href="<?php echo base_url();?>assets/css/pnotify.custom.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/selectize.css" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/selectize.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/bootstrap-table.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-table.min.css" />
    <script src="<?php echo base_url();?>assets/js/bootstrap-table-export.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-table-id-ID.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/print-element.js"></script>
        <script src="<?php echo base_url();?>assets/js/jspdf.min.js"></script>

    <style>
		.ui-autocomplete-loading { background: white url('<?php echo base_url(); ?>assets/img/auto-complete.gif') right center no-repeat;}
		.ui-widget { font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif; font-size: 0.9em; }
		.ui-widget-content { border: 1px solid #dddddd; background: #ffffff; color: #333333; }
	</style>
	    

    <style type="text/css">
    	body{
    		background-color: #EEEEEE;
    		padding-top: 70px;
    	}
    	hr{
    		border-color: #DDDDDD;
    		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          	box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    	}
    	.footer {
		   position:absolute;
		   bottom:0;		   
		   height:60px;   /* tinggi dari footer */
		   background:#CCCCCC;
		}
	    .nav-stacked>li>a{
	    	color: black;
	    	background: none;
	    	background-color: #CCCCCC; 
	    }
	    .nav-stacked>li>a:hover{
	    	color: black;
	    	background-color: #BBBBBB; 
	    }
	    .nav-stacked>li.active>a{
	    	background-color: #444444;  	
	    }
	    .nav-stacked>li.active>a:hover{
	    	background-color: #555555;  	
	    }
		.ui-autocomplete.ui-widget{font-size: 12px;}
		
			
		.navbar-inverse .navbar-nav > li > a,.navbar-inverse .navbar-brand {
		  color: #FFFFFF;
		}
		.navbar-inverse .navbar-nav > li > a:hover,.navbar-inverse .navbar-brand:hover {
		  color: #DDDDDD;

		}		  
	  	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
	    	color: #FFFFFF;
	  	}
	  	.navbar-inverse .navbar-nav .open .dropdown-menu{
	    	background-color: #080808;
	    	border-bottom-right-radius: 5px;
  			border-bottom-left-radius: 5px;

		 	content: ' ';
  			 
	  	}
	  	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
	  	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
	    	color: #DDDDDD;
	    	background-color: transparent;
	  	}
     .form-control,.btn{
      border-radius: 0px;
      
      }
      .dropdown-menu>li.active>a{
        font-style: oblique;
        background-color: transparent;
        padding-left: 25px;
      }
      .panel{
        border-radius: 0px;
      }
      .modal-content{
        border-radius: 0px; 
      }
    </style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">SPPD dan Surat Tugas</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url(); ?>" id="btn-home"><span class="glyphicon glyphicon-home glyphicon-th-large"></span>&nbsp Beranda</a></li>
        <li><a href="<?php echo base_url(); ?>surat/baru" id="btn-menu-surat-baru"><span class="glyphicon glyphicon-edit glyphicon-th-large"></span>&nbsp Surat Baru</a></li>
        
        <li  class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book glyphicon-th-large"></span>&nbsp Master <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>sdm" id="btn-menu-sdm">SDM</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </li>

        <li  class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon glyphicon-list-alt glyphicon-th-large"></span>&nbsp Daftar Surat<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>surat/sppd" id="btn-menu3">SPPD</a></li>
            <li><a href="<?php echo base_url(); ?>surat/surat_tugas" id="btn-menu4">Surat Tugas</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nama_skpd'); ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(); ?>admin/logout"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="boxxx"></div>

	<div class="container panel panel-default" style="">
        <div class="page-header" style="padding:10px;margin-top:10px;border-bottom:solid 4px black;">
        	<div class="row">
        		        	<div class="col-sm-2" style="padding-left:40px;"><img src="<?php echo base_url();?>assets/img/Logo-Pemkab-Malang.png" style="width:120px;height:140px;"></div>
            <div  class="col-sm-10">
            	<h1 style="font-weight:bold; margin-top:5px;">PEMERINTAH KABUPATEN MALANG</h1>
	            <h3><?php echo $this->session->userdata('nama_skpd'); ?></h3>
	            <H4>SPPD dan Surat Tugas</H4>	
            </div>	
        	</div>            
        </div>


        <div id="message-box-public"></div>
        <div class="row" style="margin-top:-5px;">
        <hr/ style="border:4px;">     
            <div class="col-md-12">
            	<div class="panel panel-default">
            		<div class="panel-body"  id="konten">
            			 <?php echo $konten ?>
            		</div>
            	</div>
                
            </div>
        </div>
        
        <div class="form-group">
        	<div class="col-md-6" style="margin-top:-10px;">      		
    			<p style="color:#999999">&copy; Copyright 2014</p>		
      		</div>
      		<div class="col-md-6" style="margin-top:-10px;">      		
    			<p style="color:#999999;text-align:right">Created by <a href="https://www.facebook.com/gandhix.pw">Andik Setyawan</a> 
    			and <a href="https://www.facebook.com/ahmad.isrofi.3">Ahmad Isrofi</a></p>		
      		</div>	
        </div>
      	
      	
    </div>
<script type="text/javascript">
$(function() {
  $('.nav a[href~="' + location.href + '"]').parents('li').addClass('active');
});
</script>
</body>
</html>