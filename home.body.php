<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
        include("nav.php");
    ?>
    <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="home">
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <header class="section__play-btn mdl-cell mdl-cell--5-col-desktop mdl-cell--3-col-tablet mdl-cell--3-col-phone mdl-color--teal-100 mdl-color-text--white">
                    <iframe width="560" height="340" src="https://www.youtube-nocookie.com/embed/KZmXTnOlmME?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </header>
                <div class="mdl-card mdl-cell mdl-cell--7-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card__supporting-text">
                        <h3>Parrot Security</h3>
                        Security GNU/Linux distribution designed with cloud pentesting and IoT security in mind.<br><br>
                        It includes a full portable laboratory for security and digital forensics experts, but it also includes
                        all you need to develop your own softwares or protect your privacy with anonymity and crypto tools.
                    </div>
                    <div class="mdl-card__actions">
                        <a href="https://docs.parrotsec.org/FAQ" class="mdl-button">Frequently Asked Questions</a>
                    </div>
                </div>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Details</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                            <div class="section__circle-container__circle mdl-color--primary" style="background:url('img/shield.png') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <h4>Security</h4>
                            Parrot Security includes a full arsenal of security oriented tools to perform penetration tests, security audits and more.
                            With a Parrot usb drive in your pocket you will always be sure to have all you need with you.<br><br>
                        </div>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                            <div class="section__circle-container__circle mdl-color--blue-grey-100" style="background:url('img/gpg.png') center / 50% no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <h4>Privacy</h4>
                            Parrot includes by default TOR, I2P, anonsurf, gpg, tccf, zulucrypt, veracrypt, truecrypt, luks
                            and many other tecnologies designed to defend your privacy and your identity.<br><br>
                        </div>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                            <div class="section__circle-container__circle mdl-color--primary"><h2 align="center"><font color="#fff">{}</font></h2></div>
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
                        <a href="https://docs.parrotsec.org/community" class="mdl-button">Join us</a>
                    </div>
                </div>
            </section>
            <section class="section--footer mdl-color--white mdl-grid">
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                    <div class="section__circle-container__circle mdl-color--amber section__circle--big" style="background:url('img/dasa.png') center / cover no-repeat"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <a href="https://dasaweb.net/cart.php?gid=18" target="_blank" style="color:#666">
                        <h4>Dasaweb and Parrot Cloud</h4>
                        Dasaweb a great european provider, now sells VPS with parrot cloud pre-installed.<br>
                        The service is maintained in collaboration with the Parrot Core Team and the service seems to have an exponential polularity.
                    </a>
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                    <div class="section__circle-container__circle mdl-color--teal-100 section__circle--big" style="background:url('img/iris.png') center / cover no-repeat"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <a href="https://irisproject.org" target="_blank" style="color:#666">
                        <h4>Iris Project</h4>
                        Some members of the Parrot Core Team are working on a derivative project with the aim to ship a Debian based distribution with only free software, the project is made as an alternative to the old GNewSense distribution which seems to be no longer maintained.
                    </a>
                </div>
            </section>
<?php
    include("footer.php");
?>
    </main>
</div>
<!--<a href="https://www.parrotsec.org/download.fx" target="_blank" id="download-parrot" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Download</a> -->
<script src="/misc/material.min.js"></script>
