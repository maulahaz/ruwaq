<?php 
  if(isset($dtEdit)){
    $formLocation = base_url().'arabic/qpege/update/'.$dtEdit['id'];
  }else{
    $formLocation = base_url().'arabic/qpege/store';
  }
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
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" id="title" name="title" class="form-control" value="<?= isset($dtEdit) ? $dtEdit['title'] : null ; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Level</label>
          <div class="col-sm-3">
            <select id="level" name="level" class="form-control" >
                <?php foreach ($arrLevel as $dt => $value) :?>
                    <option value="<?= $dt ?>" <?= (isset($points) && $points == $dt) ? "selected" : null ; ?>><?= $value ?></option>  
                <?php endforeach;?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Questions</label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" id="questions" name="questions" class="form-control" value="<?= isset($dtEdit) ? $dtEdit['questions'] : null ; ?>">
              <span class="input-group-addon btn-select-question"><i class="fa fa-list"></i></span>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Start at</label>
          <div class="col-sm-3">
            <input type="text" id="start_at" name="start_at" class="form-control myDatepicker" value="<?= isset($dtEdit) ? $dtEdit['start_at'] : null ; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Due at</label>
          <div class="col-sm-3">
            <input type="text" id="due_at" name="due_at" class="form-control myDatepicker" value="<?= isset($dtEdit) ? $dtEdit['due_at'] : null ; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Timer (minutes)</label>
          <div class="col-sm-1">
            <input type="number" min="5" id="timer" name="timer" class="form-control" value="<?= isset($dtEdit) ? $dtEdit['timer'] : null ; ?>">
          </div>
        </div>
        

        <hr>
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
            <?= isset($dtEdit) 
            ? null 
            : '<button type="reset" class="btn btn-warning">Reset</button>'; ?>
            <a href="<?=base_url('arabic/qpege') ?>" class="btn btn-default">Cancel</a>
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
<?= $this->view('qpege/modal_select_questions'); ?>