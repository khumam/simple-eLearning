<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4>Katalog Kelas</h4>
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
                    <?php foreach ($classes as $class) { ?>
                        <div class="col-xs-4 col-sm-12 col-md-4">
                            <div class="box">
                                <div class="item dark">
                                    <a href><img src="<?php echo base_url('assets/uploads/cover/' . $class['cover']); ?>" class="w-full"></a>
                                    <div class="item-overlay black-overlay w-full">
                                        <a href class="center text-md"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="bottom gd-overlay p-a-xs">
                                        <a href class="text-md block p-x-sm"><?php echo $class['class_name']; ?></a>
                                    </div>
                                    <div class="top item-overlay text-right p-x-xs">
                                        <a href ui-toggle-class class="text-md p-a-sm inline">
                                            <i class="fa fa-heart-o inline"></i>
                                            <i class="fa fa-heart text-danger none"></i>
                                        </a>
                                    </div>
                                </div>
                                <a class="md-btn md-raised md-fab md-mini m-r pos-rlt md-fab-offset pull-right white" href="<?php echo base_url('dashboard/detail/' . $class['id']); ?>"><i class="material-icons md-24">&#xe145;</i></a>
                                <div class="p-a">
                                    <div class="text-muted m-b-xs">
                                        <span class="m-r">May 10</span>
                                        <a href class="m-r"><i class="fa fa-heart-o"></i> 4</a>
                                        <a href><i class="fa fa-bookmark-o"></i> 20</a>
                                    </div>
                                    <div class="m-b h-2x"><a href class="_800">Kelas <?php echo $class['level']; ?></a></div>
                                    <p class="h-3x"><?php echo $class['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>