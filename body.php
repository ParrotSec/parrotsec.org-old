    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>Parrot Project</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#home" class="mdl-layout__tab is-active">Home</a>
          <a href="https://www.parrotsec.org/download.fx" class="mdl-layout__tab">Download</a>
          <a href="#features" class="mdl-layout__tab">Features</a>
          <a href="https://blog.parrotsec.org/" class="mdl-layout__tab">Blog</a>
          <a href="https://doc.parrotsec.org/" class="mdl-layout__tab">Documentation</a>
          <a href="https://doc.parrotsec.org/devel" class="mdl-layout__tab">Development</a>
          <a href="https://doc.parrotsec.org/FAQ" class="mdl-layout__tab">FAQ</a>
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
            <i class="material-icons" role="presentation">add</i>
            <span class="visuallyhidden">Add</span>
          </button>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="home">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--5-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
              <iframe width="560" height="340" src="https://www.youtube-nocookie.com/embed/KZmXTnOlmME?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--7-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h3>Parrot Security</h3>
                Security GNU/Linux distribution designed with cloud pentesting and IoT security in mind.<br><br>
                It includes a full portable laboratory for security and digital forensics experts, but it also includes
                all you need to develop your own softwares or protect your privacy with anonymity and crypto tools.
              </div>
              <div class="mdl-card__actions">
                <a href="https://doc.parrotsec.org/FAQ" class="mdl-button">Frequently Asked Questions</a>
              </div>
            </div>
            <?php /*<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
              <li class="mdl-menu__item">Lorem</li>
              <li class="mdl-menu__item" disabled>Ipsum</li>
              <li class="mdl-menu__item">Dolor</li>
            </ul>*/ ?>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <h4 class="mdl-cell mdl-cell--12-col">Details</h4>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h4>Security</h4>
                    Parrot Security includes a full arsenal of security oriented tools to perform penetration tests, security audits and more.
                    With a Parrot usb drive in your pocket you will always be sure to have all you need with you.<br><br>
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h4>Privacy</h4>
                    Parrot includes by default TOR, I2P, anonsurf, gpg, tccf, zulucrypt, veracrypt, truecrypt, luks
                    and many other tecnologies designed to defend your privacy and your identity.<br><br>
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h4>Development</h4>
                    If you need a comfortable environment with updated frameworks and useful libraries already installed, Parrot will amaze you
                    as it includes a full development-oriented environment with some powerful editors and IDEs pre-installed and many other tools
                    installable from our repository.<br><br>
                </div>
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Community</h4>
                  <b>we exist because of our awesome community</b><br>
                  Feel free to join us, and actively follow our development, know awesome people all around the world and get help directly from the developers.
              </div>
              <div class="mdl-card__actions">
                <a href="https://doc.parrotsec.org/community" class="mdl-button">Join us</a>
              </div>
            </div>
          </section>
          <section class="section--footer mdl-color--white mdl-grid">
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <a href="https://dasaweb.net/cart.php?gid=18" target="_blank" style="color:#666">
              <h4>Dasaweb to sell Parrot Cloud</h4>
                Dasaweb a great european provider, now sells VPS with parrot cloud pre-installed.<br>
                The service is maintained in collaboration with the Parrot Core Team and the service seems to have an exponential polularity.
                </a>
            </div>
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <a href="https://irisproject.org" target="_blank" style="color:#666">
              <h4>Iris Project</h4>
                Some members of the Parrot Core Team are working on a derivative project with the aim to ship a Debian based distribution with only free software, the project is made as an alternative to the old GNewSense distribution which seems to be no longer maintained.
              </a>
            </div>
          </section>
        </div>
        <div class="mdl-layout__tab-panel" id="features">
          <section class="section--center mdl-grid mdl-grid--no-spacing">

              <!-- Wide card with share menu button -->
              <style>
                .demo-card-wide.mdl-card {
                  width: 768px;
                }
                .demo-card-wide > .mdl-card__title {
                  color: #aaa;
                  height: 176px;
                  background: url('img/slides.png') center / cover;
                }
                .demo-card-wide > .mdl-card__menu {
                  color: #aaa;
                }
              </style>

              <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">Features</h2>
                </div>
                <div class="mdl-card__supporting-text">
                  <h4>System Specs</h4>
                  <ul>
                    <li>Debian GNU/Linux 9 (stretch)</li>
                    <li>Custom hardened Linux 4.7 kernel</li>
                    <li>Rolling release updates</li>
                    <li>Powerful worldwide mirror servers</li>
                    <li>High hardware compatibility</li>
                    <li>Community-driven development</li>
                    <li>free(libre) and open source project</li>
                  </ul>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a href="https://www.parrotsec.org/download.fx" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    Get Started
                  </a>
                </div>
              </div>

          </section>
        </div>
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Features</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Updates</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Details</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Spec</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Technology</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">How it works</a></li>
                <li><a href="#">Patterns</a></li>
                <li><a href="#">Usage</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contracts</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              More Information
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <a href="https://www.parrotsec.org/download.fx" target="_blank" id="download-parrot" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Download</a>
    <script src="/misc/material.min.js"></script>
