<?php 
  if(isset($dtEdit)){
    $formLocation = base_url().'arabic/pege/update/'.$dtEdit['id'];
  }else{
  	$formLocation = base_url().'arabic/pege/store';
  }

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
                <?php $options = ['MultiOption'=>'Multi Option','TrueFalse'=>'True False']; ?>
                <?php foreach ($options as $key => $value) : ?>
                    <option value="<?= $key ?>" <?= isset($dtEdit) && $dtEdit['type'] == $key ? 'selected' : null ; ?>><?= $value ?></option>
                <?php endforeach;?>
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
                <textarea class="form-control" id="question" name="question"><?= isset($dtEdit) ? $dtEdit['question'] : set_value('question'); ?> </textarea>
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
            <label for="answer" class="col-sm-2 col-form-label">Answer/Explanation</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="answer" name="answer"><?= isset($dtEdit) ? $dtEdit['answer'] : set_value('answer', ''); ?> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Points (0-10)</label>
            <div class="col-sm-2">
              <input type="number" min="0" max="10" class="form-control" id="points" name="points" value="<?= isset($dtEdit) ? $dtEdit['points'] : set_value('answer') ; ?>">
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

        <div class="card">
          <div class="card-header">
            <p style="display:inline">ANSWER OPTION</p>
            <button class="btn btn-success btn-sm pull-right" id="btn_add_detail" name="btn_add_detail">Add More</button>
          </div>
          <div class="card-body">
            <table id="tbl_options" class="table table-bordered">
              <thead>
                <tr>
                    <th width="100px">Option #</th>
                    <th>Title</th>
                    <th width="150px">Is Correct</th>
                    <th width="25px" class="text-center"><i class="fa fa-cog"></i></th>
                </tr>
              </thead>
              <tbody id="row_data">
                <?php $sn = 1; ?>
                <?php if(isset($dtEditAnswer) && $dtEditAnswer->num_rows()>0): ?>
                  <?php foreach ($dtEditAnswer->result_array() as $row): ?>
                  <tr>
                    <td><?= 'Option-'.$sn ++;?></td>
                    <td><input type="text" class="form-control" id="answer_opt" name="answer_opt[]" value="<?=$row['opt_text'];?>"></td>
                    <td>
                      <select class="form-control" id="correct_answer" name="correct_answer[]">
                        <option value="" disabled selected>--Select--</option>
                        <?php $options = [0=>'No',1=>'Yes']; ?>
                        <?php foreach ($options as $key => $value) : ?>
                            <option value="<?= $key ?>" <?= ($row['is_correct'] == $key) ? 'selected' : null ;?>><?= $value ?></option>
                        <?php endforeach;?>
                      </select>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger btn-sm btn_del_option"><span class="fa fa-trash"></span></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td class="row_id">
                      Option-1
                      <input type="hidden" id="opt_num" name="opt_num[]" value="">
                    </td>
                    <td>
                      <input type="text" class="form-control" id="answer_opt" name="answer_opt[]" value="<?= set_value('answer_opt[]'); ?>">
                    </td>
                    <td>
                      <select class="form-control" id="correct_answer" name="correct_answer[]">
                        <option value="" disabled selected>--Select--</option>
                        <?php $options = [0=>'No',1=>'Yes']; ?>
                        <?php foreach ($options as $key => $value) : ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php endforeach;?>
                      </select>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger btn-sm btn_del_option"><span class="fa fa-trash"></span></a>
                    </td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
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