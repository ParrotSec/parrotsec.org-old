<?php
$version = "3.6";
?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
        include("nav.php");
    ?>
        <div class="mdl-layout__tab-panel is-active" id="download">
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone">Download Parrot <?php echo $version; ?> Full Edition</h4>
                        <a href="https://github.com/ParrotSec/changelog/tree/master" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">Release Changelog</a>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/frozenbox.png') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>A Full and complete environment providing all the tools in our repository and a full development environment out of the box.</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>32bit</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_i386.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_i386.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_i386.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>64bit</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_amd64.iso" target="_blank" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Download Parrot <?php echo $version; ?> Lite Edition</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/devel.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Lightweight and highly portable OS, it can be considered as a standard and general purpose distribution which is not security-oriented. It is a perfect base to create your own pentesting environment or to use Parrot as a standard OS<br>(tools are NOT pre-installed)</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>32bit</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_i386.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_i386.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_i386.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>64bit</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Download Parrot <?php echo $version; ?> AIR</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/devel.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Parrot edition specifically designed for wireless testing, it is a subset of parrot full containing only the tools useful for testing wireless communication devices.</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                    <h4>64bit</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-air-<?php echo $version; ?>_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-air-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-air-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" id="cloud">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Parrot Cloud Edition</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/servers.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Parrot Server Edition, designed to be quickly deployed right where you need and remotely controlled to perform cloud pentests.</p>
                            <a href="https://core.dasaweb.net/cart.php?gid=18" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Buy a VPS</a><br>
                            <a href="#netboot" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Get it with Parrot Netboot Installer</a><br>
                            <a href="https://www.parrotsec.org/features.fx#cloud" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Know more</a><br><br>

                        </div>
                    </div>
                </div>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Embedded Devices and IoT</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/boxes.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>Raspberry Pi</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/arm/parrotsec-3.4-armhf-rpi-1/index.html" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>Generic Rootfs</h4>
                                    <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/arm/parrotsec-3.4-armhf-1/" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>

                                </div>
                                <div class="mdl-cell--6-col">
                                    <a href="https://archive.parrotsec.org/parrot/iso/arm/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col section--center">
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>ISO USB Image Writer</h4>
                        <p>the Parrot ISO files are distributed as ISOHYBRID (iso9660) images, so you need a special software (like DD) to put them in a USB pendrive. Rosa Image Writer is a powerful and multiplatform tool that works perfectly with parrot</p>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-linux64.bin" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Linux 64bit</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-linux32.bin" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Linux 32bit</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-win.exe" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Windows</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-osx.dmg" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>OSX</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-all.zip" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>All</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-source.zip" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Source Code</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/misc/image-writer/" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col">More info</a>
                    </div>
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>Archives</h4>
                        <a href="https://archive.parrotsec.org/parrot" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Central Repository</a><br><br>
                        <a href="http://archive2.parrotsec.org" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Other hosted projects</a><br><br>
                        <a href="https://www.sourceforge.net/projects/parrotsecurity/files" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Previous releases</a><br><br>

                    </div>
                    <div id="netboot" class="mdl-card__supporting-text" align="center">
                        <h4>Netboot Images</h4>
                        <p>netboot images are very small files that contain only the parrot installer, it requires an internet connection to install</p>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/dists/stable/main/installer-i386/current/images/netboot/mini.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-margin">Netinstall 32bit</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/dists/stable/main/installer-amd64/current/images/netboot/mini.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-margin">Netinstall 64bit</a><br><br>
                    </div>
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>Parrot <?php echo $version; ?> Studio (64bit)</h4>
                        <p>Parrot Studio is a derivative project for multimedia content creation applications for audio, graphics, video, photography and programming workflows.</p>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-studio-<?php echo $version; ?>_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Download</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-studio-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                        <a href="https://mirrordirector.archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-studio-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                        <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                    </div>
                </div>
            </section>
<?php
    include("footer.php");
?>
</div>
<script src="/misc/material.min.js"></script>
