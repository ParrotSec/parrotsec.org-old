<?php 
require('include/parrot.inc.php');

echo  '<section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary  wow fadeInDown">',$lang['download-full-1'],CONFIG_SYSTEM_VERSION,'</h2>
                    <br>
                    <p class="text-faded  wow fadeInRight">
                      ',$lang['download-full-2'],'
                    </p>
                    <p class="text-faded  wow fadeInUp">
                      ',$lang['download-full-3'],'
                    </p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <p>
                      <img width="400px" src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/menu-full.jpg" />
                    </p>
                </div>
            </div>

            <div class="row">

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3>',$lang['download-full-4'],'</h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>64BIT</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
  							 <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-5'],'</li>
                 <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-6'],'</li>
                 <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-7'],'</li>
                 <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-8'],PARROT_FULL_SIZE_64,'</li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-security-3.11_amd64.iso">',$lang['index-3'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-security-3.11_amd64.iso.mirrorlist">',$lang['download-full-9'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-security-3.11_amd64.iso.torrent">',$lang['download-full-10'],'</a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.11/signed-hashes.txt">',$lang['download-full-11'],'</a>
    						</div>
    					</div>
            </div>

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3>',$lang['download-full-4'],'</h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>32BIT</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
    							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-12'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-6'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-7'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-full-8'],PARROT_FULL_SIZE_32,'</li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-security-3.11_i386.iso">',$lang['index-3'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-security-3.11_i386.iso.mirrorlist">',$lang['download-full-9'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.11/Parrot-security-3.11_i386.iso.torrent">',$lang['download-full-10'],'</a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.11/signed-hashes.txt">',$lang['download-full-11'],'</a>
    						</div>
    					</div>
            </div>

          </div>

          </div>
        </section>';

require('include/foot.php');

?>
