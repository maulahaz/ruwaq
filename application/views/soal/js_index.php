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

</script>