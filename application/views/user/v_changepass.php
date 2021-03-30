<?php 
  $formLocation = base_url().'user/submit_changepass';
?>
<style>
  th,td{
      text-align: center;
  }

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <section class="content">
    <!-- Default box -->
    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title"><?= $page_title; ?></h3>

        <?php $this->view('notification'); ?>

      </div>

      <?= form_open($formLocation); ?>
      <div class="box-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Current Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="current_pwd" name="current_pwd"/>
              <?= form_error('current_pwd', '<small class="text-danger pl-3">','</small>') ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="new_pwd" name="new_pwd"/>
              <?= form_error('new_pwd', '<small class="text-danger pl-3">','</small>') ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Repeat Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd"/>
              <?= form_error('confirm_pwd', '<small class="text-danger pl-3">','</small>') ?>
            </div>
        </div>

        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
            
            <a href="<?=base_url('user/profile') ?>" class="btn btn-default">Cancel</a>
        </div>

      </div>  <!-- /.box-body -->
      <?= form_close(); ?>

      <div class="box-footer">
        <!-- Footer Content -->
      </div>  <!-- /.box-footer-->
  
    </div><!-- /.box -->  
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->

<!-- SHOW MODAL -->
<!-- ============================================================== -->