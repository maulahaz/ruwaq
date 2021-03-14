<script>
	// alert(1);
	const myBaseURL = '<?php echo base_url(); ?>';

	$('#tbl_manage').DataTable({
		"columnDefs": [
	  		{ "orderable": false, "targets": [0,-1] },
	    ],
	});

	$(document).on('click', '.btn-select-question', function(ev){
		ev.preventDefault();
	    $('#mod_select_question .modal-header .modal-title').text('Question List');
	    $('#mod_select_question').modal('show');
	});

	var mytbl = $('#tbl_question_list_ckbx').DataTable({
	    "columnDefs": [
	  		{ "targets": 4, //<--Colom Target of check box
		      "checkboxes": {
	               "selectRow": true
	            }
	  		},
	  		{ "orderable": false, "targets": [0] },
	    ],
	    "select": {
	         "style": "multi"
	    },
	    // "sort":[[2, "desc"]]
	    // "ajax": '/lab/jquery-datatables-checkboxes/ids-arrays.txt',
	});

	$(document).on('click', '.btn_select_question_submit', function(ev){
		var rows_selected = mytbl.column(4).checkboxes.selected(); //<--Colom Target of check box
    	ev.preventDefault();
	    // console.log(rows_selected.join(","));
    	// alert(34);
    	$('#questions').val(rows_selected.join(","));
    	$('#qid').val(rows_selected.join(","));
    	$('#mod_select_question').modal('hide');
  	});

</script>