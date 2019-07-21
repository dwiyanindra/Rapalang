<?= $this->session->flashdata('message'); ?>
<?php foreach ($artikel as $a) : ?>
<form method="post" action="<?= base_url('artikel/editartikel/' . $a['id']); ?>" enctype="multipart/form-data">
    <section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="box box-info">
		            <div class="box-header">
		            	<h1 class="h3 mb-4 text-gray-800">Edit Data Artikel </h1>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body pad">
		            	<div class="form-group">        		
			            	<label for="judul">JUDUL: </label>
						    <input type="text" name="judul" id="judul" class="form-control" value="<?= $a['judul']; ?>">
		            	</div>
		            	<div class="form-group">
						    <label for="gambar">Gambar: </label>
						    <input id="gambar" type="file" class="form-control" name="gambar" onchange="PreviewImage();"/>  
		            	</div>
		            	<div class="form-group">
		                    <textarea id="editor1" name="deskripsi" class="form-control" rows="10" cols="80">
		                    <?= $a['deskripsi']; ?></textarea>
		            	</div>
		            	<input type="submit" class="btn btn-primary" width="120" height="24" name="simpan" value="EDIT BERITA">
		            </div>
	          	</div>
	      	</div>
  		</div>
    </section>
</form>
<?php endforeach; ?>