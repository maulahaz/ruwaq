<?php 
  $formLocation = base_url().'user/edit/'.$dtEdit['uid'];
  $arrPosition = ['user', 'Sekertaris', 'Teacher', 'Presiden', 'Administrator'];
  $arrLevel = ['1', '2', '3', '4', '5'];
  $arrStatus = [0=>'Not Active', 1=>'Active'];
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

      <?= form_open($formLocation); ?>
      <?php $sn = 1;?>
      <div class="box-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">User ID</label>
          <div class="col-sm-5">
            <input type="text" id="title" name="title" class="form-control" value="<?= isset($dtEdit) ? $dtEdit['Usr_id'] : null ; ?>" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-5">
            <input type="text" id="title" name="title" class="form-control" value="<?= isset($dtEdit) ? $dtEdit['Name'] : null ; ?>" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Position</label>
          <div class="col-sm-3">
            <select id="position" name="position" class="form-control" >
              <option value="">--Select--</option>
              <?php foreach ($arrPosition as $key => $value) :?>
                  <option value="<?= $value ?>" <?= (isset($dtEdit) && $dtEdit['Position'] == $value) ? "selected" : null ; ?>><?= $value ?></option>  
              <?php endforeach;?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Level</label>
          <div class="col-sm-3">
            <select id="level" name="level" class="form-control" >
              <option value="">--Select--</option>
              <?php foreach ($arrLevel as $key => $value) :?>
                  <option value="<?= $value ?>" <?= (isset($dtEdit) && $dtEdit['Usr_level'] == $value) ? "selected" : null ; ?>><?= $value ?></option>  
              <?php endforeach;?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Status</label> 
          <div class="col-sm-3">
            <select id="status" name="status" class="form-control" >
              <option value="">--Select--</option>
              <?php foreach ($arrStatus as $key => $value) :?>
                  <option value="<?= $key ?>" <?= (isset($dtEdit) && $dtEdit['Usr_status'] == $key) ? "selected" : null ; ?>><?= $value ?></option>  
              <?php endforeach;?>
            </select>
          </div>
        </div>
        
        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
            <a href="<?=base_url('user/manage') ?>" class="btn btn-default">Cancel</a>
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