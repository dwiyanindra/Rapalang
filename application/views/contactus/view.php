<div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($contactus as $c) : ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $c['name']; ?></td>
                                        <td><?= $c['email']; ?></td>
                                        <td><?= $c['phone']; ?></td>   
                                        <td><?= $c['pesan']; ?></td>      <td>
                               
                                </td>                    
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>