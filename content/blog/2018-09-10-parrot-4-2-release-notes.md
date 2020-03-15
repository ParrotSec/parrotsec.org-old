---
id: 209
title: Parrot 4.2.2 release notes
date: 2018-09-10T16:45:15+00:00
author: palinuro
image: images/slider/macaw-poly2.jpg
---
We are proud to announce the release of Parrot 4.2.

It was a very problematic release for our team because of the many important updates under the hood of a system that looks almost identical to its previous release, except for a new background designed by Federica Marasà and a new graphic theme (ARK-Dark).

[<img class="alignnone wp-image-211 size-large" src="https://blog.parrotsec.org/wp-content/uploads/macaw-poly-1024x576.jpg" alt="" width="1024" height="576" srcset="https://blog.parrotsec.org/wp-content/uploads/macaw-poly-1024x576.jpg 1024w, https://blog.parrotsec.org/wp-content/uploads/macaw-poly-300x169.jpg 300w, https://blog.parrotsec.org/wp-content/uploads/macaw-poly-768x432.jpg 768w, https://blog.parrotsec.org/wp-content/uploads/macaw-poly-830x467.jpg 830w, https://blog.parrotsec.org/wp-content/uploads/macaw-poly-230x129.jpg 230w, https://blog.parrotsec.org/wp-content/uploads/macaw-poly-350x197.jpg 350w, https://blog.parrotsec.org/wp-content/uploads/macaw-poly-480x270.jpg 480w" sizes="(max-width: 1024px) 100vw, 1024px" />](https://blog.parrotsec.org/wp-content/uploads/macaw-poly.jpg)

&nbsp;

## Updated kernel and core packages

Parrot 4.2 is powered by the latest **Linux 4.18** debianized kernel with all the usual wireless patches.

A new version of the **Debian-Installer** now powers our netinstall images and the standard Parrot images.

**Firmware packages** were updated to add broader hardware support, including **wireless devices and AMD vega graphics**

**AppArmor and Firejail** profiles were adjusted to offer a good compromise of security and usability for most of the desktop and CLI applications and services

<img class="alignnone size-full wp-image-214" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-17-58-08.png" alt="" width="341" height="211" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-17-58-08.png 341w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-17-58-08-300x186.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-17-58-08-230x142.png 230w" sizes="(max-width: 341px) 100vw, 341px" />

&nbsp;

&nbsp;

&nbsp;

## Important destkop updates

Parrot 4.2 now provides the latest **libreoffice 6.1** release, **Firefox 62** and many other important updates.

Desktop users will also find useful the inclusion of default **.vimrc and .emacs config** files with syntax highlight and line number columns.

<img class="alignnone size-full wp-image-218" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-18-23.png" alt="" width="618" height="283" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-18-23.png 618w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-18-23-300x137.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-18-23-230x105.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-18-23-350x160.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-18-23-480x220.png 480w" sizes="(max-width: 618px) 100vw, 618px" />

&nbsp;

## Important tools updates

**Armitage** was finally updated and fixed, and the &#8220;missing RHOSTS error&#8221; was fixed.

We also imported the latest Metasploit 4.17.11 version. Wireshark 2.6, hashcat 4.2, edb-debugger 1.0 and many many other updated tools.

[<img class="alignnone size-full wp-image-216" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00.png" alt="" width="962" height="190" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00.png 962w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00-300x59.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00-768x152.png 768w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00-830x164.png 830w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00-230x45.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00-350x69.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-09-10-18-16-00-480x95.png 480w" sizes="(max-width: 962px) 100vw, 962px" />](https://dev.parrotsec.org/parrot/armitage/commit/68f584e0064adc31aa42755b3f5c527e5e2687a9)

## 

## New documentation portal

We are working to drop our previous DokuWiki documentation portal and replace it with a full static documentation portal written in markdown which would be easier to maintain through our GIT server.

The new documentation portal can be visited [here https://www.parrotsec.org/docs](https://www.parrotsec.org/docs). feel free to contribute and expand our documentation by sending us a push request on [https://dev.parrotsec.org/parrot/documentation.](https://dev.parrotsec.org/parrot/documentation)