    <!-- Content Header (Page header) -->
<section class="content-header">
        <h1>
            Data Contactus
        </h1>
</section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($contactus as $c) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $c['name']; ?></td>
                                        <td><?= $c['email']; ?></td>
                                        <td><?= $c['phone']; ?></td>        <td>
                                <a href="<?= base_url('contactus/view/' . $c['id']); ?>" class="btn btn-warning">View</a>
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