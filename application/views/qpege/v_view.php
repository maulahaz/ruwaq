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

      <div class="box-body">
      <?php $sn = 1;?>
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
                <div class="col-md-9" style="padding: 0 10px">
              <?php else: ?> 
                <div class="col-md-12" style="padding: 0 10px">
              <?php endif; ?>
                <div class="jawaban_dan_pointX">
                  <p>Your answer : <span> <?= $row['answered']; ?></span></p>

                  <?php if($row['checked_by'] != NULL): ?>
                  <p>Type: <span> <?= $row['type']; ?></span>. Points : <span> <?= $row['answered_points'] .' / '.$row['quest_points'] ; ?></span></p>
                  <p>Correction/Correct Answer : <span> <?= $row['answer']; ?></span></p>
                  <?php endif; ?>

                </div>

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
      <div class="notes">
        <h4  style="color: red;">Notes:</h4>
        <?= isset($notes) ? $notes : '-' ?>
      </div>
      <hr>
      <div class="form-group pull-right">
          <a href="<?=base_url('arabic') ?>" class="btn btn-default">Back</a>
      </div>

      </div>  <!-- /.box-body -->

      <div class="box-footer">
        <!-- Footer Content -->
      </div>  <!-- /.box-footer-->
  
    </div><!-- /.box -->  
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->
