---
id: 226
title: Parrot 4.3 Release Notes
date: 2018-11-03T18:32:12+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---
**Parrot 4.3 is now available for download.**

This release provides security and stability updates and is the starting point for our plan to develop an LTS edition of Parrot.

&nbsp;

### Our plans for Parrot LTS

We are working on a Parrot LTS branch, a long term support, release-based distribution to provide long term reliability to our users for all our architectures.
  
Our plans are to release it along side the next Debian stable release, which is planned for the next year.
  
We will continue to provide a rolling release branch for the x86_64 architecture where to include all the major version updates for our tools and test all our new features.

In our vision LTS does not mean outdated. We believe that our LTS branch should follow the native release process of all the tools and system components that we include, and we will not keep outdated and unsupported package versions in the repo, but we are working on new build nodes to provide updated backports for all the supported software.

Of course Parrot 4.3 is not LTS yet, but it was developed as a middle step to our final goal that we plan to reach within the next summer.

### 

### Linux 4.18

Linux was updated to the 4.18.10 version, and linux 4.19 will be released soon.

### Firefox 63

Firefox 63 provides noticeable security and privacy features, but it is no longer available to 32bit systems, so we switched to firefox-esr on all the unsupported architectures.

### Wine menu

We fixed a bug in the parrot menu configuration that prevented several menu categories to show up.
  
This fixed the missing wine menu bug, which is now back again.

### Bashrc updates

The Parrot .bashrc file was updated, now it provides better snap support, the _ll_ alias now shows the size in a human readable format and it does no longer overwrite some global settings as it used to do before.

### Java 11

OpenJDK 11 is now the default java provider.

### Anonsurf

Anonsurf received important stability upgrades and now it does not mess up the dns configuration.

### New Parrot icons

The Parrot edition of the MAIA icon theme was updated.
  
We dropped many old unused icons and replaced them with newer ones.

### Core updates

Parrot 4.3 provides the latest updates of Debian Testing and many improvements to our sandbox system, in fact both firejail and apparmor received significant updates, and now the whole system is smoother, more secure and more reliable.

&nbsp;

## Download

[Download Parrot 4.3](https://www.parrotsec.org/download.php)

&nbsp;

## Upgrade from a previous version

> sudo full-upgrade

or

> sudo apt update
  
> sudo apt full-upgrade

&nbsp;

### Experimental KDE editon

We released an experimental home edition featuring the KDE Plasma desktop environment.

We will include in in our download pages as soon as it becomes reliable enough.

Meanwhile you can manually download it from <https://archive.parrotsec.org/parrot/iso/4.3>

&nbsp;

**The following is a short list of some of the most relevant tool updates we included in this release:**

* aircrack 1.3 -> 1.4
  
* airgeddon 8.11 -> 8.12
  
* anonsurf 2.8.1
  
* armitage 2015-08-13 -> 2016-07-09
  
* bettercap 2.8 -> 2.10
  
* dradis 3.9 -> 3.10
  
* fern-wifi-cracker 2.6 -> 2.7
  
* fping 4.0 -> 4.1
  
* netsniff-ng 0.6.4 -> 0.6.5
  
* faraday ide 3.0.1 -> 3.2
  
* radare2 2.8.0 -> 3.0.1
  
* sqlmap 1.2.8 -> 1.2.10
  
* sslscan 1.11.11 -> 1.11.12
  
* stunnel4 5.48 -> 5.49
  
* t50 5.7.1 -> 5.8.2
  
* theharvester 2.7.2 -> 3.0
  
* tor 0.3.3 -> 0.3.4
  
* tshark 2.6.3 -> 2.6.4
  
* wapiti 2.3.0 -> 3.0.1
  
* weevely 3.6.2 -> 3.7.0
  
* wireshark 2.6.3 -> 2.6.4
  
* wpscan 2.9.4 -> 3.3.2