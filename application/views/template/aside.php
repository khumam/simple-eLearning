<div id="aside" class="app-aside modal nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a class="navbar-brand">
                <div ui-include="'../assets/images/logo.svg'"></div>
                <img src="../assets/images/logo.png" alt="." class="hide">
                <span class="hidden-folded inline">Oppia</span>
            </a>
            <!-- / brand -->
        </div>
        <div class="hide-scroll" data-flex>
            <nav class="scroll nav-light">

                <ul class="nav" ui-nav>

                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Beranda</small>
                    </li>

                    <li>
                        <a href="<?php echo base_url('dashboard'); ?>">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe5c3;
                                    <span ui-include="'../assets/images/i_0.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('role') == 'user') { ?>
                        <li class="nav-header hidden-folded">
                            <small class="text-muted">Kelasku</small>
                        </li>

                        <li>
                            <a href="<?php echo base_url('dashboard/katalog'); ?>">
                                <span class="nav-icon">
                                    <i class="material-icons">&#xe02f;
                                        <span ui-include="'../assets/images/i_0.svg'"></span>
                                    </i>
                                </span>
                                <span class="nav-text">Katalog Kelas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/kelasku'); ?>">
                                <span class="nav-icon">
                                    <i class="material-icons">&#xe54b;
                                        <span ui-include="'../assets/images/i_0.svg'"></span>
                                    </i>
                                </span>
                                <span class="nav-text">Kelasku</span>
                            </a>
                        </li>

                        <li class="nav-header hidden-folded">
                            <small class="text-muted">Pengaturan</small>
                        </li>

                        <li class="hidden-folded">
                            <a href="<?php echo base_url('dashboard/editakun'); ?>">
                                <span class="nav-icon">
                                    <i class="material-icons">&#xe7fd;
                                        <span ui-include="'../assets/images/i_0.svg'"></span>
                                    </i>
                                </span>
                                <span class="nav-text">Pengaturan akun</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($this->session->userdata('role') == 'admin') { ?>

                        <li class="nav-header hidden-folded">
                            <small class="text-muted">Admin Area</small>
                        </li>

                        <li class="hidden-folded">
                            <a href="<?php echo base_url('dashboard/kelas'); ?>">
                                <span class="nav-icon">
                                    <i class="material-icons">&#xe150;
                                        <span ui-include="'../assets/images/i_0.svg'"></span>
                                    </i>
                                </span>
                                <span class="nav-text">Kelola Kelas</span>
                            </a>
                        </li>

                        <li class="hidden-folded">
                            <a href="<?php echo base_url('dashboard/users'); ?>">
                                <span class="nav-icon">
                                    <i class="material-icons">&#xe8d3;
                                        <span ui-include="'../assets/images/i_0.svg'"></span>
                                    </i>
                                </span>
                                <span class="nav-text">Kelola User</span>
                            </a>
                        </li>

                    <?php } ?>
                    <?php if ($this->session->userdata('role') == 'user') { ?>

                        <li class="nav-header hidden-folded">
                            <small class="text-muted">Bantuan</small>
                        </li>

                        <li class="hidden-folded">
                            <a href="docs.html">
                                <span class="nav-text">Hubungi Kami</span>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="hidden-folded">
                        <a href="<?php echo base_url('logout'); ?>">
                            <span class="nav-text">Logout</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="b-t">
            <div class="nav-fold">
                <a href="">
                    <span class="clear hidden-folded p-x">
                        <span class="block _500"><?php echo $this->session->userdata('fullname'); ?></span>
                        <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- / -->

<div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->

            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
                <li class="nav-item dropdown pos-stc-xs">
                    Selamat datang kembali <?php echo $this->session->userdata('fullname'); ?>
                </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>