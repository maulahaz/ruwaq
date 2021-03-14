<?php 
	//Form location
	$form_location = base_url().'arabic/quiz/submit_check/'.$token;
?>
<style>
  .answered span{
    color:  blue;
    font-weight : bold;
    font-style : italic;
  }
  .answered i{
    /* text-align: center; */
    /* line-height: 10px; */
    border-color: pink;
    display: block;
    margin-top: 15px;
  }
  .jawaban_dan_point{
    display: flex;
    justify-content: space-between;
  }
</style>

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

      <?= form_open_multipart($form_location); ?>
      <?php $sn = 1;?>
      <div class="box-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Quiz oleh</label>
        <div class="col-sm-5">
          <input type="text" id="done_by" name="done_by" class="form-control" value="<?= $done_by ; ?>" disabled>
        </div>
      </div>
      <?php $pts = 0; ?>
  	  <?php foreach ($dtQuery->result_array() as $row) :?>   
        <div class="panel panel-default">
          <div class="panel-heading">
            <?= $sn++; ?>. <?= $row['question']; ?>
            <input type="hidden" name="qid[]" value="<?= $row['id']; ?>">
            <div class="qid pull-right"><small>( qid#:<?= $row['id']; ?>)</small></div>
          </div>
          <div class="panel-body">
            <div class="row answered">
              <?php if($row['image'] != null) : ?>
                <div class="col-9" style="padding: 0 10px">
              <?php else: ?> 
                <div class="col-12" style="padding: 0 10px">
              <?php endif; ?>
                <div class="jawaban_dan_pointX">
                  <p>Jawaban : <span> <?= $row['answered']; ?></span></p>
                  <div class="form-group row">
                    <label class="col-xs-1 col-form-label">Pts</label>
                    <div class="col-xs-3 col-sm-3 col-md-1">
                      <select id="points" name="points_qid[]" class="form-control" >
                        <?php for($p = 0; $p <= $row['quest_points']; $p += 0.5): ?>
                          <option value="<?= $p ?>" <?= (isset($row['answered_points']) && $row['answered_points'] == $p) ? "selected" : null ; ?>><?= $p ?></option> 
                        <?php endfor; ?>  
                          <!-- <?php //foreach ($arrPoints as $dt) :?>
                              <option value="<?= $dt ?>" <?// (isset($points) && $points == $dt) ? "selected" : null ; ?>><?= $dt ?></option>  
                          <?php //endforeach;?> -->
                      </select>
                      
                    </div><i>/ <?= $row['points']; ?> (Total)</i>
                  </div>
                </div>
                
                <p>Correct Answer / Correction :</p>
                  <textarea class="form-control" name="correction_qid[]"><?= $row['answer']; ?></textarea>
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
        <?php $pts += $row['points']; ?>
      <?php endforeach; ?>

      <hr>
      <div class="form-group pull-right">
        <input type="hidden" name="total_points" value="<?=$pts; ?>">
        <?php if(_getUserInfo('ses_Post') == 'Teacher') : ?>
          <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
        <?php endif; ?>  
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
