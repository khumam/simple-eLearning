<section class="py-5 mt-3 d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box p-3">
                    <h4><?php echo $materi['subyek_name']; ?></h4>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="player"></div>

                            <script>
                                var player = new Playerjs({
                                    id: "player",
                                    file: "<?php echo $materi['url_video']; ?>",

                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="box p-3">
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <?php echo $materi['content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>