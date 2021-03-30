<style>
/* Custom style is here */
/* ****************************************************** */
  .table th,td{ 
    text-align: center; 
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
    	<div class="msgBox">
    		<?php //if(isset($flash)) { echo $flash; } ?>
    		<?php $this->view('notification'); ?>
    	</div>

        <!-- Box-Quiz -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $boxTitle2; ?></h3>
                		            </div>
            <div class="box-body">
                <table id="tbl_quiz" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>
				  	<th>Quiz ID</th>
		            <th>Title</th>
		            <th>Tipe</th>
		            <th>Token</th>
		            <th>Start at</th>
		            <th>Due at</th>
		            <th>Timer</th>
		            <th class="text-center">Action</th>                                     
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php foreach ($dtQuiz->result() as $row): ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td><strong>QID #<?= $row->id ?></strong></td>
						<td class="text-left"><?= $row->title ?></td>
						<td><?= $row->type ?></td>
						<td><strong><?= $row->token ?></strong></td>
						<td><?= convertDate($row->start_at, 'mydate') ?></td>					  
						<td><?= convertDate($row->due_at, 'mydate') ?></td>	
						<td><strong><?= $row->timer ?> menit</strong></td>				  
						<td>
							<!-- <a href="<?//base_url('arabic/quiz/do/'.$row->token) ?>" class="btn btn-primary btn-sm fa fa-play" data-toggle="tooltip" data-placement="top" title="Execute"></a> -->
							<?php if($row->type == 'Essay'): ?>
							<?php $link = base_url('arabic/quiz/akses/'.$row->id) ?>
							<?php elseif($row->type == 'Pege'): ?>
							<?php $link = base_url('arabic/qpege/akses/'.$row->id) ?>
							<?php endif; ?>
							<a href="<?= $link; ?>" class="btn btn-primary btn-sm fa fa-rocket" data-toggle="tooltip" data-placement="top" title="Akses"></a>
						</td>                                     
					</tr>
					<?php endforeach; ?>					
					                                  
				  </tbody>
                </table>
            </div><!-- /.box-body -->

            <div class="box-footer"><!-- Footer Content is here-->
            </div><!-- /.box-footer-->
        </div><!-- /.box -->

    	<!-- Box Result -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $boxTitle3; ?></h3>
            </div>
            <div class="box-body">
                <table id="tbl_result" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>
		            <th>Done by</th>
		            <th>Done at</th>
		            <th>Quiz Title</th>
		            <th>Type</th>
		            <th>Attempt</th>
		            <th>Result</th>
		            <th class="text-center">Action</th>                                     
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php if ($dtResult->num_rows() > 0): ?>
			  		<?php foreach ($dtResult->result() as $row): ?>
		  			<?php if($row->type == 'Essay'): ?>
	  				<?php $quizType = 'quiz'; ?>
		  			<?php elseif($row->type == 'Pege'): ?>
	  				<?php $quizType = 'qpege'; ?>
	  				<?php endif; ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td class="text-left"><?= $row->created_by ?></td>
						<td class="text-left"><?= convertDate($row->created_at,'overtime'); ?></td>
						<td class="text-left"><?= $row->title ?> (QID#<?= $row->quiz_id ?>)</td>
						<td><?= $row->type ?></td>
						<td><?= $row->attempt ?></td>
						<td><?= $row->mark ?></td>
						<td>
							<!-- <a href="<?//base_url('arabic/quiz/redo/'.$row->quiz_post_id) ?>" class="btn btn-primary btn-sm fa fa-refresh" data-toggle="tooltip" data-placement="top" title="Repeat"></a> -->
							<a href="<?= base_url('arabic/'.$quizType.'/view/'.$row->quiz_post_id) ?>" class="btn btn-primary btn-sm fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></a>
						
							<?php if(_getUserInfo('ses_Post') == 'Teacher' && ($row->type == 'Essay')) : ?>
							<a href="<?= base_url('arabic/'.$quizType.'/check/'.$row->quiz_post_id) ?>" class="btn btn-primary btn-sm fa fa-check-square-o" data-toggle="tooltip" data-placement="top" title="Correction"></a>
							<?php endif; ?>
						</td>                                     
					</tr>
					<?php endforeach; ?>					
				<?php endif; ?>					
					                                  
				</tbody>
                </table>
            </div><!-- /.box-body -->

            <div class="box-footer"><!-- Footer Content is here-->
            </div><!-- /.box-footer-->
        </div><!-- /.box -->
    </section>
</div>