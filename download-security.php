<?php require(__DIR__ . '/include/parrot.inc.php'); ?>
<section class="bg-primary" id="one">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12"><h2 class="margin-top-0 text-primary wow fadeInDown"><?php echo $lang['download-security-1'] . " " . CONFIG_SYSTEM_VERSION; ?></h2><br/><br/></div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <p class="text-faded  wow fadeInRight"><?php echo $lang['download-security-2']; ?></p>
                    <p class="text-faded  wow fadeInUp"><?php echo $lang['download-security-3']; ?></p>
                </div>
                <div class="col-lg-6 text-center"><p><img class="lazy" width="400px" data-src="/img/menu-full.jpg"/></p></div>
            </div><br/><br/><br/>
            <div class="row">

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3>Live+Installer ISO</h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>Security Edition</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
  							 <li class="list-group-item"><i class="icon-ok text-info"></i>For standard computers</li>
                 <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                 <li class="list-group-item"><i class="icon-ok text-info"></i>Format: ISO Hybrid (iso9660)</li>
                 <li class="list-group-item"><i class="icon-ok text-info"></i>Size: 3.7GB</li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/Parrot-security-<?php echo CONFIG_SYSTEM_VERSION; ?>_amd64.iso"><?php echo $lang['index-3']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/Parrot-security-<?php echo CONFIG_SYSTEM_VERSION; ?>_amd64.iso.mirrorlist"><?php echo $lang['download-security-9']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/Parrot-security-<?php echo CONFIG_SYSTEM_VERSION; ?>_amd64.iso.torrent"><?php echo $lang['download-security-10']; ?></a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/signed-hashes.txt"><?php echo $lang['download-security-11']; ?></a>
    						</div>
    					</div>
            </div>

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3>Virtual Appliance</h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>Security Edition</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
    							<li class="list-group-item"><i class="icon-ok text-info"></i>For virtual machines</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>Format: OVA Open Virtualization Format</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>Size: 5.9GB</li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/Parrot-security-<?php echo CONFIG_SYSTEM_VERSION; ?>_virtual.ova"><?php echo $lang['index-3']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/Parrot-security-<?php echo CONFIG_SYSTEM_VERSION; ?>_virtual.ova.mirrorlist"><?php echo $lang['download-security-9']; ?></a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/Parrot-security-<?php echo CONFIG_SYSTEM_VERSION; ?>_virtual.ova.torrent"><?php echo $lang['download-security-10']; ?></a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/<?php echo CONFIG_SYSTEM_VERSION; ?>/signed-hashes.txt"><?php echo $lang['download-security-11']; ?></a>
    						</div>
    					</div>
            </div>

          </div>

          </div>
        </section>
<?php require(__DIR__ . '/include/foot.php'); ?>
