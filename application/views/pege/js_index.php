<script>
	// alert(1);
	const myBaseURL = '<?php echo base_url(); ?>';

	$('#tbl_manage').DataTable({
		"columnDefs": [
	  		{ "orderable": false, "targets": [0,-1] },
	    ],
	});

	// Toggle button of Questions Picture:
    $("#gambar").hide();
    $("#is_image").click(function() {
        if($(this).is(":checked")) {
            $("#gambar").show();
        } else {
            $("#gambar").hide();
        }
    });

    //ADD MORE OPTION:
	//===================================================================================== 

	var row_detail = $('#row_data').html();
  
	$('#btn_add_detail').on('click', function(ev){
	    ev.preventDefault();
	    $('#row_data').append(row_detail);
	    // reorderSN();  
	    renumberRows();
	});

	function renumberRows() {
	    $('#row_data tr').each(function(index, el){
	      index++;
	      $(this).children('td').first().text("Option-" + index);
	    });
	}

	$("#tbl_options").on("click", ".btn_del_option", function() {
	    $(this).closest("tr").remove();
      // reorderSN();
    	renumberRows();
	});

</script>