---
title: "Parrot 4.10 Release Notes"
date: 2020-08-16T11:30:12+02:00
author: palinuro
image: images/blog/4.10/parrot-4.10.jpg
description : "Parrot 4.9 is now available for download, read the release notes"
---

We are proud to announce the release of Parrot OS 4.10.
This new version includes many important updates to make the distribution more reliable and more secure.

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

## AnonSurf 3.0

AnonSurf 3.0 is ready, and it ha many important features.

![](../../images/blog/4.10/anonsurf-3.0.jpg)

It is now subdivided into 3 modules: GUI, Daemon and Utilities.

The GUI is written in [NIM](https://nim-lang.org), a blazing fast programming language very easy to write and read that compiles in native C code.
It uses [Gintro GTK](https://nest.parrotsec.org/packages/debian/gintro) for the interface and it has several features to let the user control the anonsurf behavior.

You can start, stop and reload anonsurf, you can easily configure anonsurf to automatically start at boot, and it is easy to monitor the status of tor and see the traffic, the logs and some usage statistics thanks to its integration with [NYX](https://nyx.torproject.org/).

![](../../images/blog/4.10/anonsurf-screenshot.jpg)

The new AnonSurf Daemon takes care of shutting down the service automatically at shutdown in case the user powered off the computer with anonsurf enabled, which was a known cause of later connectivity issues in previous versions, and of corurse allows the user to tell the init system to automatically start anonsurf at boot for those who need it.

Anonsurf also ships with some utilities, like a CLI interface: the old famous anonsurf command, which is now an interface for the daemon instead of a standalone tool.

We also delivered (and updated) dnstool, a software to easily control the behavior of DNS resolution across the system, that allows the user to choose between static and dynamic configurations and to use the servers provided by dhcp, the servers of choice of the user or the servers of the [OpenNIC project](https://www.opennic.org).

AnonSurf is overall more reliable and more stable, and it is an important step forward for the whole project since we deeply believe in privacy and the role it covers in the fight for freedom.

## Linux 5.7

Parrot OS now comes with Linux 5.7.

![](../../images/blog/4.10/linux-5.7.jpg)

Few important changes of this new kernel version:

* Improved scheduler.
* new ExFAT filesystem module.
* Spli Lock detection.
* userfaultfd() write protection support.
* A BPF-based Linux Security Module called bpf-lsm.
* Allow clone3() to spawn processes into cgroups.
* Improved perf cgroup profiling.
* Improved btrfs filesystem support.

Read [This changelog](https://kernelnewbies.org/Linux_5.7) for more detailed information.

## Metasploit 6.0

The development of Metasploit 6 has finally started, and it ships a lot of awesome features that were missing from the previous versions.

![](../../images/blog/4.10/metasploit.jpg)

It is important to know that this version will break retro-compatibility with previous versions, so it is important for our users to understand what has changed in this version.

One of the most wanted features is finally here: **end-to-end encryption** in **meterpreter backdoors**, which of course breaks retro-compatibility with older meterpreter payloads.

Other awesome news include the implementation of SMBv3 client support, imprved evasive capabilities via polimorphic payload generation routines.

if you want to read more about Metasploit 6, please read [This article](https://blog.rapid7.com/2020/08/06/metasploit-6-now-under-active-development/).

## Parrot XFCE Edition

![](../../images/blog/4.10/xfce.jpg)

We now officially support the XFCE Desktop Environment. We will improve it in later months using the feedback from our users, and we want to provide it as a valid alternative to MATE and KDE.

you can download the XFCE image from here [https://download.parrot.sh/parrot/iso/4.10](https://download.parrot.sh/parrot/iso/4.10)

## Greenbone Vulnerability Manager 11.

Parrot 4.10 now includes the Greenbone Vulnerability Management (GVM) 11 framework which was formerly known as OpenVAS.
The GVM package now follows the new Debian packaging style.

[Read the Greenbone 11 changelog](https://community.greenbone.net/t/gvm-11-release/3676)

## KDE Konsole bug

There was a bug in KDE that prevented console tools to be launched from the menu. This bug was finally fxed upstream in the KDE repos, but debian has not yet delivered the updated version, so Parrot 4.10 is still affected by that.

![](../../images/blog/4.10/kde-bug.jpg)

A special page will alert people trying to download the KDE edition and explain the issue, and updated images will be released as soon as the fix is included in Debian.

The system is still usable and the affected tools can still be launched from the console, and it will be automatically fixed with later system updates.

## Noticeable updates for developers

VSCodium, the open-source binary distribution of VSCode with telemetry removed at source level, is still our default development tool, and it was updated to its latest version (1.47.3). Geany (with some Parrot customizations) is also pre-installed for those running on less powerful hardware.

Parrot now ships with Python 3.8, go 1.14 and gcc 10.1 and 9.3 by default, and we have improved our development metapackages by adding nim support.

Open a terminal window, type sudo apt show parrot-devel- and press TAB a couple of times to get the list of available packages from the bash autocompletion.

Complete the command with the package of your choice to know more about the features delivered (i.e. apt show parrot-devel-golang).

Additional metapackages for developers will come soon.



## Other updates from upstream providers

As always this version ships with all the latest updates from our upstream sources (mostly Debian), so every new fix, improvement (or bug) is now included in Parrot 4.10 as well.

From the firefox browser to the mate desktop environment, all the awesome upates and security fixes from upstream sources since the previous release are now part of the Parrot repository and hence part of this new release.


# Follow the stream


You can follow our development progress [here](https://nest.parrotsec.org/org/parrot/-/blob/master/README.md).






Happy hacking
