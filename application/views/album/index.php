    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Album        
      </h1>     
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="<?= base_url('album/input'); ?>" class="btn btn-info">Tambah Data</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Link</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($album as $a) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $a['nama']; ?></td>
                                <td><a href="<?= base_url('gambar/album/' . $a['nama_file']); ?>"><?= base_url('gambar/album/' . $a['nama_file']); ?></a></td>
                                <td>
                                    <a href="<?= base_url('album/delete/' . $a['id']); ?>" class="btn btn-danger">Delete</a>
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