<!-- CONTENT -->
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header"><?php echo $title_content ?></h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
			
<div class="row">
    <div class="col-lg-12">
      	<div class="panel panel-default">
          <div class="panel-heading"></div>
          <div class="panel-body">
            <button type="button" class="btn btn-primary">Tambah Data</button>
            <table id="table-user"></table>
          </div> 
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<script type="text/javascript">
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
$('#table-user').bootstrapTable({
                method: 'get',
                url: "<?php echo base_url();?>admin/user/get_user_all/",
                cache: false,
                //height: ,
                striped: true,
                pagination: true,
                pageSize: 20,
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
                    alert(row.kode_skpd);
                    //alert('Event: onDblClickRow, data: ' + JSON.stringify(row));
                    window.location("<?php echo base_url(); ?>")
                },
                columns: [{
                    visible:false,
                    field: 'kode_skpd',
                    title: 'Kode Pegawai',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    class: 'b'
                }, {
                    field: 'username',
                    title: 'Username',
                    align: 'left',
                    valign: 'middle',
                    sortable: true//,
                    //formatter: nameFormatter
                }, {
                    field: 'password',
                    title: 'Password',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    //formatter: priceFormatter,
                    //sorter: priceSorter
                }, {
                    field: 'skpd',
                    title: 'SKPD',
                    align: 'left',
                    valign: 'top',
                    sortable: true,
                    //formatter: priceFormatter,
                    //sorter: priceSorter
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
</script>  
<!-- /CONTENT -->