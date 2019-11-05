<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Tambah Kelas</h4>
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
                            <input type="text" name="dashboard-tambahkelas-nama" id="dashboard-tambahkelas-nama" class="form-control" placeholder="Nama Kelas" required>
                        </div>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-deskripsi">Deskripsi</label>
                            <textarea type="text" name="dashboard-tambahkelas-deskripsi" id="dashboard-tambahkelas-deskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-level">Level</label>
                            <select class="form-control" name="dashboard-tambahkelas-level" id="dashboard-tambahkelas-level">
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="ekstra">Ekstra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Tambah kelas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>