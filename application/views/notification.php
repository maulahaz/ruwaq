<?php 
  //show if any error from input form
  echo validation_errors("<p style='color: red;'>","</p>"); 

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