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
                    <div class="box-header">
                         <a href="<?= base_url('client/input'); ?>" class="btn btn-info">Tambah Data</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                     <th>Email</th>
                                     <th>Password</th>
                                     <th>Acion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($client as $c) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $c['nama_rs']; ?></td>
                                         <td><?= $c['email_rs']; ?></td>
                                          <td><?= $c['password']; ?></td>
                                        <td>
                                            <a href="<?= base_url('client/edit/' . $c['id_client']); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('Client/deleteclient/' . $c['id_client']); ?>" class="btn btn-danger">Delete</a>
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