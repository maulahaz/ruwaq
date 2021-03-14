<?php 
  $formLocation = base_url().'arabic/quiz/do';
  $arrLevel = [1 => 'Pemula', 2 => 'Menengah', 3 => 'Atas'];
?>
<style>
  th,td{
      text-align: center;
  }
  .btn-select-question:hover{
    cursor: pointer;
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

      <?= form_open_multipart($formLocation); ?>
      <?php $sn = 1;?>
      <div class="box-body">

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Title</label>
              <div class="col-sm-8">
                <h5>: <?=$dtQuiz['title'] ?></h5>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Level</label>
              <div class="col-sm-8">
                <h5>: <?=$dtQuiz['level'] ?></h5>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Tanggal mulai</label>
              <div class="col-sm-8">
                <h5>: <?=convertDate($dtQuiz['start_at'], 'mydate') ?></h5>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Batas terakhir</label>
              <div class="col-sm-8">
                <h5>: <?=convertDate($dtQuiz['due_at'], 'mydate') ?></h5>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Waktu (menit)</label>
              <div class="col-sm-8">
                <h5>: <?=$dtQuiz['timer'] ?></h5>
              </div>
            </div> 
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Enter token</label>
              <div class="col-sm-6">
                <input type="text" id="token" name="token" class="form-control">
              </div>
            </div>        
            <br>
            <div class="form-group pull-left">
                <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
                <a href="<?=base_url('arabic') ?>" class="btn btn-default">Cancel</a>
                
            </div>

          </div>
          <div class="col-sm-6">
            <strong>Petunjuk</strong>
            <ul>
              <li>Berdoalah sebelum mengerjakan quiz.</li>
              <li>Dilarang bekerjasama dalam bentuk apapun.</li>
            </ul>
          </div>
        </div>

      </div>  <!-- /.box-body -->
      <?= form_close(); ?>

      <div class="box-footer">
        <!-- Footer Content -->
      </div>  <!-- /.box-footer-->
  
    </div><!-- /.box -->  
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->