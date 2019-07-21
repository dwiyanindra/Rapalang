    <?= $this->session->flashdata('message'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data PDF
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                         <a href="<?= base_url('uploadpdf/input'); ?>" class="btn btn-info">Upload PDF</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                     <th>Nama Client</th>
                                     <th>Tanggal</th>
                                     <th>File PDF</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($uploadpdf as $u) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                         <td><?= $u['nama_rs']; ?></td>
                                         <td><?= $u['tanggal']; ?></td>
                                          <td><?= $u['nama_pdf']; ?></td>
                                        <td>
                                            <a href="<?= base_url('Uploadpdf/deleteuploadpdf/' . $u['id_pdf']); ?>" class="btn btn-danger">Delete</a>
                                        </td>
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