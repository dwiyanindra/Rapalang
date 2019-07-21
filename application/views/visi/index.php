   <?= $this->session->flashdata('message'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data visi, misi dan moto       
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
                            <th>Nomor</th>
                            <th>Judul</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($about as $a) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $a['judul']; ?></td>
                                <td><a href="<?= base_url('visi/edit/' . $a['id']); ?>" class="btn btn-warning">Edit</a>
                               
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