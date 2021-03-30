<script>
	// alert(1); 
	const myBaseURL = '<?php echo base_url(); ?>';

	$('#tbl_result').DataTable({
		"columnDefs": [
	      // { "orderable": false, "targets": [0,-1] }
	      { "orderable": false, "targets": [-1] }
	    ],
		//"lengthChange": false // Will Disabled Record number per page
	});
	$('#tbl_materi').DataTable({
		"columnDefs": [
	      { "orderable": false, "targets": [0,-1] }
	    ]
	});
	$('#tbl_quiz').DataTable({
		"columnDefs": [
	      // { "orderable": false, "targets": [0,-1] }
	      { "orderable": false, "targets": [-1] }
	    ]
	});

</script>