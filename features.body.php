<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
    include("nav.php");
    ?>
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
                        <a href="https://docs.parrotsec.org/system-requirements" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Check our documentation
                        </a>
                    </div>
                </div>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing" >
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
                        <a href="https://docs.parrotsec.org/system-requirements" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
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
            <div class="mdl-layout__content">
                <div class="mdl-grid portfolio-max-width">
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="team-pictures" src="img/palinuro.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <b>Lorenzo "Palinuro" Faletra</b>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Project Team Leader<br>
                            Core Developer<br>
                            Builds Coordinator<br>
                            Repository Maintainer<br>
                            Graphic Designer<br>
                            Webmaster<br>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" target="_blank" href="https://doc.parrotsec.org/user/palinuro">See Profile and keys</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="team-pictures" src="img/sheireen.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <b>Lisetta "Sheireen" Ferrero</b>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Core Developer<br>
                            Metapackages Designer<br>
                            Quality Assurance<br>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" target="_blank" href="https://doc.parrotsec.org/user/sheireen">See Profile and keys</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="team-pictures" src="img/mibofra.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <b>Francesco "Mibofra" Bonanno</b>
                        </div>
                        <div class="mdl-card__supporting-text">
                            IoT Development Coordinator<br>
                            Core Developer<br>
                            ARM Developer<br>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" target="_blank" href="https://doc.parrotsec.org/user/mibofra">See Profile and keys</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="team-pictures" src="img/quietwalker.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <b>Emanuel "Quietwalker" Di Vita</b>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Free(libre) Software Consultant<br>
                            IrisProject Team Leader<br>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" target="_blank" href="https://doc.parrotsec.org/user/quietwalker">See Profile and keys</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="team-pictures" src="img/tissy.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <b>Irene "Tissy" Pirrotta</b>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Parrot Maintainer<br>
                            Beta Tester<br>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" target="_blank" href="https://doc.parrotsec.org/user/tissy">See Profile and keys</a>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                        <div class="mdl-card__media">
                            <img class="team-pictures" src="img/boxes.jpg" border="0" alt="">
                        </div>
                        <div class="mdl-card__title">
                            <b>Other Contributors</b>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Agostino DI Lillo<br>
                            Andrea Amani<br>
                            Davide "Dakso" Crivello<br>
                            Darix Deros<br>
                            Nanni Bassetti<br>
                            Nathaniel Jones<br>
                            Giancarlo Niccolai<br>
                            Jeff Szydel<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
