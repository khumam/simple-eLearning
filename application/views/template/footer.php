<footer class="black pos-rlt">
    <div class="footer dk">
        <div class="text-center container p-y-lg">
            <div class="clearfix text-lg m-t">
                <strong>OPPIA</strong> belajar kapanpun, di manapun
            </div>
            <div class="nav justify-content-center m-y text-primary-hover">
                <a class="nav-link" href="#demos" ui-scroll-to="demos">
                    <span class="nav-text">Beranda</span>
                </a>
                <a class="nav-link" href="#features" ui-scroll-to="features">
                    <span class="nav-text">Kelas</span>
                </a>
                <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">
                    <span class="nav-text">Hubungi Kami</span>
                </a>
            </div>
        </div>
        <div class="b b-b"></div>
        <div class="p-a-md">
            <div class="row footer-bottom">
                <div class="col-sm-8">
                    <small class="text-muted">&copy; Copyright <?php echo date('Y'); ?>. All rights reserved.</small>
                </div>
                <div class="col-sm-4">
                    <div class="text-sm-right text-xs-left">
                        <strong>Oppia</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url('assets/libs/jquery/jquery/dist/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery/tether/dist/js/tether.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery/bootstrap/dist/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-scroll-to.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery/underscore/underscore-min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/jquery/PACE/pace.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/config.lazyload.js'); ?>"></script>

<script src="<?php echo base_url('assets/html/scripts/palette.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-load.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-jp.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-include.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-device.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-form.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-nav.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-screenfull.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-scroll-to.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ui-toggle-class.js'); ?>"></script>

<script src="<?php echo base_url('assets/scripts/app.js'); ?>"></script>

<!-- ajax -->
<script src="<?php echo base_url('assets/libs/jquery/jquery-pjax/jquery.pjax.js'); ?>"></script>
<script src="<?php echo base_url('assets/html/scripts/ajax.js'); ?>"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#dashboard-tambahkelas-content').summernote({
            height: 150,
        });
    });
</script>
</body>

</html>