<?= $this->session->flashdata('message'); ?>
<?php foreach ($about as $a) : ?>
<form method="post" action="<?= base_url('visi/editvisi/' . $a['id']); ?>" enctype="multipart/form-data">
    <section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="box box-info">
		            <div class="box-header">
		            	<h1 class="h3 mb-4 text-gray-800">Edit Data Visi, Misi, Moto </h1>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body pad">
		            	<div class="form-group">        		
			            	<label for="nama">Judul: </label>
						    <input type="text" name="judul" id="judul" class="form-control" value="<?= $a['judul']; ?>">
		            	</div>
		            	
		            	<div class="form-group">
		                    <textarea id="editor1" name="isi" class="form-control" rows="10" cols="80">
		                    <?= $a['isi']; ?></textarea>
		            	</div>
		            	<input type="submit" class="btn btn-primary" width="120" height="24" name="simpan" value="Edit Visi">
		            </div>
	          	</div>
	      	</div>
  		</div>
    </section>
</form>
<?php endforeach; ?>