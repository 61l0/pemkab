<style type="text/css">
	.table-hover{
		font-size: 12px;
	}
	td{
		width:auto;
	}
	.table {
    /*table-layout:auto;*/
    max-width:100%;
	}	
</style>

<div class="col-sm-12" style="border-bottom:1px #EEEEEE solid;">
	<h4>Daftar SDM atau pegawai <?php echo $this->session->userdata('nama_skpd'); ?></h4>
</div>
<hr></BR>
<div class="col-sm-1">
	<a href="#" class="btn btn-success" id="btn-tambah-sdm"><span class="glyphicon glyphicon-plus-sign glyphicon-th-large"></span>&nbsp Tambah Data</a>
</div>
<table id="table-sdm"></table>


<script type="text/javascript">
	window.operateEvents = {
        'click .like': function (e, value, row, index) {
        	//alert(row.no_surat);
           	$('#konten-modal').empty();
            $.ajax({
                url: "<?php echo base_url(); ?>surat/view/sppd/"+row.no_surat,
                timeout: 5000,
                beforeSend: function(){
                    $('#modal_view_surat').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $("#konten-modal").html('Memuat surat...');
                },
                success: function(data) {
                    $("#konten-modal").html(data);
                },
                error: function(){
                    $("#konten-modal").html('Gagal memuat surat, cek koneksi ...');                        
                }
            });             
        },
        'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .remove': function (e, value, row, index) {
            //alert('You click remove icon, row: ' + JSON.stringify(row));
            //console.log(value, row, index);
            $('#mod_no_surat').html(row.no_surat);
            $('#modal_konfirm').data('no_surat', row.no_surat).modal('show');
        }
    };
	$(document).ready(function(){
            $('#table-sdm').bootstrapTable({
                method: 'get',
                url: '<?php echo base_url();?>sdm/get_json/',
                cache: false,
                //height: ,
                striped: true,
                pagination: true,
                pageSize: 10,
                pageList: [10, 25, 50, 100, 200],
                search: true,
                showColumns: true,
                showRefresh: true,
                minimumCountColumns: 2,
                clickToSelect: true,
                showExport: true,
                //sidePagination: 'server',
                onDblClickRow: function (row) {
                    alert(row.kodepegawai);
                    //alert('Event: onDblClickRow, data: ' + JSON.stringify(row));
                    window.location("<?php echo base_url(); ?>")
                },
                columns: [{
                    field: 'kodepegawai',
                    title: 'Kode Pegawai',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    class: 'b'
                }, {
                    field: 'nip',
                    title: 'NIP',
                    align: 'left',
                    valign: 'middle',
                    sortable: true//,
                    //formatter: nameFormatter
                }, {
                    field: 'nama',
                    title: 'Nama',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    //formatter: priceFormatter,
                    //sorter: priceSorter
                }, {
                    field: 'jabatan',
                    title: 'Jabatan',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    //formatter: priceFormatter,
                    //sorter: priceSorter
                },{
                    field: 'pangkat',
                    title: 'Pangkat',
                    align: 'left',
                    valign: 'top',
                    sortable: true
                },{
                    field: 'golongan',
                    title: 'Golongan',
                    align: 'left',
                    valign: 'top',
                    sortable: true
                },{
                    field: 'ruang',
                    title: 'Ruang',
                    align: 'left',
                    valign: 'top',
                    sortable: true
                },{
                    field: 'operate',
                    title: 'Item Operate',
                    align: 'center',
                    valign: 'top',
                    clickToSelect: false,
              	 formatter: operateFormatter,
                    events: operateEvents
                }]
            });
		function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
                '<i class="glyphicon glyphicon-print"></i>',
            '&nbsp;</a>',
            '<a class="edit ml10" href="javascript:void(0)" title="Edit">&nbsp;',
                '<i class="glyphicon glyphicon-edit"></i>',
            '&nbsp;</a>',
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
                '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }
});

