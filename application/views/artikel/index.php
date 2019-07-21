    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Artikel        
      </h1>     
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="<?= base_url('artikel/input'); ?>" class="btn btn-info">Tambah Data</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Judul</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($artikel as $a) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $a['judul']; ?></td>
                                <td>
                                <a href="<?= base_url('artikel/edit/' . $a['id']); ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('artikel/delete/' . $a['id']); ?>" class="btn btn-danger">Delete</a>
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