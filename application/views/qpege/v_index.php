<?php 
	$create_page_url = base_url()."arabic/qpege/tambah";
?>

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
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $page_title; ?></h3>
                
                <?php if(isset($flash)) { echo $flash; } ?>

				<a href="<?= $create_page_url ?>"> <button type="button" class="btn btn-inline btn-primary pull-right" title="Add New Data">+ Quiz</button></a>
            </div>
            <div class="box-body">
                <table id="tbl_manage" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>
		            <th>Title</th>
		            <th>Level</th>
		            <th>Question ids</th>
		            <th>Start at</th>
		            <th>Due at</th>
		            <th>Token</th>
		            <th class="text-center">Action</th>                                     
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php foreach ($dtQuiz->result() as $row): ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td class="text-left"><?= $row->title ?></td>
						<td><?= $row->level ?></td>
						<td class="text-left"><?= $row->questions ?></td>
						<td><?= $row->start_at ?></td>					  
						<td><?= $row->due_at ?></td>					  
						<td><?= $row->token ?></td>					  
						<td>
							<!-- Single button -->
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Action <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li>
							    	<a href="<?= base_url('arabic/qpege/edit/'.$row->id) ?>" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-pencil"></i> Edit</a>
							    </li>
							    <li>
							    	<a href="<?= base_url('arabic/qpege/delete/'.$row->id) ?>" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i> Delete</a>
							    </li>
							    <!-- <li>
							    	<form action="<?//base_url('arabic/qpege/delete/'.$row->id) ?>" method="POST">
							    		<input type="hidden" value="DELETE">
							    		<button type="submit" class="btn btn-primary" name="btn_submit" value="Submit">Delete</button>
							    	</form>
							    </li> -->
							  </ul>
							</div>
						</td>                                     
					</tr>
					<?php endforeach; ?>					
					                                  
				  </tbody>
                </table>
            </div><!-- /.box-body -->

            <div class="box-footer"><!-- Footer Content is here-->
            </div><!-- /.box-footer-->

        </div><!-- /.box -->
    </section>
</div>