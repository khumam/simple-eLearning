<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Edit Kelas</h4>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="box p-3">

                    <?php if ($this->session->flashdata('danger')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('danger'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>

                    <form action="#" method="post">
                        <input type="text" name="dashboard-tambahkelas-iduser" value="<?php echo $this->session->userdata('id_user'); ?>" hidden>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-nama">Nama Kelas</label>
                            <input type="text" name="dashboard-tambahkelas-nama" id="dashboard-tambahkelas-nama" class="form-control" placeholder="Nama Kelas" required value="<?php echo $class['class_name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-deskripsi">Deskripsi</label>
                            <textarea type="text" name="dashboard-tambahkelas-deskripsi" id="dashboard-tambahkelas-deskripsi" class="form-control" placeholder="Deskripsi" required><?php echo $class['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-level">Level</label>
                            <select class="form-control" name="dashboard-tambahkelas-level" id="dashboard-tambahkelas-level">
                                <option value="sd" <?php if ($class['level'] == 'sd') echo 'selected="selected"'; ?>>SD</option>
                                <option value="smp" <?php if ($class['level'] == 'smp') echo 'selected="selected"'; ?>>SMP</option>
                                <option value="SMA" <?php if ($class['level'] == 'sma') echo 'selected="selected"'; ?>>SMA</option>
                                <option value="ekstra" <?php if ($class['level'] == 'ekstra') echo 'selected="selected"'; ?>>Ekstra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Edit kelas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>