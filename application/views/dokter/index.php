    <?= $this->session->flashdata('message'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Dokter
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                         <a href="<?= base_url('dokter/input'); ?>" class="btn btn-info">Tambah Data</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($dokter as $d) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td>
                                            <a href="<?= base_url('dokter/edit/' . $d['id']); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('dokter/delete/' . $d['id']); ?>" class="btn btn-danger">Delete</a>
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