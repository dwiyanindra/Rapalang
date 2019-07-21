!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard </h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Menu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Artikel</td>
                <td> <a href="<?= base_url('artikel/input'); ?>" class="badge badge-success">input</a>
                    <a href="<?= base_url('artikel/edit'); ?>" class="badge badge-warning">edit</a>
                    <a href="<?= base_url('artikel/delete'); ?>" class="badge badge-danger">delete</a>
                    <a href="<?= base_url('artikel/view'); ?>" class="badge badge-primary">view</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Layanan</td>
                <td> <a href="<?= base_url('layanan/input'); ?>" class="badge badge-success">input</a>
                    <a href="<?= base_url('layanan/edit'); ?>" class="badge badge-warning">edit</a>
                    <a href="<?= base_url('layanan/delete'); ?>" class="badge badge-danger">delete</a>
                    <a href="<?= base_url('layanan/view'); ?>" class="badge badge-primary">view</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Struktur</td>
                <td> <a href="<?= base_url('struktur/input'); ?>" class="badge badge-success">input</a>
                    <a href="<?= base_url('struktur/edit'); ?>" class="badge badge-warning">edit</a>
                    <a href="<?= base_url('struktur/delete'); ?>" class="badge badge-danger">delete</a>
                    <a href="<?= base_url('struktur/view'); ?>" class="badge badge-primary">view</a>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Album</td>
                <td> <a href="<?= base_url('album/input'); ?>" class="badge badge-success">input</a>
                    <a href="<?= base_url('album/edit'); ?>" class="badge badge-warning">edit</a>
                    <a href="<?= base_url('album/delete'); ?>" class="badge badge-danger">delete</a>
                    <a href="<?= base_url('album/view'); ?>" class="badge badge-primary">view</a>
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Contactus</td>
                <td> <a href="<?= base_url('contactus/input'); ?>" class="badge badge-success">input</a>
                    <a href="<?= base_url('contactus/edit'); ?>" class="badge badge-warning">edit</a>
                    <a href="<?= base_url('contactus/delete'); ?>" class="badge badge-danger">delete</a>
                    <a href="<?= base_url('contactus/view'); ?>" class="badge badge-primary">view</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->