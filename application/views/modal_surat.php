
	<script type="text/javascript">
		function demoFromHTML() {
	    alert("Print");
	    var pdf = new jsPDF('p', 'pt', 'legal');
	    source = $('#PrintElem').html();
	    //source = '<p>sdadva avda</p>';
	    alert(source);
	   /* specialElementHandlers = {
	        '#bypassme': function (element, renderer) {
	            return true
	        }
	    };*/
	    
	    margins = {
	        top: 80,
	        bottom: 60,
	        left: 40,
	        width: 522
	    };

	    pdf.fromHTML(
	    source, // HTML string or DOM elem ref.
	    margins.left, // x coord
	    margins.top, { // y coord
	        'width': margins.width//, // max width of content on PDF
	       // 'elementHandlers': specialElementHandlers
	    },
	    function (dispose) {
	        pdf.save('Test.pdf');
	    }, margins);
	}

	</script>
	<div class="modal fade" id="modal_view_surat" tabindex="-1" role="dialog" aria-labelledby="modal_konfirmLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="empty();">&times;</button>
	                <button id="cetak-surat" class="btn btn-success">Print</button>
	                <button type="button" id="cetak" onclick="javascript:demoFromHTML();" class="btn btn-success">Print PDF</button>
	                 <h3 class="modal-title" id=""></h3>

	            </div>
	            <div class="modal-body" id="konten-modal">
	                 
	            </div>
	        </div>
	        <!-- /.modal-content -->
	    </div>
	    <!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<script type="text/javascript">
    $(document).ready(function(){
      $("#cetak-surat").on("click",function(){            
        //alert(title);
        var title =" ";
        PrintElem("#PrintElem",title);
       // demoFromHTML();
      });

    });      
</script>
