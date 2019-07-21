<?= $this->session->flashdata('message'); ?>
<form method="post" action="<?= base_url('album/masuk'); ?>" enctype="multipart/form-data">
    <section class="content">
        <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header">
                  <h1 class="h3 mb-4 text-gray-800">Tambah Gambar Album </h1>
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                  <div class="form-group">            
                    <label for="nama">JUDUL: </label>
	                <input type="text" name="nama" id="nama" class="form-control" >
	              </div>
	              <div class="form-group">
	                <label for="gambar">Gambar: </label>
	                <input id="gambar" type="file" class="form-control" name="gambar" onchange="PreviewImage();"/>  
	               </div>
                  <input type="submit" class="btn btn-primary" width="120" height="24" name="simpan" value="POST BERITA">
                </div>
              </div>
          </div>
      </div>
    </section>
</form>
