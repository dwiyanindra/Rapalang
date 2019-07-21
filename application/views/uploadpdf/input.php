<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Upload Data Client </h1>
                        </div>
                        <form enctype="multipart/form-data" class="Client" method="post" action="<?= base_url('uploadpdf/masuk'); ?>">


                             <div class="form-group">            
                                <label for="nama">Nama: </label>
                                <div class="input-field col s12"> 
                                    <select name="id_client" id="id_client">
                                        <?php foreach ($client as $a) : ?>
                                            <option value="<?= $a['id_client']; ?>"><?= $a['nama_rs']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            

                            <input type="file" name="nama_pdf" />
                            <br></br>
                            <input type="submit" value="upload" />

                        </form>
                        <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>