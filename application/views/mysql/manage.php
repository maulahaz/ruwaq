<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>my SQL</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap_v4.3.1.css') ?>">
  <style>
    body {
      font-family:'verdana';
      font-size:12px;
    }

    input, textarea, select{font-family:inherit;}

    .sqlInput{
      font-size:12px;
    }
    .mysql-result{
      display: none;
    }

  </style>
</head>
<body>
  <div class="container mt-5">
    <h3 class="text-left"><?= $page_title; ?></h3>        
      <?php  
        //--To veiw error from input validation
        // echo validation_errors("<div class='alert alert-warning'><strong>","</strong></div>");
        echo validation_errors("<p style='color: red;'>","</p>");

        //-To veiw flash message
        if(isset($flash)){ echo $flash;}
        
      ?>
    <form action="<?= base_url('mysql/manage'); ?>" method="post" class="form-horizontal" style='margin-top: 30px'>
      <div class="form-group">
        <label for="optSQL" class="control-label col-md-2"> Option</label>
        <div class="controls col-md-7">
            <select name="optSQL" id="optSQL" class="form-control sqlInput">
              <?php  
                $dt_options = array(
                    ''                    => 'Please select...',
                    'CREATE Table'        => 'CREATE Table',
                    'ADD PRIMARY KEY'     => 'ADD PRIMARY KEY',
                    'INSERT Field'        => 'INSERT Field',
                    'DROP Field'          => 'DROP Field',
                    'AUTO_INC Field'      => 'ADD AUTO-INC to the FIELD',
                    'UPDATE RowData'      => 'UPDATE RowData',
                    'DELETE RowData'      => 'DELETE RowData',
                    'CHANGE FIELD Type'   => 'CHANGE FIELD Type',
                    'JOIN 2 Table'        => 'JOIN 2 Table',                
                    'SHOW Table'          => 'Show Table List',                
                );
              foreach ($dt_options as $key => $value) {
                echo "<option value='$key'>$value</option>";
              }
              ?>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="txtSQL" class="control-label col-md-2"> SQL</label>
        <div class="controls col-md-10 ">
            <textarea name="txtSQL" id="txtSQL" cols="90" rows="15" class="form-control sqlInput"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="txtPwd" class="control-label col-md-2"> PIN Code</label>
        <div class="controls col-md-2 ">
            <input type="password" class="form-control sqlInput" id="txtPwd" name="txtPwd" />
        </div>
      </div>

      <div class="form-group"> 
        <div class="col-md-2"></div>
        <div class="controls col-md-7 ">
          <button type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="return confirm('Confirm ?');">Submit</button>
          <button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
        </div>
      </div>

    </form>
    <div class="mysql-result">
      <?php if(isset($lstTable)) :?>
        <?php foreach ($lstTable as $row) : ?>
          <?php $row."-" ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
  <script src="<?= base_url('assets/js/jquery-3.4.1.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap_v4.3.1.js') ?>"></script>
  <script>
    const myBaseURL = '<?php echo base_url(); ?>';

    // function getJSON(url, data){
    //     return JSON.parse($.ajax({
    //       url: url,
    //       data: data,
    //       type: 'post',
    //       dataType: 'json',
    //       async: false,
    //       global: false,
    //       success: function(msg){

    //       }
    //     }).responseText);
    // };

    // $(document).ready(function() {
    // });

    $('#optSQL').change(function(event) {
      let vSelected = $("#optSQL :selected").val();
      $.ajax({
        url: myBaseURL+'mysql/option',
        type: 'POST',
        dataType: 'json',
        data: {param: vSelected},
        success: function(data) {
          // console.log(data);
          $('#txtSQL').val(data);
          $('.mysql-result').css("display", "block");
          // jQuery.ajax({
          //   url: myBaseURL+'mysql/manage',
          //   type: 'POST',
          //   dataType: 'json',
          //   data: {param: vSelected},
          //   success: function(subdata) {

          //   }
          // });
          
        },
      });
      
    });

  </script>

</body>
</html>