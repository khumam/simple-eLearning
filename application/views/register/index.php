<section class="py-5 vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-1"></div>
            <div class="col-md-4 col-10">

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


                <h6 class="text-secondary">Register for New Account</h6>
                <hr>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="register-fullname" class="text-secondary">Fullname</label>
                        <input type="text" name="register-fullname" id="register-fullname" class="form-control" placeholder="Your Name">
                        <?php echo "<span class='text-danger'>" . form_error('register-fullname') . "</span>"; ?>
                    </div>
                    <div class="form-group">
                        <label for="register-email" class="text-secondary">Email</label>
                        <input type="email" name="register-email" id="register-email" class="form-control" placeholder="your@email.com">
                        <?php echo "<span class='text-danger'>" . form_error('register-email') . "</span>"; ?>
                    </div>
                    <div class="form-group">
                        <label for="register-password" class="text-secondary">Password</label>
                        <input type="password" name="register-password" id="register-password" class="form-control" placeholder="password">
                        <?php echo "<span class='text-danger'>" . form_error('register-password') . "</span>"; ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info w-100" type="submit">Register New Account</button>
                    </div>
                </form>

                <div class="row text-center">
                    <div class="col-6">
                        <a href="<?php echo base_url('login'); ?>" class="text-info">Have an Account?</a>
                    </div>
                    <div class="col-6">
                        <a href="<?php echo base_url('forgotpassword'); ?>" class="text-info">Forgot Password?</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-1"></div>
        </div>
    </div>
</section>