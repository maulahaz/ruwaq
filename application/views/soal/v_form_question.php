<?php 
  if(isset($dtEdit)){
    $formLocation = base_url().'arabic/soal/update/'.$dtEdit['id'];
  }else{
  	$formLocation = base_url().'arabic/soal/store';
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
      <div class="box-body">
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Quiz type</label>
            <div class="col-sm-2">
                <select class="form-control" id="type" name="type">
                <option value="" disabled selected>--Select--</option>
                <option value="Essay" selected>Essay</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="level" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-2">
                <select class="form-control" id="level" name="level">
                <option value="" disabled selected>--Select--</option>
                <?php $options = ['1'=>'Medium']; ?>
                <?php $options2 = ['1'=>'Beginner','2'=>'Intermediate','3'=>'Advance']; ?>
                <?php foreach ($options2 as $key => $value) : ?>
                    <option value="<?= $key ?>" <?= isset($dtEdit) && $dtEdit['level'] == $key ? 'selected' : null ; ?>><?= $value ?></option>
                <?php endforeach;?>

                
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="question" class="col-sm-2 col-form-label">Question</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="question" name="question"><?= isset($dtEdit) ? $dtEdit['question'] : set_value('question', ''); ?> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="picture" class="col-sm-2 col-form-label">Picture</label>
            <div class="col-sm-9">
                <label>
                  <input type="checkbox" id="is_image" name="is_image"> With Image
                </label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
        </div>
        <div class="form-group row">
            <label for="answer" class="col-sm-2 col-form-label">Answer/Explaination</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="answer" name="answer"><?= isset($dtEdit) ? $dtEdit['answer'] : set_value('answer', ''); ?> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Points (0-10)</label>
            <div class="col-sm-2">
              <input type="number" min="0" max="10" class="form-control" id="points" name="points" value="<?= isset($dtEdit) ? $dtEdit['points'] : null ; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="is_active" class="col-sm-2 col-form-label">Is Active</label>
            <div class="col-sm-2">
                <select class="form-control" id="is_active" name="is_active">
                <option value="" disabled selected>--Select--</option>
                <?php $options = [0=>'No',1=>'Yes']; ?>
                <?php foreach ($options as $key => $value) : ?>
                    <option value="<?= $key ?>" <?= isset($dtEdit) && $dtEdit['is_active'] == $key ? 'selected' : null ; ?>><?= $value ?></option>
                <?php endforeach;?>
                </select>
            </div>
            
        </div>
        

        <hr>
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Submit</button>
            <?= isset($dtEdit) 
            ? null 
            : '<button type="reset" class="btn btn-warning">Reset</button>'; ?>
            <a href="<?=base_url('arabic/soal') ?>" class="btn btn-default">Cancel</a>
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