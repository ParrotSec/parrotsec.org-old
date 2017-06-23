<!DOCTYPE html>
<html>
<head>
  <title>Parrot Project</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author"   content="Lorenzo Faletra">
  <!-- Meta data to help Facebook generate the right advertisement -->
  <meta property="og:type"        content="article" />
  <meta property="og:title"       content="The best choice for security experts, developers and crypto-addicted people." />
  <meta property="og:site_name"   content="Parrot Security"/>
  <meta property="og:url"         content="https://www.parrotsec.org" />
  <meta property="og:image"       content="https://www.parrotsec.org/img/facebook-preview.png" />
  <meta property="og:description" content="Discover our awesome cyber security GNU/Linux environment. It includes a full portable laboratory for security and digital forensics experts, but it also includes all you need to develop your own softwares or protect your privacy with anonymity and crypto tools." />
  <meta property="fb:app_id"      content="">

  <link href="css/parrot.min.css" type="text/css" rel="stylesheet" />
  <!--external libraries CSS -->
  <link href="css/vendor.min.css"   type="text/css" rel="stylesheet" />
  <!--custom + external libraries JS -->
  <!--<script src="js/main.min.js"      type="text/javascript"></script>-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="img/logo.png">
</head>
<body>
  <div class="finger-detection-open-menu visible-xs"></div>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 logo">
          <a href="#">
            <img src="img/logo.png" class="wow fadeIn smoothScroll" data-linkto='parrot-os' id="parrotLogo"/>
          </a>
          <i class="fa fa-bars fa-lg pull-left visible-xs" id="open_main_menu"></i>
        </div>
        <nav class="hidden-xs col-sm-10 text-right wow fadeIn" id="main-menu">
          <ul>
            <li>
              <a class='smoothScroll' id="home" data-linkto='parrot-os' href="https://www.parrotsec.org/">Home</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-features' href="https://www.parrotsec.org/features.fx">Features</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-download' href="https://www.parrotsec.org/download.fx">Download</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-news' href="https://blog.parrotsec.org">News</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-documentation' href="https://docs.parrotsec.org">Documentation</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-community' href="https://community.parrotsec.org">Community</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-dev' href="https://dev.parrotsec.org">Dev Portal</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-partners' href="https://docs.parrotsec.org/partners">Partners</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-donations' href="https://docs.parrotsec.org/donate">Donations</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-join' href="https://docs.parrotsec.org/community">Join</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-faq' href="https://docs.parrotsec.org/FAQ">F.A.Q.</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-faq' href="https://dev.parrotsec.org/parrot/parrotsec.org">Edit</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <aside>
    <!--grabs content from #main-menu on mobile devices or small screens only -->
  </aside>

  <a href="#" class='smoothScroll go-to-top' data-linkto='parrot-os'>
    <i class="fa-chevron-up fa"></i>
    Up
  </a>

  <section id="parrot-os">
    <article class="container-fluid">
      <h2 class="text-center wow fadeInUp">Discover the <b>Parrot Universe</b> and get the most from our awesome Debian-based platform.</h2>
      <h3 class="text-center wow fadeInUp">Professional tools for security testing, software development and privacy defense, all in one place.</h3>
      <div class="row os-main">
        <div class="col-sm-6 text-center wow fadeIn" data-wow-delay=".2s">
          <div id="security">
            <div class="distributions-icon">
              <img src="img/logo-black.png" class="wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Security</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s">A full environment providing many security tools and a complete environment for anonymity and software development.</h4>
            <a href="https://www.parrotsec.org/features.fx" class="moreinfo btn btn-default">More information</a>
            <a href="https://www.parrotsec.org/download.fx#security" class="moreinfo btn btn-primary">
              <span>Install Parrot Security</span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="parrot">
            <div class="distributions-icon">
              <img src="img/logo-white.png" class="distributions-icon wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Home</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s" lang="en">Get the most from the Parrot core without specific tools with a barebone and fully customizabile system.</h4>
            <a href="https://www.parrotsec.org/download.fx#lite" class="moreinfo btn btn-primary">
              <span>Install Parrot Lite</span>
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section id="parrot-os">
    <article class="container-fluid">
      <div class="row os-main">
        <div class="col-sm-6 text-center wow fadeIn" data-wow-delay=".2s">
          <div id="security">
            <div class="distributions-icon">
              <img src="img/air.png" class="wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Air</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s">A special Parrot derivative focused on Wireless testing!</h4>
            <a href="https://www.parrotsec.org/download.fx#air" class="moreinfo btn btn-primary">
              <span>Install Parrot Air</span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="parrot">
            <div class="distributions-icon">
              <img src="img/workstation.png" class="distributions-icon wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Studio</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s" lang="en">Get the most complete and lightweight Debian-based GNU/Linux distribution for your workstation.</h4>
            <a href="https://www.parrotsec.org/download.fx#studio" class="moreinfo btn btn-primary">
              <span>Install Parrot Studio</span>
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section id="parrot-os">
    <article class="container-fluid">
      <div class="row os-main">
        <div class="col-sm-6 text-center wow fadeIn" data-wow-delay=".2s">
          <div id="security">
            <div class="distributions-icon">
              <img src="img/servers.png" class="wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Cloud</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s">Mix the tools of Parrot with the power of the cloud and make your pentests easier with one of our cloud pentest boxes.</h4>
            <a href="https://www.parrotsec.org/features.fx#cloud" class="moreinfo btn btn-default">More information</button>
            <a href="https://core.dasaweb.net/cart.php?gid=18" class="moreinfo btn btn-primary">
              <span>Get Parrot Cloud</span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="parrot">
            <div class="distributions-icon">
              <img src="img/iot.png" class="distributions-icon wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Iot</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s" lang="en">Want to run Parrot on a Raspberry Pi, a Pine64 or another embedded device? Discover what happens when Parrot meets your favourite SoC boards.</h4>
            <a href="https://www.parrotsec.org/download.fx#iot" class="moreinfo btn btn-primary">
              <span>Get Parrot IoT</span>
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>


  <section id="parrot-conferences">
    <div class="section-background"></div>
    <article>
      <h2 class="strong-title wow slideInDown" lang="en">Meet us in a Parrot event.</h2>
      <a href="https://blog.parrotsec.org/category/events/" target="_blank" class="btn btn-default wow zoomIn"><span lang="en">View upcoming events</span></a>
    </article>
  </section>
  <footer>
    <div class="container-fluid">
      <div class="row footer-links-area">
        <div class="col-sm-5">
          <div class="row">
            <div class="col-xs-4">
              <ul>
                <li>
                  <a href="https://docs.parrotsec.org/what-is-parrot">
                    <span>About</span>
                  </a>
                </li>
                <li>
                  <a href="https://docs.parrotsec.org/terms-and-conditions">
                    <span>Terms</span>
                  </a>
                </li>
                <li>
                  <a href="https://docs.parrotsec.org/partners">
                    <span>Partners</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xs-4">
              <ul>
                <li>
                  <a href="https://en.wikipedia.org/wiki/Parrot_Security_OS">
                    <span>Wikipedia</span>
                  </a>
                </li>
                <li>
                  <a href="https://distrowatch.com/table.php?distribution=parrotsecurity">
                    <span>Distrowatch</span>
                  </a>
                </li>
                <li>
                  <a href="http://linux.softpedia.com/get/System/Operating-Systems/Linux-Distributions/Parrot-security-OS-102936.shtml">
                    <span>Softpedia</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xs-4">
              <ul>
                <li>
                  <a href="http://chat.frozenbox.org:3989/?nick=parrot_....&channels=parrot&prompt=1">
                    <span>IRC</span>
                  </a>
                </li>
                <li>
                  <a href="https://telegram.me/joinchat/AerigkC4pztMc7Hus7vRZg">
                    <span>Telegram</span>
                  </a>
                </li>
                <li>
                  <a href="http://lists.parrotsec.org/listinfo">
                    <span>Mailing lists</span>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/groups/parrotsec/">
                    <span>Facebook Group</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-sm-offset-2 social-networks">
          <a href="https://twitter.com/parrotsec" target="_blank" class="wow fadeIn">
            <i class="fa fa-twitter-square"></i>
          </a>
          <a href="https://plus.google.com/111027400980207179581" target="_blank" class="wow fadeIn" data-wow-delay=".3s">
            <i class="fa fa-google-plus-square"></i>
          </a>
          <a href="https://www.facebook.com/parrotsec" target="_blank" class="wow fadeIn" data-wow-delay=".6s">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCj2dezzTc_Oy9eAEwBBodpw" target="_blank" class="wow fadeIn" data-wow-delay=".9s">
            <i class="fa fa-youtube-square"></i>
          </a>
        </div>
      </div>
      <div class="blue-triangular-division wow slideInDown"></div>
      <p class="text-center">© Lorenzo Faletra Some Rights Reserved.</span> - <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU/GPL v3</a></p>
      <p class="text-center">Proudly Powered in Sicily!</p>
      </p>
    </div>
  </footer>
  <!-- End Piwik Code -->
  <div class="hidden-content">
     <!-- FIXME: text is in ./assets/js/parrot-theme.js -->
    <span lang="en">Back to main page</span>
  </div>
</body>
</html>
