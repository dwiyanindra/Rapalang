<?= $this->session->flashdata('message'); ?>
<?php foreach ($dokter as $d) : ?>
<form method="post" action="<?= base_url('dokter/editdokter/' . $d['id']); ?>" enctype="multipart/form-data">
    <section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="box box-info">
		            <div class="box-header">
		            	<h1 class="h3 mb-4 text-gray-800">Edit Data Dokter </h1>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body pad">
		            	<div class="form-group">        		
			            	<label for="nama">Nama: </label>
						    <input type="text" name="nama" id="nama" class="form-control" value="<?= $d['nama']; ?>">
		            	</div>
		            	<div class="form-group">
						    <label for="foto">Foto: </label>
						    <input id="foto" type="file" class="form-control" name="foto" onchange="PreviewImage();"/>  
		            	</div>
		            	<div class="form-group">
		                    <textarea id="editor1" name="keterangan" class="form-control" rows="10" cols="80">
		                    <?= $d['keterangan']; ?></textarea>
		            	</div>
		            	<input type="submit" class="btn btn-primary" width="120" height="24" name="simpan" value="Edit Dokter">
		            </div>
	          	</div>
	      	</div>
  		</div>
    </section>
</form>
<?php endforeach; ?>