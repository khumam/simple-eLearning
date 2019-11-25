<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Sunting Kelas</h4>
                </div>
            </div>
            <div class="col-sm-12">
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box p-3">
                            <form action="#" method="post">
                                <input type="text" value="<?php echo $this->session->userdata('id_user'); ?>" id="edit-id" hidden>
                                <div class="form-group">
                                    <label for="edit-fullname">Fullname</label>
                                    <input type="text" name="edit-fullname" id="edit-fullname" class="form-control" value="<?php echo $this->session->userdata('fullname'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="edit-email">Email</label>
                                    <input type="email" name="edit-email" id="edit-email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info" type="submit">Sunting akun</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>