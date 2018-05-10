<?php require(__DIR__ . '/include/parrot.inc.php'); ?>
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12"><h2 class="margin-top-0 text-primary wow fadeInDown">Parrot Home <?php echo CONFIG_SYSTEM_VERSION; ?></h2><br/><br/></div>
        </div>
        <div class="row">
            <div class="col-lg-6 text-center">
                <p class="text-faded wow fadeInRight">Parrot Home is a special edition of Parrot designed for daily use, and it targets regular users who need a lightweight, always updated and beautiful system on their laptops or workstations.</p>
                <p class="text-faded wow fadeInUp">The distribution has the same look and feel of a regular Parrot environment and includes all the basic programs for daily work. Parrot Lite also includes programs to chat privately with people, encrypt documents with the highest cryptographic standards or surf the net in a completely anonymous and secure way.</p>
                <p class="text-faded wow fadeInLeft">The system can also be used as a starting point to build a very customized pentesting platform with only the tools you need, or you can use it to build your professional workstation by taking advantage of all the latest and most powerful technologies of Debian without hassle.</p>
            </div>
            <div class="col-lg-6 text-center">
                <p><img width="400" src="/img/desktop.jpg"/></p>
            </div><br/><br/><br/>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Parrot Studio</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>64 Bit</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Multimedia Production Suite</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Format: ISO Hybrid</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Size: 2.6GB</li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-studio-3.11_amd64.iso">Download</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-studio-3.11_amd64.iso.mirrorlist">Mirrors</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-studio-3.11_amd64.iso.torrent">Torrent</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.11/signed-hashes.txt">Signed Hashes</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Home Edition</h3></div>
                    <div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>64BIT</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i> For modern computers</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Format: ISO Hybrid</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Size: <?php echo PARROT_HOME_SIZE_64; ?></li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_HOME_DOWNLOAD_LINK_64; ?>">Download</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_HOME_MIRRORLIST_LINK_64; ?>">Mirrors</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_HOME_TORRENT_LINK_64; ?>">Torrent</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_HOME_SIGNEDHASHES_LINK_64; ?>">Signed Hashes</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="panel download panel-blue">
                    <div class="panel-heading arrow_box text-center"><h3>Home Edition</h3></div><div class="panel-body text-center"><p class="lead" style="font-size:40px"><strong>32BIT</strong></p></div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i> For older computers</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Interface: MATE</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Format: ISO Hybrid</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i>Size: <?php echo PARROT_HOME_SIZE_32; ?></li>
                    </ul>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_HOME_DOWNLOAD_LINK_64; ?>">Download</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_HOME_MIRRORLIST_LINK_64; ?>">Mirrors</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" href="<?php echo PARROT_HOME_TORRENT_LINK_64; ?>">Torrent</a></div>
                    <div class="panel-footer"><a class="btn btn-lg btn-block btn-info" target="_blank" href="<?php echo PARROT_HOME_SIGNEDHASHES_LINK_64; ?>">Signed Hashes</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require(__DIR__ . '/include/foot.php'); ?>
