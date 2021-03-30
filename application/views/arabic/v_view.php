<style>
/* Custom style is here */
/* ****************************************************** */
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="box" style="min-height: 600px">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $page_title; ?></h3>
            </div>
            <div class="box-body">
            	<h2><?= $dtArtikel->Title ?></h2>
            	<p><small>By. <?= $dtArtikel->Author. ' | ' .get_nice_date($dtArtikel->Date_posted, "overtime").' | Category: ' .$dtArtikel->Category; ?></small></p>
            	<div class="details-img">
                    <img class="img-responsive" src="<?=($dtArtikel->Picture != '') ? base_url('uploads/materi/').$dtArtikel->Picture : null; ?>" alt="">
                </div>
                <p><?= $dtArtikel->Content;?></p>

            </div><!-- /.box-body -->

            <div class="box-footer"><!-- Footer Content is here-->
            	
            </div><!-- /.box-footer-->
        </div><!-- /.box -->
    </section>
</div>