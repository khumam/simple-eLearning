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

                <h6 class="text-secondary">Login to Your Apps</h6>
                <hr>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="login-email" class="text-secondary">Email</label>
                        <input type="email" name="login-email" id="login-email" class="form-control" placeholder="your@email.com">
                        <?php echo "<span class='text-danger'>" . form_error('login-email') . "</span>"; ?>
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="text-secondary">Password</label>
                        <input type="password" name="login-password" id="login-password" class="form-control" placeholder="password">
                        <?php echo "<span class='text-danger'>" . form_error('login-password') . "</span>"; ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info w-100" type="submit">Login</button>
                    </div>
                </form>

                <div class="row text-center">
                    <div class="col-6">
                        <a href="<?php echo base_url('register'); ?>" class="text-info">Create New Account?</a>
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