<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-3 column">
                <h4><?php echo $lang['foot-9']; ?></h4>
                <ul class="list-unstyled">
                  <li><a href="https://docs.parrotsec.org/terms-and-conditions"><?php echo $lang['foot-2']; ?></a></li>
                  <li><a href="https://docs.parrotsec.org/partners"><?php echo $lang['foot-3']; ?></a></li>
                  <li><a href="https://docs.parrotsec.org/developers"><?php echo $lang['foot-4']; ?></a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 column">
                <h4><?php echo $lang['foot-10']; ?></h4>
                <ul class="list-unstyled">
                    <li><a href="https://en.wikipedia.org/wiki/Parrot_Security_OS"><?php echo $lang['foot-5']; ?></a></li>
                    <li><a href="https://distrowatch.com/parrot"><?php echo $lang['foot-6']; ?></a></li>
                    <li><a href="http://linux.softpedia.com/get/System/Operating-Systems/Linux-Distributions/Parrot-security-OS-102936.shtml"><?php echo $lang['foot-7']; ?></a></li>
                    <li><a href="https://wiki.debian.org/Derivatives/Census/ParrotSecurity"><?php echo $lang['foot-8']; ?></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 text-right">
                <h4><?php echo $lang['foot-11']; ?></h4>
                <ul class="list-inline">
                  <li><a rel="nofollow" href="https://twitter.com/parrotsec" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                  <li><a rel="nofollow" href="https://www.facebook.com/parrotsec" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                  <li><a rel="nofollow" href="https://www.youtube.com/channel/UCj2dezzTc_Oy9eAEwBBodpw" title="Youtube"><i class="icon-lg ion-social-youtube-outline"></i></a></li>
                </ul>
            </div>
        </div>
        <br/>
        <div class="blue-triangular-division wow slideInDown"></div>
          <p class="text-center">© Lorenzo Faletra 2013-2019 Some Rights Reserved</span> - <a target="_blank" href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU GPL v3</a></p>
          <p class="text-center">Proudly Powered in Sicily with a huge amount of caffeine!</p>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
!function(window){
  var $q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      }
    , addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
          for (var i = 0; i < images.length; i++) {
            if (elementInViewport(images[i])) {
              loadImage(images[i], function () {
                images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

}(this);​
</script>
<script>
(function($) {
    "use strict";

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    $('#topNav').affix({
        offset: {
            top: 200
        }
    });
    
    new WOW().init();
    
    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - 60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });
    
    $('.navbar-collapse ul li a').click(function() {
        /* always close responsive nav after click */
        $('.navbar-toggle:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
    });

})(jQuery);
</script>
	</body>
</html>
