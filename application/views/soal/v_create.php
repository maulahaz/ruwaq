<?php 
	//Form location
	$form_location = base_url().'soal/simpan';
?>

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

<!-- Page Content -->
      <!-- <form action="<?= $form_location;?>" method="post"> -->
	  <?php echo form_open_multipart($form_location); ?>

  		<div class="col-md-8">
  			<div class="form-group">
  				<label for="pageTitle"> Judul Artikel</label>
  				<input type="text" class="form-control" id="pageTitle" name="pageTitle" value="<?=isset($pageTitle) ? $pageTitle : set_value('pageTitle'); ?>"/>
  			</div>
  		</div>

  		<div class="col-md-4">
  			<div class="form-group">
  				<label for="status"> Status</label>
  				<select name="status" id="status" class="form-control">
            <option value="" <?=(isset($status) && $status == '') ? 'selected' : null ; ?>>--Select--</option>
            <option value="Published" <?=(isset($status) && $status == 'Published') ? 'selected' : null ; ?>>Published</option>
  					<option value="Draft" <?=(isset($status) && $status == 'Draft') ? 'selected' : null ; ?>>Draft</option>
  				</select>
  			</div>
  		</div>

  		<div class="col-md-8">
  			<div class="form-group">
  				<label for="tagline"> Tagline / Intro</label>
  				<input type="text" class="form-control" id="tagline" name="tagline" value="<?=isset($tagline) ? $tagline : set_value('tagline'); ?>"/>
  			</div>
  		</div>
  		<div class="col-md-4">
  			<div class="form-group">
  				<label for="gambar"> Gambar</label>
          <input type="hidden" name="hidden_gambar">
  				<input type="file" class="form-control" id="gambar" name="gambar">
  				<!-- <p class="help-block" style="margin-bottom: 50px">Upload Bukti Transfer disini.</p> -->
  			</div>
  		</div>

  		<div class="col-md-8">
  			<div class="form-group">
  				<label for="kategori"> Ketegori Artikel</label>
          <select id="kategori" name="kategori" class="form-control">
            <option value="">--Select--</option>
            <option value="Umum">Umum</option>
            <option value="Tips">Tips</option>
            <option value="Resep">Resep</option>
            <option value="Kesehatan">Kesehatan</option>
          </select>
  			</div>
  		</div>
  		<div class="col-md-4">
  			<div class="form-group">
  				<label for="author"> Di buat oleh</label>
  				<input type="text" class="form-control" id="author" name="author" value="<?=isset($author) ? $author : set_value('author'); ?>" style="margin-bottom: 10px" />
  			</div>
  		</div>
  		<div class="col-md-12">
  			<div class="form-group">
  				<label for="pageContent"> Isi Artikel</label>
          <!-- Textarea di transform ke CKEditor -->
          <!-- <div class="wrap_editor"></div> -->
          <textarea name="pageContent" id="pageContent" cols="5" rows="3"><?=isset($pageContent) ? $pageContent : set_value('pageContent'); ?></textarea>
  			</div>
  		</div>


      <div class="form-group"> 
        <!-- <div class="col-md-3"></div> -->
        <div class="controls col-md-8">
          <button type="submit" name="submit" value="Save" class="btn btn-primary" onclick="return confirm('Confirm ?');">Save</button>
          <button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
        </div>
      </div>

      <?php echo form_close(); ?>

    </div>  <!-- /.box-body -->
          
    <div class="box-footer">
      <!-- Footer Content -->
    </div>  <!-- /.box-footer-->
  
  </div><!-- /.box -->  
  </section>  <!-- /.content -->

</div>  <!-- /.content-wrapper -->
