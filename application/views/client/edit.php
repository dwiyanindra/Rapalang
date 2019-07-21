<?= $this->session->flashdata('message'); ?>
<?php foreach ($client as $c) : ?>
<form method="post" action="<?= base_url('Client/editclient/' . $c['id_client']); ?>" enctype="multipart/form-data">
    <section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="box box-info">
		            <div class="box-header">
		            	<h1 class="h3 mb-4 text-gray-800">Edit Data Client </h1>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body pad">
		            	<div class="form-group">        		
			            	<label for="nama">Nama: </label>
						    <input type="text" name="nama" id="name" class="form-control" value="<?= $c['nama_rs']; ?>">
		            	</div>
		            	<div class="form-group">        		
			            	<label for="nama">Email: </label>
						    <input type="text" name="email" id="email" class="form-control" value="<?= $c['email_rs']; ?>">
		            	</div>		            	
		            	<input type="submit" class="btn btn-primary" width="120" height="24" name="simpan" value="Edit Client">
		            </div>
	          	</div>
	      	</div>
  		</div>
    </section>
</form>
<?php endforeach; ?>