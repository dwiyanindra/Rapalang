    <?= $this->session->flashdata('message'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Rumah Sakit
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                     <th>File Pdf</th>
                                     <th>Action</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($uploadpdf as $u) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $u->nama_pdf; ?></td>
                                        <td><a href="<?= base_url('/gambar/pdf/') . $u->nama_pdf; ?>" class="btn btn-warning" target="_blank">Download File</a></td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>