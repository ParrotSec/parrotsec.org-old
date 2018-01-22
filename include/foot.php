<?php

echo
  '<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-3 column">
                <h4>',$lang['foot-9'],'</h4>
                <ul class="list-unstyled">
                  <li><a href="https://docs.parrotsec.org/about">',$lang['foot-1'],'</a></li>
                  <li><a href="https://docs.parrotsec.org/terms-and-conditions">',$lang['foot-2'],'</a></li>
                  <li><a href="https://docs.parrotsec.org/partners">',$lang['foot-3'],'</a></li>
                  <li><a href="https://docs.parrotsec.org/developers">',$lang['foot-4'],'</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 column">
                <h4>',$lang['foot-10'],'</h4>
                <ul class="list-unstyled">
                    <li><a href="https://en.wikipedia.org/wiki/Parrot_Security_OS">',$lang['foot-5'],'</a></li>
                    <li><a href="https://distrowatch.com/table.php?distribution=parrotsecurity">',$lang['foot-6'],'</a></li>
                    <li><a href="http://linux.softpedia.com/get/System/Operating-Systems/Linux-Distributions/Parrot-security-OS-102936.shtml">',$lang['foot-7'],'</a></li>
                    <li><a href="https://wiki.debian.org/Derivatives/Census/ParrotSecurity">',$lang['foot-8'],'</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 text-right">
                <h4>',$lang['foot-11'],'</h4>
                <ul class="list-inline">
                  <li><a rel="nofollow" href="https://twitter.com/parrotsec" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                  <li><a rel="nofollow" href="https://www.facebook.com/parrotsec" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                  <li><a rel="nofollow" href="https://www.youtube.com/channel/UCj2dezzTc_Oy9eAEwBBodpw" title="Youtube"><i class="icon-lg ion-social-youtube-outline"></i></a></li>
                </ul>
            </div>
        </div>
        <br/>
        <div class="blue-triangular-division wow slideInDown"></div>
          <p class="text-center">© Lorenzo Faletra 2013-2018 Some Rights Reserved</span> - <a target="_blank" href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU/GPL v3</a></p>
          <p class="text-center">Proudly Powered in Sicily!</p>
        </div>
    </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="" id="galleryImage" class="img-responsive" />
        <p>
            <br/>
            <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        </p>
      </div>
    </div>
    </div>
</div>
<!--scripts loaded here -->
<script src="',CONFIG_SITE_URL_STATIC_RESOURCES,'js/jquery.min.js"></script>
<script src="',CONFIG_SITE_URL_STATIC_RESOURCES,'js/bootstrap.min.js"></script>
<script src="',CONFIG_SITE_URL_STATIC_RESOURCES,'js/jquery.easing.min.js"></script>
<script src="',CONFIG_SITE_URL_STATIC_RESOURCES,'js/wow.js"></script>
<script src="',CONFIG_SITE_URL_STATIC_RESOURCES,'js/scripts.js"></script>
	</body>
</html>';
?>
