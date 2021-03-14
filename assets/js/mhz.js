// function kirim_saran() {
$('#btnKirim-saran').on('click', function(ev){
	ev.preventDefault();
	let verify = $('#verify').val();
	let nama = $('#nama').val();
	let pesan = $('#message').val();
	if(nama == "" || nama == ""){ 
		alert("Data masih ada yang kosong");
		return false; 
	}
	if(verify != 7){ 
		alert("Verification input salah");
		return false; 
	}
	// return false;
	$.ajax({
		url: $('#frmSaran').attr('action'),
		type: $('#frmSaran').attr('method'),
		dataType: 'JSON',
		data: $('#frmSaran').serialize(),
		success: function(response) {
			$('.msgBox').css("display", "block");
			// console.log(response.msg);
			alert("Pesan berhasil dikirim");
			// if(response.success){
			// 	console.log(response.msg)
			// }
			// elseif(response.success){
			// 	console.log(response.msg)
			// }
		}
	});
});

function addUangkas() {
	//--Reset form:
	$('#frmAddUangkas')[0].reset;

	//--Remove class text-danger from Error delimiter:
	$('.text-danger').remove();

	//--Remove class has-error and has-success:
	$('.form-group').removeClass('has-error').removeClass('has-success'); 

	$('#frmAddUangkas').unbind('submit').bind('submit', function () {
		// alert("ok");
		// return false;

		//--Remove class text-danger from Error delimiter:
		$('.text-danger').remove();

		// let frm = $(this);
		$.ajax({
		  url: $(this).attr('action'),
		  type: $(this).attr('method'),
		  dataType: 'json',
		  data: $(this).serialize(),
		  success: function(response) {
		  	// console.log(response);
		  	// return false;
		  	if(response.success === true){
			    $('.errMsg').html('<div class="alert alert-success alert-dismissible" role="alert">' +
                    '<strong><span class="fa fa-check"></span>  </strong>' + response.msg +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                '</div>');

                //--Hide the modal:
                $('#modAddUangkas').modal('hide');

                //--Update Table:
                // manageTblMember.ajax.reload(null, false);

                //--Refresh Table:
                // $("#tblUangkas").html();
            }else{
            	if(response.msg instanceof Object){
            		$.each(response.msg, function(index, value) {
            			let id = $('#' + index);
            			id.closest(".form-control")
            			.removeClass('has-error')
            			.removeClass('has-success')
            			.addClass(value.length > 0 ? "has-error" : "has-success")
            			.after(value);
            		})
            	}else{
				    $('.errMsg').html('<div class="alert alert-warning alert-dismissible" role="alert">' +
	                    '<strong><span class="fa fa-remove"></span>  </strong>' + response.msg +
	                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
	                        '<span aria-hidden="true">&times;</span>' +
	                    '</button>' +
	                '</div>');

	                //--Hide the modal:
	                $('#modAddUangkas').modal('hide');
                }	            	
			}
		  }
		});
		return false;			
	});
};

$(document).ready(function () {

/*************************************************************
	Uangkas
**************************************************************/
	function addUangkas1() {
		$('#frmAddUangkas')[0].reset;
		$('#frmAddUangkas').unbind('submit').bind('submit', function () {
			alert("ok");
			return false;
			let frm = $(this);
			jQuery.ajax({
			  url: frm.attr('action'),
			  type: frm.attr('method'),
			  dataType: 'json',
			  data: frm.serialize(),
			  success: function(response) {
			  	// console.log(response);
			  	if(response.success === true){
				    $('.errMsg').html('<div class="alert alert-success alert-dismissible" role="alert">' +
	                    '<strong><span class="fa fa-check"></span>  </strong>' + response.msg +
	                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
	                        '<span aria-hidden="true">&times;</span>' +
	                    '</button>' +
	                '</div>');

	                //--Hide the modal:
	                $('#modAddUangkas').modal('hide');

	                //--Update Table:
	                // manageTblMember.ajax.reload(null, false);
	            }else{
	            	if(response.msg instanceof Object){
	            		$.each(response.msg, function(index, value) {
	            			let id = $('#' + index);
	            			id.closest(".form-group")
	            			.removeClass('has-error')
	            			.removeClass('has-success')
	            			.addClass(value.length > 0 ? "has-error" : "has-success")
	            			.after(value);
	            		})
	            	}else{
					    $('.errMsg').html('<div class="alert alert-warning alert-dismissible" role="alert">' +
		                    '<strong><span class="fa fa-remove"></span>  </strong>' + response.msg +
		                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
		                        '<span aria-hidden="true">&times;</span>' +
		                    '</button>' +
		                '</div>');
	                }	            	
				}
			  }
			});
			return false;			
		});
	};



});