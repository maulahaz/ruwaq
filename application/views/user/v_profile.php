<?php 
  $formLocation = base_url().'user/update/'.$dtEdit['uid'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <section class="content">
    <!-- Default box -->
    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title"><?= $page_title; ?></h3>
        <?php $this->view('notification'); ?>
      </div>

    <div class="box-body">

<!-- Page Content -->
      <!-- <form action="<?= $formLocation;?>" method="post"> -->
    <?php echo form_open_multipart($formLocation); ?>

      <div class="col-md-8">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" value="<?=isset($dtEdit) ? $dtEdit['Name'] : set_value('fullname'); ?>"/>
        </div>
      </div>

      <div class="col-md-8">
        <div class="form-group">
          <label>Nickname</label>
          <input type="text" class="form-control" id="nick_name" name="nick_name" value="<?=isset($dtEdit) ? $dtEdit['Nickname'] : set_value('nick_name'); ?>"/>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <label>Telephone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?=isset($dtEdit) ? $dtEdit['Phone1'] : set_value('phone'); ?>"/>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="email" name="email" value="<?=isset($dtEdit) ? $dtEdit['Email'] : set_value('email'); ?>"/>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <label>Address Group</label>
          <select class="form-control" id="address_group" name="address_group">
              <option value="">--Select--</option>
              <option value="Ruwais-1/2" <?= ($dtEdit['Address_grp'] == "Ruwais-1/2") ? "selected" : ""; ?>>Ruwais-1/2</option>
              <option value="Ruwais-3" <?= ($dtEdit['Address_grp'] == "Ruwais-3") ? "selected" : ""; ?>>Ruwais-3</option>
              <option value="Ruwais-4" <?= ($dtEdit['Address_grp'] == "Ruwais-4") ? "selected" : ""; ?>>Ruwais-4</option>
              <option value="Ruwais-5" <?= ($dtEdit['Address_grp'] == "Ruwais-5") ? "selected" : ""; ?>>Ruwais-5</option>
          </select>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" name="address" id="address" cols="30" rows="3"><?= $dtEdit['Address'] ?></textarea>
        </div>
      </div>

      <div class="form-group"> 
        <!-- <div class="col-md-3"></div> -->
        <div class="controls col-md-8">
          <button type="submit" name="submit" value="Save" class="btn btn-primary" onclick="return confirm('Confirm ?');">Update</button>
          <a href="<?=base_url('arabic') ?>" class="btn btn-default">Cancel</a>
          <a href="<?=base_url('user/changepass') ?>" class="btn btn-warning pull-right">Change Password</a>
          
        </div>
      </div>

      <?php echo form_close(); ?>

    </div>  <!-- /.box-body -->
          
    <div class="box-footer">
      <!-- Footer Content -->
    </div>  <!-- /.box-footer-->
  
  </div><!-- /.box -->  
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->