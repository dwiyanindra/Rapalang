<!-- Page Heading -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Input Data Artikel </h1>
    <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?= base_url('visi/masuk'); ?>" enctype="multipart/form-data">
    <p>JUDUL
        <input type="text" name="judul" id="judul">
    </p>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="isi" rows="10" cols="80">
                    </textarea>
              </form>

              <input type="submit" width="120" height="24" name="simpan" value="POSTING     BERITA">
            </div>
          </div>
    </section>
    </form>
</div>