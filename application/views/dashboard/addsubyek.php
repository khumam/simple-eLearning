<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Tambah Subyek</h4>
                    <h5><?php echo $class['class_name']; ?></h5>
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
                            <label for="dashboard-tambahkelas-nama">Nama Subyek</label>
                            <input type="text" name="dashboard-tambahkelas-nama" id="dashboard-tambahkelas-nama" class="form-control" placeholder="Nama Kelas" required>
                        </div>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-deskripsi">Deskripsi</label>
                            <textarea type="text" name="dashboard-tambahkelas-deskripsi" id="dashboard-tambahkelas-deskripsi" class="form-control" placeholder="Deskripsi" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dashboard-tambahkelas-content">Konten</label>
                            <textarea type="text" name="dashboard-tambahkelas-content" id="dashboard-tambahkelas-content" class="form-control" placeholder="Nama Kelas" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dashboard-kelas-video">Video</label>
                            <input type="text" name="dashboard-kelas-video" id="dashboard-kelas-video" class="form-control" placeholder="https://" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Tambah subyek</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>