<style type="text/css">.ui-autocomplete {z-index:1051;}</style>
<div class="modal fade" id="modal-edit-sdm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      	<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit data pegawai</h4>
	      	</div>
      	<div class="modal-body">            
            <style>
              .custom-combobox {
                position: relative;
                display: inline-block;
              }
              .custom-combobox-toggle {
                position: absolute;
                top: 0;
                bottom: 0;
                margin-left: -1px;
                padding: 0;
              }
              .custom-combobox-input {
                margin: 0;
                padding: 5px 10px;
              }
            .selectize-dropdown { z-index: 9999; }


            </style>
            <div class="modal fade" style="z-index:100000;" id="modal-edit-jabatan" tabindex="0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close modal-close1" id=""><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title">Tambah data jabatan</h4>
                      </div>
                    <div class="modal-body">
                       <form class="form-horizontal" role="form" id="form-edit-tambah-jabatan">
                        <div class="control-group">
                          <label>Jabatan Baru</label>
                          <input type="text" class="form-control" id="edit-jabatan" />
                        </div> 
                       </form>
                    </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default modal-close1">Close</button>
                      <button type="button" class="btn btn-primary" id="btn-edit-simpan-jabatan"><span id="loader-btneditaddjabatan"><img width="20px" height="20px" src="<?php echo base_url(); ?>assets/img/ajax-loading.gif"/>&nbsp&nbsp&nbsp</span>Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            <form class="form-horizontal" role="form" id="form-edit-sdm">
            	  <input type="text" id="edit-kdsdm" class="form-control hidden"/> 
                  <div class="form-group">
                        <label class="col-sm-3 control-label" for="edit-nip">NIP</label>
                        <div class="col-sm-8">
                          <input type="text" id="edit-nip" class="form-control"/>  
                        </div>            
                  </div>
                  <div class="form-group">
                    <label for="edit-nama" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="edit-nama" placeholder="Example Name,Gelar">
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="edit-pil-jabatan" class="col-sm-3 control-label">Jabatan</label>
                        <div class="col-sm-3" style="padding-right:0px;margin-right:0px;"> 
                          <select id="edit-pil-jabatan"  placeholder="Pilih jabatan..." style="border-radius:0px;"></select>                           
                        </div>
                        <div class="col-sm-4" style="padding-left:0px;">
                          <input class="form-control" value="<?php echo $this->session->userdata('nama_skpd'); ?>" title="<?php echo $this->session->userdata('nama_skpd'); ?>" style="border-left:none;" readonly/>
                        </div>
                        <div class="col-sm-1"><a class="btn btn-default" id="btn-tambah-jabatan"><span class="glyphicon glyphicon-plus-sign" title="tambah jabatan"></span></a></div>  
                  </div>
                  <div class="form-group">
                    <label for="pilih-edit-pangkat-gol" class="col-sm-3 control-label">Pangkat Golongan</label>
                    <div class="col-sm-8">
                      <select style="cursor: pointer;" class="form-control" id="pilih-edit-pangkat-gol" placeholder="Pilih Pangkat Golongan...">
                        <option value="1">-</option>  
                        <?php 
                          foreach ($pangkat as $key) {
                            echo '<option value="'.$key['kd_pg'].'">'.$key['nama_pangkat'].' ('.$key['golongan'].'/'.$key['ruang'].')</option>';
                          }
                        ?>
                      </select>         
                    </div>
                  </div>      
                  <div class="form-group">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-8"> 
                        <p align="right" style="font-size:11px;color:#444444;"><span style="color:red;">*</span>Kosongkan NIP dan jabatan jika pegawai bukan PNS</p>                           
                      </div>
                  </div>      
            </form>


            <button class="btn btn-default" id="btn-test1">test</button>
            <script type="text/javascript">   
                     $(document).ready(function() {
                      //$('#edit-pil-jabatan').selectize({dropdownParent: 'body'});
                        $("body").on("change","#edit-pil-jabatan",function(){
                            var tipe1 = $(this).find('option:selected').val();
                            //alert(tipe1);
                        });

                    $("body").on("click","#btn-tambah-jabatan",function(){
                      $('#modal-edit-jabatan').modal({
                        backdrop: 'static',
                        keyboard: false
                      });
                    });                      


                    $("body").on("click",".modal-close1",function(){               
                      $('#modal-edit-jabatan').modal('hide');
                    });
               });
            </script>              
        </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" id="btn-update-sdm"><span id="loader-btnupdatesdm"><img width="20px" height="20px" src="img/ajax-loading.gif"/>&nbsp&nbsp&nbsp</span> Save changes</button>
	    </div>
    </div>
  </div>

