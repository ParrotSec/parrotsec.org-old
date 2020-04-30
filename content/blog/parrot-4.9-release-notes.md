---
title: "Parrot 4.9 Release Notes"
date: 2020-04-30T11:30:12+02:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
description : "Parrot 4.9 is now available for download, read the release notes"
---

# Parrot 4.9 is here

Parrot 4.9 is now available for download, and it ships some important updates we are particularly proud of.

Some new features introduced in Parrot 4.8 has also introduced some weird bugs that required some extra time to be spotted and fixed.

We originally wanted to release Parrot 4.8.1 to address them, but then a huge amount of updates from debian, like the removal of many python2 libraries and tools, and the introduction of a new linux kernel version made the 4.9 release a more appealing idea.

We have also introduced a new, more friendly installer and a new look and feel to the login screen, to make the system more appealing to newcomers and more comfortable for those users already aboard.

# Where to get it

You can download Parrot OS from our [official download page](https://parrotsec.org/download), and we invite you to never trust third party and unofficial sources.

We also provide official torrent files and ready to use OVA images for virtual machines.

# How to upgrade from a previous version

Parrot OS is a rolling release distribution, and updates flow in the repo as soon as they prove to be stable and reliable.

Version numbers (like 4.8 or 4.9) are just tags we assign to the current state of the project every time we think there are enough updates accumulated in the repo to need a refresh of the ISO file. In fact every Parrot version represents exactly a refresh of our ISO files to collect all the accumulated pieces together into something tested and reliable.

You can upgrade an existing system via APT using one of the following commands:

`sudo parrot-upgrade`

or

`sudo apt update && sudo apt full-upgrade`


# What's new

## Linux 5.5

We are proud to announce the jump from linux 5.4 to the new 5.5 branch, which introduces a more reliable hardware support, **fixes a lot of WIFI and intel GPU bugs** and introduces support to new hardware that wasn't supported before.

## Parrot Menu

We have improved our menu structure removing some redundant launchers and making the overall organization easier to navigate.

* Fix icon missing in brisk menu
* Remove duplicate launchers in other categories or from Debian packages
* Fix icons for some security tools
* Fix airgeddon execution path
* Update-launchers improvement

## Anonsurf

Anonsurf received a significant update that fixes some bad behaviors and improve its overall design.

We are working on a major upgrade on anonsurf, which will introduce a graphic user interface and a complete new design.

The new anonsurf version included in Parrot 4.9 is a cherrypick selection of new updates from our development branch that we decided to include ahead of time to close some bugs caused by the previous design of the software.

No GUI available at the moment, but you will notice the improvements to this iconic piece of software.

* it now runs as a daemon
* the DNS bugs are fixed
* it is possible to automatically start it at boot
* it closes automatically when the system shuts off
* it can't be started more than once like before, preventing weird bugs
* status command now uses nyx
* support for bash-completion of commands
* support for dnstool


## New installer

We are proud to announce the new Parrot installer based on Calamares, the same installer used by Manjaro and other GNU/Linux distributions.

Calamares is a distro-agnostic installer that is easy to use and offers not only an improved user experience, but also all the relevant advanced features expected by a quality installer, like full disk encryption complex partitioning etc.

Parrot still ships the Debian installer for those who need it, but now users have a new user friendly option available straight from the desktop of their live environment.

Calamares makes the whole installation process not only better but also faster, by asking for partitioning first, and then configuring the user later while the installation runs in the background.


## Python 2 removal

On one hand we are more than happy to announce that at the beginning of this year, python 2 was finally deprecated, and its lifecycle ended; on the ohter hand, we are sorry to announce you that we were forced to remove many pentest tools that were abandoned for years and never upgraded to python 3, so we were forced to deprecate them as well.

We are not alone in this choice, and other pentest distributions like Kali were forced to take the same move.

We are now searching for new tools (quality ones) to replace some of the missing ones, and we would love to write some of them in the near future.

## Other updates from upstream providers

As always this version ships with all the latest updates from our upstream sources (mostly Debian), so every new fix, improvement (or bug) is now included in Parrot 4.9 as well.

From the firefox browser to the mate desktop environment, from the introduction of GCC 10 ang golang 1.14 to the important upgrades of vscodium and virtualbox, all the awesome upates from upstream sources are now part of the Parrot repository as well.







Happy hacking
