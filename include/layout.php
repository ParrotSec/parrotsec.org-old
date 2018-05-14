<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title><?php echo CONFIG_SITE_NAME; ?> - <?php echo CONFIG_SITE_SLOGAN; ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo CONFIG_SITE_DESCRIPTION; ?>">
  <meta name="author"   content="<?php echo CONFIG_SITE_AUTOR; ?>">
  <!-- Meta data to help Facebook generate the right advertisement -->
  <meta property="og:type"        content="article" />
  <meta property="og:title"       content="The best choice for security experts, developers and crypto-addicted people." />
  <meta property="og:site_name"   content="Parrot Security"/>
  <meta property="og:url"         content="https://www.parrotsec.org" />
  <meta property="og:image"       content="https://www.parrotsec.org/img/facebook-preview.png" />
  <meta property="og:description" content="Discover our awesome cyber security GNU/Linux environment. It includes a full portable laboratory for security and digital forensics experts, but it also includes all you need to develop your own softwares or protect your privacy with anonymity and crypto tools." />
  <meta property="fb:app_id"      content="">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/ionicons.min.css" />
  <link rel="stylesheet" href="css/features-table.css" />
  <link rel="stylesheet" href="css/panel-download.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="icon" href="img/logo.png" type="image/png" />
</head>

<body>
  <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                  <span class="sr-only"><?php echo $lang['nav-1']; ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand page-scroll" href="index.php">
                <b><img src="img/logo.png" width="20" height="20" /> <?php echo $lang['nav-2']; ?></b>
              </a>
          </div>
          <div class="navbar-collapse collapse" id="bs-navbar">
              <ul class="nav navbar-nav">
                  <li>
                      <a class="page-scroll" href="/download.php"><?php echo $lang['nav-3']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://blog.parrotsec.org"><?php echo $lang['nav-4']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org"><?php echo $lang['nav-5']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://dev.parrotsec.org" target="_blank"><?php echo $lang['nav-6']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/community"><?php echo $lang['nav-7']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/partners"><?php echo $lang['nav-8']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/developers"><?php echo $lang['nav-9']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/donate"><?php echo $lang['nav-10']; ?></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/FAQ"><?php echo $lang['nav-11']; ?></a>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="#" class="dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php echo $lang['nav-16']; ?><span class="caret"></span></a>
                      <ul class="dropdown-menu language-navbar" aria-labelledby="languageDropdown">
                          <?php
                            for($i=0; $i<count($languages); $i++) {
                                $link = 'http://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
                                if(!strpos($link, "?lang="))
                                    $final_link = $link.'?lang=' . $languages[$i];
                                else {
                                    $language = $_GET['lang'];
                                    $search = "?lang=$language";
                                    $replace = "?lang=$languages[$i]";
                                    $final_link = str_replace($search, $replace, $link);
                                }
                                echo "<li><a href='$final_link'><img src='img/lang/$languages[$i].ico' class='langauge-select'/><span style='color: #fff'>$languages[$i]</span></a></li>";
                            }
                          ?>
                      </ul>
                </li>
                <li><a class="page-scroll" href="https://dev.parrotsec.org/parrot/parrotsec.org" target="_blank" id="nav-15"></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a class="page-scroll" href="https://dev.parrotsec.org/parrot/parrotsec.org" target="_blank"><?php echo $lang['nav-12']; ?></a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>