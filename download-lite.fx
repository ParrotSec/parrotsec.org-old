<?php 
require('include/parrot.inc.php');

echo  '<section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary  wow fadeInDown">',$lang['download-lite-1'],CONFIG_SYSTEM_VERSION,'</h2>
                    <br>
                    <p class="text-faded  wow fadeInRight">
                      ',$lang['download-lite-2'],'
                    </p>
                    <p class="text-faded  wow fadeInUp">
                      ',$lang['download-lite-3'],'
                    </p>
                    <p class="text-faded wow fadeInLeft">
                      ',$lang['download-lite-4'],'
                    </p>
                    <p>
                      <img width="400" src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/desktop.jpg" />
                    </p>
                </div>
            </div>

            <div class="row">

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3>',$lang['download-lite-5'],'</h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>64BIT</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
    							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-6'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-7'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-8'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-9'],PARROT_LITE_SIZE_64,'</li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.9/Parrot-lite-3.9_amd64.iso">',$lang['index-3'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.9/Parrot-lite-3.9_amd64.iso.mirrorlist">',$lang['download-lite-10'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.9/Parrot-lite-3.9_amd64.iso.torrent">',$lang['download-lite-11'],'</a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.9/signed-hashes.txt">',$lang['download-lite-12'],'</a>
    						</div>
    					</div>
            </div>

            <div class="col-lg-3 col-md-3 col-md-offset-2 col-lg-offset-2 text-center">
              <div class="panel download panel-blue">
                <div class="panel-heading arrow_box text-center">
                  <h3>',$lang['download-lite-5'],'</h3>
                </div>
                <div class="panel-body text-center">
                  <p class="lead" style="font-size:40px"><strong>32BIT</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
    							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-13'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-7'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-8'],'</li>
                  <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-lite-9'],PARROT_LITE_SIZE_32,'</li>
    						</ul>
    						<div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.9/Parrot-lite-3.9_i386.iso">',$lang['index-3'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.9/Parrot-lite-3.9_i386.iso.mirrorlist">',$lang['download-lite-10'],'</a>
    						</div>
                <div class="panel-footer">
    							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/3.9/Parrot-lite-3.9_i386.iso.torrent">',$lang['download-lite-11'],'</a>
    						</div>
                <div class="panel-footer">
                  <a class="btn btn-lg btn-block btn-info" target="_blank" href="https://cdimage.parrotsec.org/parrot/iso/3.9/signed-hashes.txt">',$lang['download-lite-12'],'</a>
    						</div>
    					</div>
            </div>

          </div>

          </div>
        </section>';

require('include/foot.php');

?>