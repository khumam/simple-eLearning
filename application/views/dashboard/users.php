<section class="py-5  d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Users OPPIA</h4>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="box p-3">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $user['fullname']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('dashboard/detailusers/' . $user['id_user']); ?>" class="badge badge-success">Detail</a>
                                            <a href="<?php echo base_url('dashboard/deleteuser/' . $user['id_user']); ?>" class="badge badge-danger">Block</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>