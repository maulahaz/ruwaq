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

                <?php if(_getUserInfo('ses_Post') == 'Teacher') : ?>
				<a href="<?= $create_page_url ?>"> <button type="button" class="btn btn-inline btn-primary pull-right" title="Add New Data">+ Materi</button></a>
				<?php endif; ?>

            </div>
            <div class="box-body">
                <table id="tbl_manage" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>
				  	<th>Tanggal Post</th>
				  	<th>Judul</th>
				  	<th>Kategori</th>
				  	<th>Author</th>
					<th>Status</th>
					<th class="text-center">Action</th>                                   
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php foreach ($dtQry->result() as $row): ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td><?= get_nice_date($row->Date_posted, 'mydate') ?></td>
					  	<td class="text-left"><a href="<?= base_url('materi/view/'.$row->URL) ?>"><?= mb_strimwidth($row->Title, 0, 30, "..."); ?></a></td>
						<!-- <td class="text-left"><?//mb_strimwidth($row->Content, 0, 100, "..."); ?></td> -->
						<td><?= $row->Category ?></td>					  
						<td><?= $row->Author ?></td>					  
						<td><?= $row->Status ?></td>

						<td>
							<!-- Single button -->
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Action <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							  	<li>
							    	<a href="<?= base_url('materi/view/'.$row->URL) ?>" data-toggle="tooltip" data-placement="top" title="View" target="_blank"> <i class="fa fa-eye"></i> View</a>
							    </li>
							    <?php if(_getUserInfo('ses_Post') == 'Teacher') : ?>
							    <li>
							    	<a href="#" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-pencil"></i> Edit</a>
							    </li>
							    <li>
							    	<a href="#" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i> Delete</a>
							    </li>
							    <?php endif; ?>
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