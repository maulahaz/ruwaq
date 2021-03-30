<script>
	// alert(1);
	const myBaseURL = '<?php echo base_url(); ?>';

	$('#tbl_manage').DataTable({
		"columnDefs": [
	  		{ "orderable": false, "targets": [0,1,-1] },
	    ],
	});

</script>