<?php require(__DIR__ . 'include/parrot.inc.php'); ?>
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <h2 class="margin-top-0 text-primary  wow fadeInDown">Special Parrot Builds and Official Derivatives</h2><br/>
                <p class="text-faded  wow fadeInRight">In this page you can download the official Parrot builds for embedded ARM boards and other custom builds of Parrot for other special platforms.</p>
                <p class="text-faded  wow fadeInUp">The official ARM builds in this page are official images released by our ARM team.</p>
                <p class="text-faded wow fadeInLeft">Here you can also find custom Parrot derivatives and experimental builds with custom configurations for special devices, or just experimental Parrot derivatives proposed by our community and built on our official build platform.</p>
                <p><img class="rounded mx-auto d-block float-left" style="width:500px" src="<?php echo CONFIG_SITE_URL_STATIC_RESOURCES . "img/arm-soc.jpg"; ?>" /></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Rpi</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>arm</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i>armhf (armv7) 32bit</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Raspberry Pi 2 and 3</li>
                    </ul>
                   <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_OTHER_ARM_RPI_DOWNLOAD; ?>">Download (experimental)</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Orange Pi</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>arm</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i>armhf/arm64 (arm v7/v8) 32/64bit</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Orange Pi PC</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Orange Pi Nano</li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_OTHER_ARM_OPI_DOWNLOAD; ?>">Download (experimental)</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>',$lang['download-other-28'],'</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>arm</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i>arm64 (armv8) 64bit</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Pine64</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Rock64</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Sopine</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>PineBook</li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_OTHER_ARM_PINE64_DOWNLOAD; ?>">Download (experimental)</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require(__DIR__ . 'include/foot.php'); ?>
