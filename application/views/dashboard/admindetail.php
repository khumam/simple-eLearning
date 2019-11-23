<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Detail Kelas</h4>
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
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url('assets/uploads/cover/' . $class['cover']); ?>" class="w-full">
                        </div>
                        <div class="col-sm-8">
                            <h4><?php echo $class['class_name']; ?></h4>
                            <h6><?php echo $class['description']; ?></h6>

                            <?php if ($this->session->userdata('role') == 'admin') { ?>
                                <a href="<?php echo base_url('dashboard/tambahsubyek/' . $class['id']); ?>" class="btn btn-info mt-4">Tambah subyek</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <h4 class="text-center mt-3 mb-4">Daftar Materi</h4>
                <ul class="list-group">
                    <?php if ($materials) { ?>
                        <?php foreach ($materials as $materi) { ?>
                            <a href="<?php echo base_url('dashboard/playcourse/' . $materi['class_id'] . '/' . $materi['id']); ?>">
                                <li class="list-group-item"><?php echo $materi['subyek_name']; ?>
                                    <div class="ml-auto">
                                        <a href="<?php echo base_url('dashboard/editsubyek/' . $class['id'] . '/' . $materi['id']); ?>" class="badge badge-success">Edit</a>
                                        <a href="<?php echo base_url('dashboard/deletesubyek/' . $materi['id']); ?>" class="badge badge-danger">Delete</a>
                                    </div>
                                </li>
                            </a>
                        <?php } ?>
                    <?php } else { ?>
                        <li class="list-group-item">Belum ada materi</li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>