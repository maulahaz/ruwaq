<?php 
	$create_page_url = base_url()."materi/tambah";
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
                
                <?php $this->view('notification'); ?>

				<!-- <a href="<?//$create_page_url ?>"> <button type="button" class="btn btn-inline btn-primary pull-right" title="Add New Data">+ Materi</button></a> -->

            </div>
            <div class="box-body">
                <table id="tbl_manage" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>
				  	<th>User ID</th>
				  	<th>Name</th>
				  	<th>Phone</th>
				  	<th>Address</th>
					<th>Level - Post</th>
					<th>Status</th>
					<th class="text-center">Action</th>                                   
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php foreach ($dtQry->result() as $row): ?>
			  		<?php $stts = ($row->Usr_status == 1) ? 'Active' : 'Not Active' ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td class="text-left"><?= $row->Usr_id ?></td>
						<td class="text-left"><?= $row->Name ?></td>					  
						<td class="text-left"><?= $row->Phone1 ?></td>					  
						<td class="text-left"><?= $row->Address ?></td>					  
						<td class="text-left"><?= $row->Usr_level.' - '.$row->Position ?></td>					  
						<td><?= $stts ?></td>					  
						<td>
							<!-- Single button -->
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Action <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li>
							    	<a href="<?=base_url('user/edit/'.$row->uid) ?>" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-pencil"></i> Edit</a>
							    </li>
							    <li>
							    	<a href="<?=base_url('user/delete/'.$row->uid) ?>" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i> Delete</a>
							    </li>
							    <li>
							    	<a href="<?=base_url('user/activation/'.$row->uid) ?>" data-toggle="tooltip" data-placement="top" title="Activation"> <i class="fa fa-pencil"></i> Activation</a>
							    </li>
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