//var $select_city, select_city, xhr;

	  $select_city = $('#pilih-jabatan').selectize({
	      valueField: 'kd_jab',
	      labelField: 'nama',
	      searchField: ['nama'],
	      dataAttr: 'data-data',
	  });
	  select_city  = $select_city[0].selectize;

	  $edit_select_jabatan= $('#edit-pilih-jabatan').selectize({
	      valueField: 'kd_jab',
	      labelField: 'nama',
	      searchField: ['nama'],
	      dataAttr: 'data-data',
	  });
	  edit_select_jabatan  = $edit_select_jabatan[0].selectize;
	$("body").on("click","#btn-tambah-sdm",function(){
        $('#modal-tambah-sdm').modal({
        	backdrop: 'static',
  			keyboard: false
		});
		select_city.clearOptions();
              select_city.load(function(callback) {
                  xhr && xhr.abort();

                  xhr = $.ajax({
                      url:"jsonjabatan.php",
                      //data:{'par_input':'getJabatan'},
                      //:"POST",
                      dataType:"json",
                      success: function(results) {
                          callback(results);
                      },
                      error: function() {
                          callback();
                      }
                  })
              });
		 		
	});


	


	var grid = $("#tabelsdm").bootgrid({
    //ajax: true,
   // post: function ()
   // {
     //   return {
          //  id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
//};
    //},
   // url: "/api/data/basic",
    formatters: {
        "commands": function(column, row)
        {
            return "<button type=\"button\" title='edit' class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.kodepegawai + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
                "<button type=\"button\" title='hapus' class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.kodepegawai + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
        }
    }
	}).on("loaded.rs.jquery.bootgrid", function()
	{
	    /* Executes after data is loaded and rendered */
	    grid.find(".command-edit").on("click", function(e)
	    {
	        var kodepegawai = $(this).data("row-id");
	        var kd_jabatan;
	        $.ajax({
	             url:'ServicePegawai.php',
	             type:'POST',
	             data:{'par_input':'selectbykode','par_kodepegawai':kodepegawai},
	             dataType:"json",
	            	success:function(rs){
	             	$.each(rs, function(i, row){
	             		$("#editkdsdm").val(row.kode_pegawai);
	             		$("#editnip").val(row.nip);
	             		$("#editnama").val(row.nama);
	             		$("#edit-pilih-pangkat-gol").val(row.kode_pg);
	             		kd_jabatan = row.kode_jabatan;
	             		//$("#edit-pilih-jabatan").val(row.kode_jabatan);
	             		//edit_select_jabatan.setValue(row.kode_jabatan);
	             		
					});	             
	                $('#modal-edit-sdm').modal({
	                	backdrop: 'static',
			  			keyboard: false
					});
						edit_select_jabatan.clearOptions();
	              		edit_select_jabatan.load(function(callback) {
	                  	xhr && xhr.abort();

	                  	xhr = $.ajax({
	                    url:"jsonjabatan.php",
	                      //data:{'par_input':'getJabatan'},
	                      //:"POST",
	                      dataType:"json",
	                      success: function(results) {
	                          callback(results);
	                          edit_select_jabatan.setValue(kd_jabatan);
	                      },
	                      error: function() {
	                          callback();
	                      }
	                  });
	                  	
	                  	//$("#edit-pilih-jabatan").val("81");
	              });



					/////
					
					/////end
	            }
	        });
	    }).end().find(".command-delete").on("click", function(e)
	    {
	    	//show deleting confirmation 
	        //alert("You pressed delete on row: " + $(this).data("row-id"));
	        var kodepegawai = $(this).data("row-id");
	        //bootbox.confirm("Yakin ingin menghapus data pegawai "+kodepegawai+" ?", function(result) {  

			  //	if (result==true) {
			  		//alert("result")
			  	//	$.ajax({
		          //  url:'ServicePegawai.php',
		            //type:'POST',
		            //data:{'par_input':'delbykode','par_kodepegawai':kodepegawai},
		            //success:function(rs){
		            //	$("#message-box-public").html(rs);
		            //	$("#konten").load("hal-sdm.php");
		            //}
		        	//});	
			  	//}
			//});

	    bootbox.confirm({
		    //title: 'danger - danger - danger',
		    message: 'Are you sure you want to delete this, There is no undo!l',
		    buttons: {
		        'cancel': {
		            label: 'Cancel',
		            className: 'btn-default'
		        },
		        'confirm': {
		            label: '<span id="loader-btndelsdm" class="hidden"><img width="20px" height="20px" src="img/ajax-loading.gif"/>&nbsp&nbsp&nbsp</span>Delete',
		            className: 'btn-danger pull-right',
		            idName: 'aaa'
		        }
		    },		    
		    callback: function(result) {		    	
		        
		        if (result) {
		            
		            //alert(aaa);
		            $.ajax({
		            url:'ServicePegawai.php',
		            type:'POST',
		            data:{'par_input':'delbykode','par_kodepegawai':kodepegawai},
		            beforeSend:function(){
		            	$("#aaa").addClass("disabled");
		            	$("#loader-btndelsdm").removeClass("hidden");	
		            },
		            success:function(rs){
		            	$("#message-box-public").html(rs);
		            	$("#konten").load("hal-sdm.php");
		            }
		        	}); 
		        }
		    }
		});

	        
	    });
	});

	
</script>