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
                <div class="col-9" style="padding: 0 10px">
              <?php else: ?> 
                <div class="col-12" style="padding: 0 10px">
              <?php endif; ?>
                <div class="jawaban_dan_pointX">
                  <p>Jawaban : <span> <?= $row['answered']; ?></span></p>

                  <?php if($row['checked_by'] != NULL): ?>
                  <p>Points : <span> <?= $row['answered_points'] .' / '.$row['quest_points'] ; ?></span></p>
                  <p>Correction/Correct Answer : <span> <?= $row['answer']; ?></span></p>
                  <?php endif; ?>

                </div>

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
      <?php endforeach; ?>

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
