<?php 
	$create_page_url = base_url()."arabic/soal/tambah";
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

				<a href="<?= $create_page_url ?>"> <button type="button" class="btn btn-inline btn-primary pull-right" title="Add New Data">+ Soal</button></a>
            </div>
            <div class="box-body">
                <table id="tbl_manage" class="table table-bordered table-hover">
                <thead>
				  <tr>
				  	<th>No.</th>
		            <!-- <th>Category</th> -->
		            <th>Type</th>
		            <th>Level</th>
		            <th>Question</th>
		            <th>Answer</th>
		            <th>Is Active</th>
		            <th class="text-center">Action</th>                                     
				  </tr>
			  	</thead> 
                <tbody>
			  	<?php  
			  		$sn = 1; 
			  		foreach ($dtSoal->result() as $row) {
			  		$edt_uid = base_url()."arabic/soal/edit/".$row->id;
			  		$del_uid = base_url()."arabic/soal/hapus/".$row->id;
		  			// $unix_to_mydate = get_nice_date($row->Date_posted,'mydate');			  			
			  	?>
					<tr>
						<td><?= $sn++ ?></td>
						<!-- <td><?//$row->category ?></td> -->
						<td><?= $row->type ?></td>
						<td><?= $row->level ?></td>
					  	<td class="text-left"><?= character_limiter($row->question, 40) ?></td>
						<td class="text-left"><?= character_limiter($row->answer, 40) ?></td>
						<td><?= $row->is_active ?></td>					  
						<td>
							<!-- Single button -->
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Action <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li>
							    	<a href="<?= $edt_uid; ?>" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-pencil"></i> Edit</a>
							    </li>
							    <li>
							    	<a href="<?= $del_uid; ?>" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i> Delete</a>
							    </li>
							  </ul>
							</div>
						</td>                                     
					</tr>
					<?php 
						} 
					?>					
					                                  
				  </tbody>
                </table>
            </div><!-- /.box-body -->

            <div class="box-footer"><!-- Footer Content is here-->
            </div><!-- /.box-footer-->

        </div><!-- /.box -->
    </section>
</div>