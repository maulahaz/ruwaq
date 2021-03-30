<?php 
  if(isset($dtEdit)){
    $formLocation = base_url().'arabic/materi/update/'.$dtEdit['id'];
  }else{
    $formLocation = base_url().'arabic/materi/store';
  }
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <section class="content">
    <!-- Default box -->
    <div class="box">
    
      <div class="box-header with-border">
        <h3 class="box-title"><?= $page_title; ?></h3>
        <?php $this->view('notification'); ?>
      </div>

    <div class="box-body">

<!-- Page Content -->
      <!-- <form action="<?= $formLocation;?>" method="post"> -->
    <?php echo form_open_multipart($formLocation); ?>

      <div class="col-md-8">
        <div class="form-group">
          <label for="judul"> Judul Materi</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?=isset($judul) ? $judul : set_value('judul'); ?>"/>
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
          <label for="kategori"> Ketegori Materi</label>
          <select id="kategori" name="kategori" class="form-control">
            <option value="">--Select--</option>
            <option value="Belajar">Belajar</option>
            <option value="Umum">Umum</option>
            <option value="Tips">Tips</option>
            <option value="KosaKata">Kosa Kata</option>
            <!-- <option value="Kesehatan">Kesehatan</option> -->
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
          <label for="pageContent"> Isi Materi</label>
          <!-- Textarea di transform ke CKEditor -->
          <!-- <div class="wrap_editor"></div> -->
          <textarea name="pageContent" id="pageContent" cols="5" rows="3"><?=isset($pageContent) ? $pageContent : set_value('pageContent'); ?></textarea>
        </div>
      </div>

      <div class="form-group"> 
        <!-- <div class="col-md-3"></div> -->
        <div class="controls col-md-8">
          <button type="submit" name="submit" value="Save" class="btn btn-primary" onclick="return confirm('Confirm ?');">Save</button>
          <!-- <button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button> -->
          <a href="<?=base_url('arabic') ?>" class="btn btn-default">Cancel</a>
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
