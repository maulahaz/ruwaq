<?php 
  $formLocation = base_url().'arabic/qpege/do';

  $validFrom = $dtQuiz['start_at'];
  $validUntil = $dtQuiz['due_at'];
  $currentDate = date('Y-m-d H:i:s');
  $isValid = (($currentDate >= $validFrom && $currentDate <= $validUntil) ? true : false);
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

        <!-- Check Limit Pengerjaan Quiz -->
        <?php if(!$isValid): ?>
        <p style='color: red;'>Error : Waktu pengerjaan Quiz di luar range.</p>
        <?php endif; ?>

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
              <input type="hidden" name="qid" value="<?=$dtQuiz['id'] ?>">
              <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit" <?= ($isValid) ? '' : 'disabled' ?>>Submit</button>
              <a href="<?=base_url('arabic') ?>" class="btn btn-default">Cancel</a>
                
            </div>

          </div>
          <div class="col-sm-6">
            <strong>Petunjuk</strong>
            <ul>
              <li>Berdoalah sebelum mengerjakan quiz.</li>
              <li>Dilarang bekerjasama dalam bentuk apapun.</li>
              <li>Waktu mengerjakan Quiz sesuai dengan yang tertera di keterangan ini (lihat keterangan waktu).</li>
              <li>Quiz hanya akan bisa di mulai jika memasukan <strong>kode token yang benar.</strong></li>
              <li>Tidak memilih dan/atau memakai USERNAME dengan nama orang lain dengan tujuan untuk meniru atau bertindak sebagai orang lain.</li>
              <li>Tidak diperkenankan meembuat akun lebih dari 1, dengan menggunakan nama atau email lain. Aplikasi ini memiliki teknologi yang dapat melacak double akun tersebut, dan kami akan melakukan penghapusan akun permanent secara sepihak.</li>
              <li>Dengan mengikuti kuis ini maka peserta telah memahami dan menyutujui syarat dan ketentuan kuis ini.</li>
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