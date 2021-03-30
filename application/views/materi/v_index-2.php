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

				<a href="<?= $create_page_url ?>"> <button type="button" class="btn btn-inline btn-primary pull-right" title="Add New Data">+ Quiz</button></a>
            </div>
            <div class="box-body">
                <table id="tbl_materi" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>	
				  	<th>Tanggal Post</th>	
				  	<th>Judul</th>
				  	<th>Isi</th>	
				  	<th>Author</th> 
					<th>Status</th>					  
					<th>Action</th>                                    
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php $sn = 1; ?> 
			  	<?php foreach ($dtQry->result() as $row): ?>
					<tr>
						<td><?= $sn++ ?></td>
						<td><?= $row->Date_posted; ?></td>
					  	<td><?= $row->Title ?></td>
						<td><?= word_limiter($row->Content, 5) ?></td>
						<td><?= $row->Author ?></td>
						<td><?= $row->Status ?></td>					  
						<td>
							<a href="<?=base_url('materi/edit/'.$row->uid) ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-pencil"></i></a>
							<a href="<?=base_url('materi/delete/'.$row->uid) ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i></a>
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