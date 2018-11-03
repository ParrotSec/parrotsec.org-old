<?php require(__DIR__ . '/include/parrot.inc.php'); ?>
<section class="bg-primary" id="one">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12"><h2 class="margin-top-0 text-primary wow fadeInDown"><?php echo $lang['download-home-1'] . " " . CONFIG_SYSTEM_VERSION; ?></h2><br/><br/></div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <p class="text-faded wow fadeInRight"><?php echo $lang['download-home-2']; ?></p>
                    <p class="text-faded wow fadeInUp"><?php echo $lang['download-home-3']; ?></p>
                    <p class="text-faded wow fadeInLeft"><?php echo $lang['download-home-4']; ?>
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <p><img width="400" src="img/desktop.jpg"/></p>
                </div><br/><br/><br/>
            </div>
            <div class="row">

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3><?php echo $lang['download-home-5']; ?></h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>64Bit</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
    							<li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-6']; ?></li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-7']; ?></li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-8']; ?></li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-9'] . " " . PARROT_LITE_SIZE_64; ?></li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/Parrot-home-<?php echo $CONFIG_SYSTEM_VERSION; ?>_amd64.iso"><?php echo $lang['index-3']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/Parrot-home-<?php echo $CONFIG_SYSTEM_VERSION; ?>_amd64.iso.mirrorlist"><?php echo $lang['download-home-10']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/Parrot-home-<?php echo $CONFIG_SYSTEM_VERSION; ?>_amd64.iso.torrent"><?php echo $lang['download-home-11']; ?></a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/signed-hashes.txt"><?php echo $lang['download-home-12']; ?></a>
    						</div>
    					</div>
            </div>

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3><?php echo $lang['download-home-5']; ?></h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>32Bit</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
    							<li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-13']; ?></li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-7']; ?></li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-8']; ?></li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i><?php echo $lang['download-home-9'] . " " . PARROT_LITE_SIZE_32; ?></li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/Parrot-home-<?php echo $CONFIG_SYSTEM_VERSION; ?>_i386.iso"><?php echo $lang['index-3']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/Parrot-home-<?php echo $CONFIG_SYSTEM_VERSION; ?>_i386.iso.mirrorlist"><?php echo $lang['download-home-10']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/Parrot-home-<?php echo $CONFIG_SYSTEM_VERSION; ?>_i386.iso.torrent"><?php echo $lang['download-home-11']; ?></a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $CONFIG_SYSTEM_VERSION; ?>/signed-hashes.txt"><?php echo $lang['download-home-12']; ?></a>
    						</div>
    					</div>
            </div>

          </div>

          </div>
        </section>
<?php require(__DIR__ . '/include/foot.php'); ?>
