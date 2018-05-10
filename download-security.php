<?php require(__DIR__ . '/include/parrot.inc.php'); ?>
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <h2 class="margin-top-0 text-primary  wow fadeInDown">Parrot Security <?php echo CONFIG_SYSTEM_VERSION; ?></h2><br/>
                <p class="text-faded  wow fadeInRight">Parrot Security is our complete all-in-one environment for pentesting, privacy, digital forensics, reverse engineering and software development.</p>
                <p class="text-faded  wow fadeInUp">The system includes a full arsenal of security oriented tools to cover many categories of the work of a pentester.</p>
            </div>
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center"><p><img width="400px" src="/img/menu-full.jpg"/></p></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Security Edition</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>64BIT</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i> For modern computers</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Format: ISO Hybrid</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Size: <?php echo PARROT_SECURITY_SIZE_64; ?></li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_SECURITY_DOWNLOAD_LINK_64; ?>">Download</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_SECURITY_MIRRORLIST_LINK_64; ?>">Mirrors</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_SECURITY_TORRENT_LINK_64; ?>">Torrent</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_SECURITY_SIGNEDHASHES_LINK_64; ?>">Signed Hashes</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Security Edition</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>32BIT</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i> For modern computers</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Format: ISO Hybrid</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Size: <?php echo PARROT_SECURITY_SIZE_32; ?></li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_SECURITY_DOWNLOAD_LINK_32; ?>">Download</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_SECURITY_MIRRORLIST_LINK_32; ?>">Mirrors</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_SECURITY_TORRENT_LINK_32; ?>">Torrent</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_SECURITY_SIGNEDHASHES_LINK_32; ?>">Signed Hashes</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require(__DIR__ . '/include/foot.php'); ?>