</div>
<script type="text/javascript">
  $("#loader-btnupdatesdm").hide();
  $("#loader-btneditaddjabatan").hide();

  $("body").on("click","#btn-update-sdm",function(){
  	alert("klik");
  		  var kd_sdm = $("#edit-kdsdm").val();	
          var nip = $("#edit-nip").val();
          var nama = $("#edit-nama").val();
          var kd_jabatan = $("#edit-pil-jabatan").find('option:selected').val();
          var kd_pg = $("#pilih-edit-pangkat-gol").find('option:selected').val();
          $.ajax({      
            url:"<?php echo base_url(); ?>sdm/update/"+kd_sdm,
            type:"POST",//jenis menghandle tipe pegawai kontrak atau pns
            data:{'par_nip':nip,'par_nama':nama,'par_kdjabatan':kd_jabatan,'par_kdpg':kd_pg},
            chace:false,
            beforeSend: function(rs){
              $("#loader-btnupdatesdm").show();
              $("#btn-update-sdm").addClass("disabled");
            },
            success: function(rs){
              if(rs==1){
                new PNotify({
                  title: '',
                  text: 'Berhasil meng-update data pegawai.',
                  type: 'success'
                });
                $('#modal-edit-sdm').modal('hide');
                $('#table-sdm').bootstrapTable('refresh');
                $('#form-edit-sdm').trigger("reset");
                
                
              }
              $("#loader-btnupdatesdm").hide();
              $("#btn-update-sdm").removeClass("disabled");
            },
            error: function(){
              //manggil pnotify aja
              $("#loader-btnupdatesdm").hide();
              $("#btn-update-sdm").removeClass("disabled");
	          new PNotify({
	            title: '',
	            text: 'Operasi gagal.',
	            type: 'error'
	          });
            }
           // $('#konten').load('hal-sdm.php');
          });
      }); 


      $('body').on("click","#btn-edit-simpan-jabatan",function(){
        alert("CLICK");
        //$('body').on("click","#btn-simpan-jabatan",function(){
          alert('f');
          var jab = $("#edit-jabatan").val();
          $.ajax({      
            url:"<?php echo base_url(); ?>sdm/insert_jabatan",
            type:"POST",//jenis menghandle tipe pegawai kontrak atau pns
            data:{'par_jabatan':jab},
            chace:false,
            beforeSend: function(rs){
              $("#loader-btneditaddjabatan").show();
              $("#btn-edit-simpan-jabatan").addClass("disabled");
            },
            success: function(rs){
              $("#loader-btneditaddjabatan").hide();
              if(rs==1){
                new PNotify({
                  title: '',
                  text: 'Berhasil menyimpan Jabatan baru.',
                  type: 'success',
                  shadow: false,
                  icon: false
                });
                select_jabatan1.clearOptions();
                select_jabatan1.load(function(callback) {
                    xhr && xhr.abort();
                    xhr = $.ajax({
                     url:"<?php echo base_url(); ?>sdm/get_jabatan",
                    // url:"localhost/pkl4/jsonjabatan.php",
                      //data:{'par_input':'getJabatan'},
                      //:"POST",
                      dataType:"json",
                      success: function(results) {
                            //alert(results);
                          callback(results);
                          //alert(kode_jabatan);
                          //select_jabatan1.setValue(kode_jabatan);      
                    },
                      error: function(rs) {
                          //alert(rs);
                          callback();
                      }
                    });
                });
                //$('#table-sdm').bootstrapTable('refresh');
                //$('#form-tambah-sdm').trigger("reset");
                //document.getElementById("form-tambah-sdm").reset();
              }
              //$("#loader-btnsdm").hide();
              $("#btn-edit-simpan-jabatan").removeClass("disabled");

              //$('#konten').load('hal-sdm.php');
            },
            error: function(){
              //manggil pnotify aja
              $("#loader-btneditaddjabatan").hide();

              $("#btn-edit-simpan-jabatan").removeClass("disabled");
              new PNotify({
              title: '',
              text: 'Operasi gagal.',
              type: 'error',
              shadow: false,
                  icon: false
          });
            }
           // $('#konten').load('hal-sdm.php');
          });
    
      });
</script>
