<?php 
	//Form location
  $form_location = base_url().'arabic/quiz/submit/';
	// $form_location = base_url().'arabic/quiz/submit/'.$token;
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <section class="content">
    <!-- Default box -->
    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title"><?= $page_title; ?></h3>

        <?php // require_once('notification.php'); ?>
        <?php $this->view('notification'); ?>

      </div>
<!-- onsubmit="return confirm('Apakah anda sudah yakin?')" -->
      <?= form_open_multipart($form_location, 'onsubmit="return confirm(\'Apakah anda sudah yakin?\')"') ; ?>
      <?php $sn = 1;?>
      <div class="box-body">
  	  <?php foreach ($dtSoal->result_array() as $row) :?>   
        <div class="panel panel-default">
          <div class="panel-heading">
            <?= $sn++; ?>. <?= $row['question']; ?>
            <input type="hidden" name="qid[]" value="<?= $row['id']; ?>">
            <div class="qid pull-right"><small>( qid#:<?= $row['id']; ?>)</small></div>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php if($row['image'] != null) : ?>
                <div class="col-9" style="padding: 0 10px">
              <?php else: ?> 
                <div class="col-12" style="padding: 0 10px">
              <?php endif; ?>
                <p>Jawaban : (Points : <?= $row['points']; ?>)</p>
                  <textarea class="form-control" name="answer_qid[]"></textarea>
                </div>
                <?php if($row['image'] != null) : ?>
                <div class="col-3 text-center p-3">
                  <a class="fancybox" rel="group" href="<?=base_url('uploads/'.$row['image']) ?>"><img src="<?=base_url('uploads/'.$row['image']) ?>" alt="" class="img-fluid" /></a>
                  <p>Click to Zoom</p>
                </div>              
                <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <hr>
      <div class="form-group pull-right">
          <input type="hidden" name="token" value="<?= $token; ?>">
          <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <a href="<?=base_url('arabic') ?>" class="btn btn-default">Cancel</a>
      </div>

      </div>  <!-- /.box-body -->
      <?= form_close(); ?>

      <div class="box-footer">
        <!-- Footer Content -->
      </div>  <!-- /.box-footer-->
  
    </div><!-- /.box -->  
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->
