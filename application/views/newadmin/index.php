    <?= $this->session->flashdata('message'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                         <a href="<?= base_url('auth/registration'); ?>" class="btn btn-info">New Admin</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($user as $u) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $u['name']; ?></td>
                                         <td><?= $u['email']; ?></td>
                                        <td>
                                             <a href="<?= base_url('Admin/delete/' . $u['id']); ?>" class="btn btn-danger">Delete</a>
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