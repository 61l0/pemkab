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
<script type="text/javascript">
    function load_tambah_sdm(){
        $("#modal-tambah-sdm").modal("show");
    }
</script>
<div class="col-sm-12" style="border-bottom:1px #EEEEEE solid;">
	<h4>Daftar SDM atau pegawai <?php echo $this->session->userdata('nama_skpd'); ?></h4>
</div>
<hr></BR>
<div class="col-sm-1">
	<a href="javascript:void(0)" class="btn btn-primary" id="btn-tambah-sdm" onclick="load_tambah_sdm();"><i class="fa fa-plus-square-o"></i>&nbsp Tambah Data</a>
</div>
<table id="table-sdm"></table>
<?php echo $tambah_sdm.$edit_sdm.$del_confirm_sdm; ?>
<script type="text/javascript">
    var $select_jabatan, select_jabatan, xhr;
      $select_jabatan = $('#pilih-jabatan').selectize({
          valueField: 'kd_jabatan',
          labelField: 'nama_jabatan',
          searchField: ['nama_jabatan'],
          dataAttr: 'data-data',
      });
      select_jabatan  = $select_jabatan[0].selectize;

      var $select_jabatan1, select_jabatan1;
      $select_jabatan1 = $('#edit-pil-jabatan').selectize({
          valueField: 'kd_jabatan',
          labelField: 'nama_jabatan',
          searchField: ['nama_jabatan'],
          dataAttr: 'data-data',
      });
      select_jabatan1  = $select_jabatan1[0].selectize;
	
    window.operateEvents = {
        'click .edit': function (e, value, row, index) {
            var kode_jabatan;
            $.ajax({
                type:"GET",
                url:"<?php echo base_url(); ?>sdm/get_sdm/kd_sdm/"+row.kd_sdm,
                dataType:"json",
                success:function(rs){
                    $.each(rs, function(i, row){
                        $("#edit-kdsdm").val(row.kd_sdm);
                        $("#edit-nip").val(row.nip);
                        $("#edit-nama").val(row.nama);
                        $("#pilih-edit-pangkat-gol").val(row.kd_pg);
                        kode_jabatan = row.kd_jabatan;
                        //$("#pilih-edit-pangkat-gol").val(row.kd_jabatan);
                        //edit_select_jabatan.setValue(row.kode_jabatan);
                        
                    });
                }
            });
            
            $('#modal-edit-sdm').modal({
                backdrop: 'static',
                keyboard: false
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
                      select_jabatan1.setValue(kode_jabatan);      
                },
                  error: function(rs) {
                      //alert(rs);
                      callback();
                  }
                });
            });
        },
        'click .remove': function (e, value, row, index) {
            $('#mod_no_surat').html(row.kd_sdm);
            $('#modal_konfirm_sdm').data('kd_sdm', row.kd_sdm).modal('show');
        }
    };
	$(document).ready(function(){
            $('#table-sdm').bootstrapTable({
                method: 'get',
                url: "<?php echo base_url();?>sdm/get_sdm/skpd/<?php echo $this->session->userdata('kode_skpd');?>",
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
                //cardView: true,
                showToggle:true,
                //sidePagination: 'server',
                onDblClickRow: function (row) {
                    alert(row.kodepegawai);
                    //alert('Event: onDblClickRow, data: ' + JSON.stringify(row));
                    window.location("<?php echo base_url(); ?>")
                },
                columns: [{
                    visible:false,
                    field: 'kd_sdm',
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
                    field: 'nama_jabatan',
                    title: 'Jabatan',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    //formatter: priceFormatter,
                    //sorter: priceSorter
                },{
                    field: 'nama_pangkat',
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
            '<a class="btn btn-primary edit" style="font-size:12px;padding-top:3px;padding-bottom:3px;" href="javascript:void(0)" title="Edit">&nbsp;',
                '<i class="fa fa-pencil-square-o"></i>',
            '&nbsp;</a>',
            '<a class="btn btn-danger remove" style="font-size:12px;padding-top:3px;padding-bottom:3px;" href="javascript:void(0)" title="Remove">',
                '<i class="glyphicon glyphicon-trash"></i>',
            '</a>'
        ].join('');
    }
});
	$("body").on("click","#btn-tambah-sdm",function(){
        $('#modal-tambah-sdm').modal({
        	backdrop: 'static',
  			keyboard: false
		});
		select_jabatan.clearOptions();
        select_jabatan.load(function(callback) {
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
              },
              error: function(rs) {
                  //alert(rs);
                  callback();
              }
            });
        });

		 		
	});
    $(function () {
        $('#btnDeleteSdmYes').click(function () {          
            var kd_sdm = $('#modal_konfirm_sdm').data('kd_sdm');
           alert("deleteing"+kd_sdm);
            $.ajax({
                type:"POST",
                url:"<?php echo base_url(); ?>sdm/delete/"+kd_sdm,
                beforeSend:function(){

                },
                success:function(rs){
                    if(rs==1){
                        $('#modal_konfirm_sdm').modal('hide');
                        new PNotify({
                          title: '',
                          text: 'Berhasil menghapus data pegawai.',
                          type: 'success',
                          shadow: false
                        });
                        $('#table-sdm').bootstrapTable('refresh');   
                    }
                    //$('#box').html(rs);                 
                },
                error:function(){
                    new PNotify({
                          title: '',
                          text: 'Gagal menghapus data pegawai.',
                          type: 'error',
                          shadow: false
                    });
                }
            });
        });
    });	
</script>