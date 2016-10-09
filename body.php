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
            <header class="section__play-btn mdl-cell mdl-cell--5-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
              <iframe width="560" height="340" src="https://www.youtube-nocookie.com/embed/KZmXTnOlmME?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--7-col-desktop mdl-cell--6-col-tablet mdl-cell--6-col-phone">
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
              <h4>Dasaweb and Parrot Cloud</h4>
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
              <div class="features-heading-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">System Specs</h2>
                </div>
                <div class="mdl-card__supporting-text">
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
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="features-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background-image: url('img/links.jpg')">
                <h2 class="mdl-card__title-text">System Requirements</h2>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li>CPU: at least 1Ghz dual core cpu</li>
                  <li>ARCH: 32bit, 64bit and ARMhf</li>
                  <li>RAM: minimum 256Mb - 2048Mb suggested</li>
                  <li>GPU: No graphic acceleration required</li>
                  <li>STORAGE lite/core: 4GB / 8GB</li>
                  <li>STORAGE Full: 16GB</li>
                  <li>BOOT: Legacy bios or UEFI (testing)</li>
                </ul>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="https://doc.parrotsec.org/system-requirements" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Check our documentation
                </a>
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="features-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background-image: url('img/servers.jpg')">
                <h2 class="mdl-card__title-text">Cloud</h2>
              </div>
              <div class="mdl-card__supporting-text">
                <h5>Cloud Pentesting</h5>
                Parrot Cloud is a special edition of our OS specifically
                designed for servers, it consists on a lightweight parrot
                system without graphic interfaces, wireless and forensic
                tools and any other tools that can be considered useless
                in a remote-controlled virtual environment.
                <h5>Concept</h5>
                The idea of Parrot Cloud is to have a VPS or a dedicated
                server with a special operating system full of useful
                security tools, neither relying all the dirty work to
                your local machine nor relying the security of your
                confidential data to a 3rd party provider.
                It can also be used to store private files (preferably encrypted),
                scan targets in the background and other stuff that you
                don't need to do with your own machines, allowing you to
                go everywhere you want with just a Parrot live USB and
                to do great penetration tests without having confidential
                data physically with you.
                <h5>How to get it</h5>
                Download the Cloud ISO image from our download page and install it on your server.
                Or buy a VPS with Parrot Cloud pre-installed,<br>
                we offer several plans to suit your needs.<br>
                <a href="https://dasaweb.net/cart.php?gid=18" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Buy a VPS on our datacenters</a>

                <br>
                <h5>Parrot Cloud Script</h5>
                VPS providers usually do not allow the installation of custom uploaded operating systems on their machines so we made a custom script that converts a VPS with a minimal Debian installation into a full Parrot Cloud environment.
                <br>
                You can do this by downloading and launching (as root) the following script<br>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="https://raw.githubusercontent.com/ParrotSec/alternate-install/master/parrot-install.sh" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Get raw code</a>
                <a href="https://github.com/ParrotSec/alternate-install/blob/master/parrot-install.sh" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">View on GitHub</a><br>
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="features-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background-image: url('img/fingerprint.jpg')">
                <h2 class="mdl-card__title-text">Digital Forensics</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Parrot Security is developed in collaboration with
                <a href="http://www.caine-live.net/" target="_blank">Caine</a>,
                one of the most important GNU/Linux distributions in the Digital Forensics field.<br>
                <br>
                One of our purposes is to provide the best forensics enviromnent ever seen in a security distro,
                infact the entire system is hardened to not perform device automounts and to provide all the
                tools needed to do forensic acquisitions and evidence identifications in a safe comprehensive and portable virtual lab.<br>
                <br>
                <br>
                Parrot includes the most famous frameworks,<br>
                it has many reliable acquisition and imaging tools<br>
                and the top class analysis, evidence management and reporting softwares,<br>
                all of them on top of a reliable OS designed to not alter the proof.
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="features-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background-image: url('img/crypto.jpg')">
                <h2 class="mdl-card__title-text">Cryptography</h2>
              </div>
              <div class="mdl-card__supporting-text">
                Parrot includes many cryptographic softwares<br>
                which are extremely useful when it comes to<br>
                protect your confidential data and defend your privacy.<br>
                <br>
                Parrot includes several cryptographic front-ends to work
                both with symmetric and asymmetric encryption, infact it
                natively supports volumes encryption with LUKS, TrueCrypt, VeraCrypt
                and the hidden TrueCrypt/VeraCrypt volumes with nested algorythms support.<br>
                <br>
                The whole system can be installed inside an encrypted
                partition to protect your computer in case of theft.<br>
                <br>
                Another swiss army knife of your privacy is GPG, the GNU Privacy Guard,
                an extremely powerful PGP software that lets you create a private/public
                pair of keys to apply digital signatures to your messages and to
                allow other people to send you encrypted messages that only your
                private key can decrypt, in can also hande multiple identities and subkeys,
                and its power resides in its ring of trust as PGP users can sign each other's keys
                to make other people know if a digital identity is valid or not.<br>
                <br>
                Even our software repository is digitally signed by GPG, and the system automatically
                verifies if an update was altered or compromised and it refuses to upgrade
                or to install new software if our digital signature is not found or not valid.
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="features-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background-image: url('img/who.jpg')">
                <h2 class="mdl-card__title-text">Privacy</h2>
              </div>
              <div class="mdl-card__supporting-text">
                  Your privacy is the most valuable thing you have in your digital life
                  and the whole Parrot Team is exaggeratedly paranoid when it comes to users privacy,
                  infact our system doesn't contain tracking systems, and it is hardened in deep to
                  protect users from prying eyes.<br>
                  <br>
                  Parrot has developed and implemented several tricks and softwares to achieve this goal,
                  and AnonSurf is one of the most important examples, it is a software designed to start TOR and
                  hijack all the internet traffic made by the system through the TOR network, we have also modified
                  the system to make it use DNS servers different from those offered by your internet provider.<br>
                  <br>
                  Parrot also includes torbrowser, torchat and other anonymous services,
                  like I2P, a powerful alternative to TOR.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="https://doc.parrotsec.org/system-requirements" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  Check our documentation
                </a>
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="features-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand" style="background-image: url('img/devel.jpg')">
                <h2 class="mdl-card__title-text">Programming</h2>
              </div>
              <div class="mdl-card__supporting-text">
                  The main goal of an environment designed by hackers for hackers is the possibility
                  to change it, adapt it, transform it and use it as a development platform to create
                  new things, this is why Parrot comes out of the box with several tools for developers
                  such as compilers, disassemblers, IDEs, comfortable editors and powerful frameworks.<br>
                  <br>
                  Parrot includes QTCreator as its main C, C++ and Qt integrated development environment.
                  Another very useful tool is Geany, a lightweight and simple IDE which supports a huge amount
                  of programming languages, while we also include Atom, the opensource editor of the future
                  developed by GitHub, and many compilers and interpreters with their most important libraries
                  are pre-installed and ready to use.<br>
                  <br>
                  And of course many other editors, development softwares and libraries are available
                  through our software repository where we keep all the development tools always updated
                  to their most cutting edge but reliable version.
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
    <!--<a href="https://www.parrotsec.org/download.fx" target="_blank" id="download-parrot" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Download</a> -->
    <script src="/misc/material.min.js"></script>
