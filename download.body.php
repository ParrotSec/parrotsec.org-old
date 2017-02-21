<?php
function mirrorSelector($file, $id)
{
    print("
      <p style=\"color:#0a0a0a\">Select a mirror server</p>
      <select style='width:300px' id=\"$id\">
       <option value=\"javascript:window.alert('select a server from the list')\">Select a mirror</option>
       <optgroup label=\"Others\">
        <option value=\"/get/auto/$file\">Auto Selector (Nearest available server)</option>
        <option value=\"/get/sourceforge/$file\">Worldwide - Mirrors - SourceForge</option>
        <option value=\"/get/cloudflare/$file\">Worldwide - CDN - Cloudflare</option>
       </optgroup>
       <optgroup label=\"USA\">
        <option value=\"/get/mit/$file\"><b>>USA - Massachussets - SIPB MIT (1 Gbps)</b></option>
        <option value=\"/get/jmu/$file\"><b>>USA - Virginia - JMU (1 Gbps)</b></option>
        <option value=\"/get/clarkson/$file\"><b>>USA - New York - Clarkson (1 Gbps)</b></option>
        <option value=\"/get/berkeley/$file\"><b>>USA - California - Berkeley (1 Gbps)</b></option>
        <option disabled></option>
        <option value=\"/get/superb-dca2/$file\">USA - Virginia - Superb-dca2-sf (?)</option>
        <option value=\"/get/superb-dca3/$file\">USA - Virginia - Superb-dca3-sf (?)</option>
        <option value=\"/get/colocrossing/$file\">USA - New York - Colocrossing-sf (?)</option>
        <option value=\"/get/pilotfiber/$file\">USA - New York - PilotFiber-sf (?)</option>
        <option value=\"/get/superb-sea2/$file\">USA - Washington - Superb-sea2-sf (?)</option>
       </optgroup>
       <optgroup label=\"Europe\">
       <option value=\"/get/rwth-aachen/$file\"><b>>Europe - Germany - RWTH-Aachen (20 Gbps)</b></option>
        <option value=\"/get/garr/$file\"><b>>Europe - Italy - GARR (10 Gbps)</b></option>
        <option value=\"/get/esslingen/$file\"><b>>Europe - Germany - Esslingen (10 Gbps)</b></option>
        <option value=\"/get/nluug/$file\"><b>>Europe - Netherlands - Nluug (10 Gbps)</b></option>
        <option value=\"/get/babylon-nl/$file\"><b>>Europe - Netherlands - Babylon.network (10 Gbps)</b></option>
        <option value=\"/get/umu/$file\"><b>>Europe - Sweden - UMU (10 Gbps)</b></option>
        <option value=\"/get/heanet/$file\"><b>>Europe - Ireland - Heanet (10 Gbps)</b></option>
        <option value=\"/get/onet/$file\"><b>>Europe - Poland - Onet (10 Gbps)</b></option>
        <option value=\"/get/babylon-fr/$file\"><b>>Europe - France - Babylon.network (10 Gbps)</b></option>
        <option value=\"/get/warwick/$file\"><b>>Europe - United Kingdom - Warwick (1 Gbps)</b></option>
        <option value=\"/get/uoc/$file\"><b>>Europe - Greece - UoC (1 Gbps)</b></option>
        <option value=\"/get/frozenbox/$file\"><b>>Europe - France - FrozenBox (250 Mbps)</b></option>
        <option value=\"/get/dasa1-euro/$file\"><b>>Europe - France - Dasaweb-eu1 (250 Mbps)</b></option>
        <option disabled></option>
        <option value=\"/get/dfn/$file\">Europe - Germany - DFN-sf (10 Gbps)</option>
        <option value=\"/get/kent/$file\">Europe - United Kingdom - Kent-sf (10 Gbps)</option>
        <option value=\"/get/vorboss/$file\">Europe - United Kingdom - Vorboss-sf (10 Gbps)</option>
        <option value=\"/get/netcologne/$file\">Europe - Germany - Netcologne-sf (2 Gbps)</option>
        <option value=\"/get/freefr/$file\">Europe - France - Freefr-sf (2 Gbps)</option>
        <option value=\"/get/netix/$file\">Europe - Bulgaria - NetIX-sf (?)</option>
        <option value=\"/get/ignum/$file\">Europe - Czec Republic - Ignum-sf (1 Gbps)</option>
        <option value=\"/get/netassist/$file\">Europe - Ukraine - Netassist-sf (?)</option>
       </optgroup>
       <optgroup label=\"South America\">
       <option value=\"/get/cedia/$file\"><b>>South America - Ecuador - CEDIA (100 Mbps)</b></option>
       <option value=\"/get/uta/$file\"><b>>South America - Ecuador - UTA (100 Mbps)</b></option>
       <option value=\"/get/ueb/$file\"><b>>South America - Ecuador - UEB (100 Mbps)</b></option>
       <option disabled></option>
       <option value=\"/get/ufpr/$file\">South America - Brazil - UFPR/c3sl-sf (10 Gbps)</option>
       <option value=\"/get/nbtelecom/$file\">South America - Brazil - NBTelecom-sf (?)</option>
       </optgroup>
       <optgroup label=\"Asia\">
        <option value=\"/get/nchc/$file\"><b>>Asia - Taiwan - NCHC (10 Gbps)</b></option>
        <option value=\"/get/0x/$file\"><b>>Asia - Singapore - 0x (10 Gbps)</b></option>
        <option value=\"/get/tuna/$file\">>Asia - China - TUNA Tsinghua (2 Gbps)</option>
        <option value=\"/get/ustc/$file\"><b>>Asia - China - USTC (1 Gbps)</b></option>
        <option value=\"/get/yandex/$file\"><b>>Asia - Russia - Yandex (1 Gbps)</b></option>
        <option value=\"/get/amberit/$file\"><b>>Asia - Bangladesh - Amberit (1 Gbps)</b></option>
        <option disabled></option>
        <option value=\"/get/jaist/$file\">Asia - Japan - Jaist-sf (4 Gbps)</option>
        <option value=\"/get/citylan/$file\">Asia - Russia - CityLan-sf (?)</option>
       </optgroup>
       <optgroup label=\"Oceania\">
        <option value=\"/get/lagoon/$file\"><b>>Oceania - New Caledonia - Lagoon (1 Gbps)</b></option>
        <option disabled></option>
		<option value=\"/get/internode/$file\">Oceania - Australia - Internode-sf (1 Gbps)</option>
       </optgroup>
       <optgroup label=\"Middle East\">
        <option value=\"/get/asis/$file\"><b>>Middle East - Iran - ASIS (1 Gbps)</b></option>
        <option disabled></option>
        <option value=\"/get/kaz/$file\">Middle East - Kazakistan - Kaz-sf (?)</option>
       </optgroup>
       <optgroup label=\"Africa\">
        <option value=\"/get/tenet/$file\">Africa - South Africa - Tenet-sf (20 Gbps)</option>
        <option value=\"/get/liquidtelecom/$file\">Africa - Kenya - LiquidTelecom-sf (1 Gbps)</option>
       </optgroup>
      </select>
      ");
    return 0;
}
?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
        include("nav.php");
    ?>
        <div class="mdl-layout__tab-panel is-active" id="download">
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone">Download Parrot 3.4.1 Full Edition</h4>
                        <a href="https://github.com/ParrotSec/changelog/tree/master" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">Release Changelog</a>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/frozenbox.png') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>A Full and complete environment providing all the tools in our repository and a full development environment out of the box.</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>32bit</h4>
                                    <form target="_blank" onSubmit="this.action = document.getElementById('full32').value">
                                        <?php
                                        mirrorSelector("3.4.1/Parrot-full-3.4.1_i386.iso", "full32");
                                        ?>
                                        <br>
                                        <br>
                                        <input type="text" style="display:none" name="get" value="1" readonly>
                                        <input type="submit" onclick="_paq.push(['trackGoal', 3]);" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;" value="download" /><br><br>
                                        <a style="color:#060606;background:#00a0a0;" href="/torrent/3.4.1/Parrot-full-3.4.1_i386.iso.torrent" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">torrent</a><br><br>
                                        <a href="http://archive.parrotsec.org/parrot/iso/3.4.1/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a><br><br>
                                    </form>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>64bit</h4>
                                    <form target="_blank" onsubmit="this.action = document.getElementById('full64').value">
                                        <?php
                                        mirrorSelector("3.4.1/Parrot-full-3.4.1_amd64.iso", "full64");
                                        ?>
                                        <br>
                                        <br>
                                        <input type="text" style="display:none" name="get" value="1" readonly>
                                        <input  onclick="_paq.push(['trackGoal', 3]);" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color:#060606;background:#00a000;" value="download" /><br><br>
                                        <a  style="color: #060606;background:#00a0a0;" href="/torrent/3.4.1/Parrot-full-3.4.1_amd64.iso.torrent" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">torrent</a><br><br>
                                        <a href="http://archive.parrotsec.org/parrot/iso/3.4.1/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a><br><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Download Parrot 3.4.1 Lite Edition</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/devel.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Lightweight and highly portable OS, it can be considered as a standard and general purpose distribution which is not security-oriented. It is a perfect base to create your own pentesting environment or to use Parrot as a standard OS<br>(tools are NOT pre-installed)</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>32bit</h4>
                                    <form target="_blank" onSubmit="this.action = document.getElementById('lite32').value">
                                        <?php
                                        mirrorSelector("3.4.1/Parrot-lite-3.4.1_i386.iso", "lite32");
                                        ?>
                                        <br>
                                        <br>
                                        <input type="text" style="display:none" name="get" value="1" readonly>
                                        <input type="submit" onclick="_paq.push(['trackGoal', 7]);" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;" value="download" /><br><br>
                                        <a style="color:#060606;background:#00a0a0;" href="/torrent/3.4.1/Parrot-lite-3.4.1_i386.iso.torrent" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">torrent</a><br><br>
                                        <a href="http://archive.parrotsec.org/parrot/iso/3.4.1/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a><br><br>
                                    </form>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>64bit</h4>
                                    <form target="_blank" onsubmit="this.action = document.getElementById('lite64').value">
                                        <?php
                                        mirrorSelector("3.4.1/Parrot-lite-3.4.1_amd64.iso", "lite64");
                                        ?>
                                        <br>
                                        <br>
                                        <input type="text" style="display:none" name="get" value="1" readonly>
                                        <input  onclick="_paq.push(['trackGoal', 7]);" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color:#060606;background:#00a000;" value="download" /><br><br>
                                        <a  style="color: #060606;background:#00a0a0;" href="/torrent/3.4.1/Parrot-lite-3.4.1_amd64.iso.torrent" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">torrent</a><br><br>
                                        <a href="http://archive.parrotsec.org/parrot/iso/3.4.1/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a><br><br>
                                    </form>
                                </div>
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
                            <a href="https://dasaweb.net/cart.php?gid=18" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Buy a VPS</a><br>
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
                                    <form target="_blank" onSubmit="this.action = document.getElementById('rpi').value">
                                        <?php
                                        mirrorSelector("arm/parrotsec-3.4-armhf-rpi-1/index.html", "rpi");
                                        ?>
                                        <br>
                                        <br>
                                        <input type="text" style="display:none" name="get" value="1" readonly>
                                        <input type="submit" onclick="_paq.push(['trackGoal', 10]);" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;" value="download" /><br><br>
                                    </form>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>Generic Rootfs</h4>
                                    <form target="_blank" onsubmit="this.action = document.getElementById('arm').value">
                                        <?php
                                        mirrorSelector("arm/parrotsec-3.4-armhf-1/", "arm");
                                        ?>
                                        <br>
                                        <br>
                                        <input type="text" style="display:none" name="get" value="1" readonly>
                                        <input  onclick="_paq.push(['trackGoal', 10]);" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color:#060606;background:#00a000;" value="download" /><br><br>
                                    </form>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <a href="http://archive.parrotsec.org/parrot/iso/arm/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a>
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
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-linux64.bin" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col" download>Linux 64bit</a>
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-linux32.bin" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col" download>Linux 32bit</a>
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-win.exe" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col" download>Windows</a>
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-osx.dmg" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col" download>OSX</a>
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-all.zip" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col" download>All</a>
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-source.zip" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col" download>Source Code</a>
                        <a href="http://cloudflare.archive.parrotsec.org/parrot/misc/image-writer/" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--6-col">More info</a>
                    </div>
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>Archives</h4>
                        <a href="http://archive.parrotsec.org/parrot" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Central Repository</a><br><br>
                        <a href="http://archive2.parrotsec.org" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Other hosted projects</a><br><br>
                        <a href="http://www.sourceforge.net/projects/parrotsecurity/files" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Previous releases</a><br><br>

                    </div>
                    <div id="netboot" class="mdl-card__supporting-text" align="center">
                        <h4>Netboot Images</h4>
                        <p>netboot images are very small files that contain only the parrot installer, it requires an internet connection to install</p>
                        <a href="http://mirrordirector.archive.parrotsec.org/parrot/pool/iso/3.4.1/Parrot-netboot-3.4.1_i386.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-margin">Netinstall 32bit</a>
                        <a href="http://mirrordirector.archive.parrotsec.org/parrot/pool/iso/3.4.1/Parrot-netboot-3.4.1_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-margin">Netinstall 64bit</a><br><br>
                    </div>
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>Parrot Libre Edition</h4>
                        <a href="https://www.irisproject.org" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Iris Project Website</a>
                    </div>
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>Parrot 3.4.1 Studio (64bit)</h4>
                        <p>Parrot Studio is a derivative project for multimedia content creation applications for audio, graphics, video, photography and programming workflows.</p>
                        <form target="_blank" onsubmit="this.action = document.getElementById('studio').value">
                            <?php
                            mirrorSelector("3.4.1/Parrot-studio-3.4.1_amd64.iso", "studio");
                            ?>
                            <br>
                            <br>
                            <input type="text" style="display:none" name="get" value="1" readonly>
                            <input  onclick="_paq.push(['trackGoal', 13]);" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" style="color:#060606;background:#00a000;" value="download" /><br><br>
                        </form>
                    </div>
                </div>
            </section>
<?php
    include("footer.php");
?>
</div>
<!--<a href="https://www.parrotsec.org/download.fx" target="_blank" id="download-parrot" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Download</a> -->
<script src="/misc/material.min.js"></script>
