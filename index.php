<?php 
require('include/parrot.inc.php');

echo
'<header id="first">
        <div class="header-content">
            <div class="inner">
              <h3 class="text-center wow fadeInDown">Discover the <b>Parrot Universe</b> and get the most from our awesome Debian-based platform.</h2>
              <h5 class="text-center wow fadeInUp">Professional tools for security testing, software development and privacy defense, all in one place.</h3>
                <hr>
                <a href="',CONFIG_SITE_URL_STATIC_RESOURCES,'download.fx" class="btn btn-primary btn-xl">Download</a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll">Discover</a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary  wow fadeInDown">The Parrot System</h2>
                    <br>
                    <p class="text-faded  wow fadeInRight">
                      Parrot is a GNU/Linux distribution based on Debian Testing and designed with Security, Development and Privacy in mind.
                    </p>
                    <p class="text-faded  wow fadeInUp">
                      It includes a full portable laboratory for security and digital forensics experts, but it also includes all you need to develop your own software or protect your privacy while surfing the net.
                    </p>
                    <a href="#two" class="btn btn-primary btn-xl page-scroll">Continue</a>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Project Goals</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/security.png" width="60" height="60" />
                        <h3>Security</h3>
                        <p class="text-muted">A complete arsenal of <b>security tools</b> right in your pocket.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/privacy.png" width="60" height="60" />
                        <h3>Privacy</h3>
                        <p class="text-muted">A secure and sandboxed system ready to surf and communicate secretly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/develop.png" width="55" height="55" />
                        <h3>Development</h3>
                        <p class="text-muted">A full development stack with the best editors, languages and technologies out of the box.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">Features</h2>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>Secure</h3>
                    <div class="media-body media-middle">
                        <p>Always updated, frequently released and fully <b>sandboxed</b>! Everything is under your complete control.</p>
                    </div>
                    <div class="media-right">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/shield.png" width="100" />
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInLeft">
                    <h3>Free (as in freedom)</h3>
                    <div class="media-left">
                        <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/gpl.png" width="100" /></a>
                    </div>
                    <div class="media-body media-middle">
                        <p>Feel free to get the system, share with anyone, read the source code and change it as you want!<br /> this system is made to <b>respect your freedom</b>, and it ever will be.</p>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>Lightweight</h3>
                    <div class="media-body media-middle">
                        <p>We care about resources consumption, and the system has proven to be <b>extremely lightweight</b> and run surprisingly fast even on very old hardware or with very limited resources.</p>
                    </div>
                    <div class="media-right">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/lightweight.png" width="100" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/01.jpg">
                        <img src="./screenshots/01.jpg" class="img-responsive" alt="Desktop">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/02.jpg">
                        <img src="./screenshots/02.jpg" class="img-responsive" alt="Tools Menu">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/03.jpg">
                        <img src="./screenshots/03.jpg" class="img-responsive" alt="Bottom Menu">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/04.jpg">
                        <img src="./screenshots/04.jpg" class="img-responsive" alt="Tools in action">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/05.jpg">
                        <img src="./screenshots/05.jpg" class="img-responsive" alt="GUI tools">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/06.jpg">
                        <img src="./screenshots/06.jpg" class="img-responsive" alt="Secure browsing">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/07.jpg">
                        <img src="./screenshots/07.jpg" class="img-responsive" alt="Secret chats">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/08.jpg">
                        <img src="./screenshots/08.jpg" class="img-responsive" alt="Programming">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/09.jpg">
                        <img src="./screenshots/09.jpg" class="img-responsive" alt="Internet menu">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
';

require('include/foot.php');

?>
