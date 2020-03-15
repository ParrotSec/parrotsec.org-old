---
id: 149
title: Parrot 3.8 Release Notes
date: 2017-09-12T18:13:05+00:00
author: palinuro
image: images/slider/macaw-poly2.jpg
---
What i personally love about this project is its little but awesome developers community, and this summer was more productive than ever.

I am proud to announce the official release of Parrot 3.8, that introduces many new features and updates.

A quick look at our changelog will immediately spot the most important changes.

First of all, the new parrot 3.8 is now based on Debian 10 buster (current Debian testing release) with Linux 4.12, ZFS support, better wireless drivers support and the introduction of the new MATE 1.18, GCC 6.4 and 7.2, java 9 and so on, and all the parrot flavors now include electrum, a lightweight bitcoin client.

We have not only fixed the previous DNS resolution issues, but also introduced a new round-robin model between both the default DNS servers provided by dhcp and our new OpenNIC DNS nodes hosted on our servers to prevent DNS censorship. Our OpenNIC nodes were not yet added to the OpenNIC server list but we would love to add them in the future.

Parrot 3.7 and 3.8 were also subject to the introduction of apparmor, and selinux will be introduced by default very soon.

Parrot Lite has received some improvements, for example now it includes libreoffice, and some useless packages were dropped to make the system faster and more lightweight. No significant changes were performed on Parrot Studio and Parrot AIR except for all the global changes introduced in this new release.

&nbsp;

The ARM images for various SoC boards will be released in the next days with many interesting features and a broader list of supported boards.

&nbsp;