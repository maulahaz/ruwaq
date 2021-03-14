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
    	<div class="msgBox"><?php if(isset($flash)) { echo $flash; } ?></div>
    	<div class="row">
    		
    		<div class="col-md-6">
		    	<!-- Box Materi -->
		        <div class="box">
		            <div class="box-header with-border">
		                <h3 class="box-title"><?= $boxTitle1; ?></h3>
		                <?php if(_getUserInfo('ses_Post') == 'Teacher') : ?>
		                <a href="<?= base_url('artikel/tambah') ?>" target="_blank"> <button type="button" class="btn btn-inline btn-primary pull-right" title="Add New Data">+ Artikel</button></a>
			            <?php endif; ?>
		                
		            </div>
		            <div class="box-body">
		                <table id="tbl_materi" class="table table-bordered table-hover">
		                <thead>
						  <tr>
						  	<th>No.</th>
				            <th>Judul</th>
				            <th>Tanggal Post</th>
				            <th class="text-center">Action</th>                                     
						  </tr>
					  	</thead> 
		                <tbody>
					  	<?php $sn = 1; ?> 
					  	<?php foreach ($dtMateri->result() as $row): ?>
							<tr>
								<td><?= $sn++ ?></td>
								<td><?=$row->Title ?></td>
								<td><?=get_nice_date($row->Date_posted, 'mydate') ?></td>				  
								<td>
									<a href="<?= base_url('artikel/view/'.$row->URL) ?>" class="btn btn-primary btn-sm fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></a>
								</td>                                     
							</tr>
							<?php endforeach; ?>					
							                                  
						  </tbody>
		                </table>
		            </div><!-- /.box-body -->

		            <div class="box-footer"><!-- Footer Content is here-->
		            </div><!-- /.box-footer-->
		        </div><!-- /.box -->
    		</div>
    		<div class="col-md-6">
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
				            <th>Title</th>
				            <th>Start at</th>
				            <th>Due at</th>
				            <th class="text-center">Action</th>                                     
						  </tr>
					  	</thead> 
		                <tbody>
					  	<?php $sn = 1; ?> 
					  	<?php foreach ($dtQuiz->result() as $row): ?>
							<tr>
								<td><?= $sn++ ?></td>
								<td class="text-left"><?= $row->title ?></td>
								<td><?= convertDate($row->start_at, 'mydate') ?></td>					  
								<td><?= convertDate($row->due_at, 'mydate') ?></td>					  
								<td>
									<!-- <a href="<?//base_url('arabic/quiz/do/'.$row->token) ?>" class="btn btn-primary btn-sm fa fa-play" data-toggle="tooltip" data-placement="top" title="Execute"></a> -->
									<a href="<?= base_url('arabic/quiz/akses/'.$row->id) ?>" class="btn btn-primary btn-sm fa fa-star" data-toggle="tooltip" data-placement="top" title="Akses"></a>
								</td>                                     
							</tr>
							<?php endforeach; ?>					
							                                  
						  </tbody>
		                </table>
		            </div><!-- /.box-body -->

		            <div class="box-footer"><!-- Footer Content is here-->
		            </div><!-- /.box-footer-->
		        </div><!-- /.box -->
    		</div>
    	</div>
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
		            <th>Attempt</th>
		            <th>Result</th>
		            <th class="text-center">Action</th>                                     
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php if ($dtResult->num_rows() > 0): ?>
			  		<?php foreach ($dtResult->result() as $row): ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td class="text-left"><?= $row->created_by ?></td>
						<td class="text-left"><?= convertDate($row->created_at,'mydate'); ?></td>
						<td class="text-left"><?= $row->title ?></td>
						<td><?= $row->attempt ?></td>
						<td><?= $row->mark ?></td>
						<td>
							<!-- <a href="<?//base_url('arabic/quiz/redo/'.$row->quiz_post_id) ?>" class="btn btn-primary btn-sm fa fa-refresh" data-toggle="tooltip" data-placement="top" title="Repeat"></a> -->
							<a href="<?= base_url('arabic/quiz/view/'.$row->quiz_post_id) ?>" class="btn btn-primary btn-sm fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></a>
						
							<?php if(_getUserInfo('ses_Post') == 'Teacher') : ?>
							<a href="<?= base_url('arabic/quiz/check/'.$row->quiz_post_id) ?>" class="btn btn-primary btn-sm fa fa-check-square-o" data-toggle="tooltip" data-placement="top" title="Correction"></a>
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