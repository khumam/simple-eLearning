<section class="py-5  d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center" style="font-weight: 300; font-size: 50pt;">W E L C O M E T O O P P I A!</h1>
                <h2 class="text-center" style="font-weight: 300; font-size: 30pt;"><?php echo $this->session->userdata('fullname'); ?></h2>
            </div>
            <div class="col-sm-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://github.com/sahmura/laraci">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/sahmura/laraci">Documentations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>