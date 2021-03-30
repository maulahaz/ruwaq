<?php 
	//Form location
  $this->session->set_flashdata('startTimer', time());
  $form_location = base_url().'arabic/qpege/submit/';
	// $form_location = base_url().'arabic/qpege/submit/'.$token;
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
      <?= form_open_multipart($form_location, 'id="frm_quiz" onsubmit="return confirm(\'Apakah anda sudah yakin?\')"') ; ?>
      <?php $sn = 1;?>
      <div class="box-body">

      <div class="quiz-timer">
        <p>Sisa waktu:</p>
      <?php  if(isset($timer)): ?>
        <div id="exam_timer" data-timer="<?= $timer * 60; ?>" style="max-width:200px; width: 100%; height: 100px;"></div>
      <?php endif; ?>    
      </div>

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
                <div class="col-md-9" style="padding: 0 10px;">
              <?php else: ?> 
                <div class="col-md-12" style="padding: 0 10px;">
              <?php endif; ?>
                <p>Points : <?= $row['points']; ?></p>
                  <?php foreach ($dtAnswers->result_array() as $rowOpt) :?>
                    <?php if ($rowOpt['question_id'] == $row['id']) :?>
                    <div class="radio">
                      <label>
                        <input type="radio" name="answer_qid_<?=$row['id']; ?>" value="<?=$rowOpt['opt_text']; ?>"><?=$rowOpt['opt_text']; ?>
                        <!-- <input type="radio" name="answer_qid[]; ?>" value="<?//$rowOpt['opt_text']; ?>"><?//$rowOpt['opt_text']; ?> -->
                      </label>
                    </div>
                  <?php endif; ?>
                  <?php endforeach; ?>

                </div>
                <?php if($row['image'] != null) : ?>
                <div class="col-md-3 text-center">
                  <a class="fancybox" rel="group" href="<?=base_url('uploads/img/'.$row['image']) ?>"><img src="<?=base_url('uploads/img/'.$row['image']) ?>" alt="" class="img-responsive" /></a>
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
          <input type="hidden" name="timer" value="<?= $timer; ?>">
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
