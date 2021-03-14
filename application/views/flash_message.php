<?php 
  //show if any error from input form
  echo validation_errors('<span style="color: red; display: block">','</span>'); 
  // echo validation_errors('<p style="color: red;">','</p>'); 
  // echo validation_errors('<p class="alert alert-danger">','</p>'); 

  //show for flash message
  if(isset($flash)) { echo $flash; };

  // Notifikasi error upload 
  if(isset($error)){
    foreach ($error as $value) {
      echo "Error : ".$value;
    }
  };

  // Notifikasi error upload  
	if(isset($errorUpload)){
	    foreach ($errorUpload as $value) {
	      echo "Error : ".$value;
	    }
	};


?>

<!-- <div class="row">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Data updated.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
</div> -->