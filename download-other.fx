<?php 
require('include/parrot.inc.php');

echo  '<section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary  wow fadeInDown">',$lang['download-other-1'],'</h2>
                    <br>
                    <p class="text-faded  wow fadeInRight">
                      ',$lang['download-other-2'],'
                    </p>
                    <p class="text-faded  wow fadeInUp">
                      ',$lang['download-other-3'],'
                    </p>
                    <p class="text-faded wow fadeInLeft">
                      ',$lang['download-other-4'],'
                    </p>
                    <p>
                      <img class="rounded mx-auto d-block float-left" style="width:500px" src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/arm-soc.jpg" />
                    </p>
                </div>
            </div>

            <div class="row">

              <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                  <div class="panel-heading arrow_box text-center">
                    <h3>',$lang['download-other-19'],'</h3>
                  </div>
                  <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>',$lang['download-other-20'],'</strong></p>
                  </div>
                  <ul class="list-group list-group-flush text-center">
      							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-21'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-22'],'</li>
      						</ul>
      						<div class="panel-footer">
      							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/arm/rpi">',$lang['download-other-23'],'</a>
      						</div>
      					</div>
              </div>

              <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                  <div class="panel-heading arrow_box text-center">
                    <h3>',$lang['download-other-24'],'</h3>
                  </div>
                  <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>',$lang['download-other-20'],'</strong></p>
                  </div>
                  <ul class="list-group list-group-flush text-center">
      							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-25'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-26'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-27'],'</li>
      						</ul>
      						<div class="panel-footer">
      							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/arm/opi">',$lang['download-other-23'],'</a>
      						</div>
      					</div>
              </div>

              <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                  <div class="panel-heading arrow_box text-center">
                    <h3>',$lang['download-other-28'],'</h3>
                  </div>
                  <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>',$lang['download-other-20'],'</strong></p>
                  </div>
                  <ul class="list-group list-group-flush text-center">
      							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-29'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-28'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-30'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-31'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-32'],'</li>
      						</ul>
      						<div class="panel-footer">
      							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/arm/pine64">',$lang['download-other-23'],'</a>
      						</div>
      					</div>
              </div>
              
              </div>

              <div class="col-lg-4 col-md-4 text-center">
                <div class="panel download panel-blue">
                  <div class="panel-heading arrow_box text-center">
                    <h3>Orange Pi</h3>
                  </div>
                  <div class="panel-body text-center">
                    <p class="lead" style="font-size:40px"><strong>',$lang['download-other-20'],'</strong></p>
                  </div>
                  <ul class="list-group list-group-flush text-center">
      							<li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-25'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-26'],'</li>
                    <li class="list-group-item"><i class="icon-ok text-info"></i>',$lang['download-other-27'],'</li>
      						</ul>
      						<div class="panel-footer">
      							<a class="btn btn-lg btn-block btn-info" href="https://cdimage.parrotsec.org/parrot/iso/arm/opi">',$lang['download-other-23'],'</a>
      						</div>
      					</div>
              </div>
              
              
          </div>

          </div>
        </section>';
       
require('include/foot.php');

?>
