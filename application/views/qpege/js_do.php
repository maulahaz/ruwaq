<script>
	// alert(1);
	const myBaseURL = '<?php echo base_url(); ?>';

	$("#exam_timer").TimeCircles({ 
		time:{
			Days:{
				show: false
			},
			Hours:{
				show: false
			}
		}
	});

	setInterval(function(){
		var remaining_second = $("#exam_timer").TimeCircles().getTime();
		if(remaining_second < 1)
		{
			// alert('Maaf, Waktu sudah habis');
			// location.reload();
			document.getElementById("frm_quiz").submit()
		}
	}, 1000);

</script>