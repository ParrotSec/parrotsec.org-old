---
id: 234
title: Parrot 4.4 Release Notes
date: 2018-11-25T21:09:29+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---
<img class="alignnone size-full wp-image-235" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_213621.png" alt="" width="640" height="480" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_213621.png 640w, https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_213621-300x225.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_213621-230x173.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_213621-350x263.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_213621-480x360.png 480w" sizes="(max-width: 640px) 100vw, 640px" />


## Parrot 4.4 Development Goals
<img class="alignnone size-full wp-image-237" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-39-55.png" alt="" width="730" height="112" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-39-55.png 730w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-39-55-300x46.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-39-55-230x35.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-39-55-350x54.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-39-55-480x74.png 480w" sizes="(max-width: 730px) 100vw, 730px" />

The Parrot 4.4 development process involved the ideas of many people from our community, and the goal of this new update was mainly to target software developers and increase average system stability.

&nbsp;

## Download

[Download Parrot 4.4](https://www.parrotsec.org/download.php)

&nbsp;

## Upgrade from a previous version

> sudo parrot-upgrade

or

> sudo apt update
  
> sudo apt full-upgrade

&nbsp;

&nbsp;

&nbsp;

&nbsp;

## Debian Testing stability status

<img class="alignnone size-full wp-image-238" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55.png" alt="" width="959" height="298" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55.png 959w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55-300x93.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55-768x239.png 768w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55-830x258.png 830w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55-230x71.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55-350x109.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-43-55-480x149.png 480w" sizes="(max-width: 959px) 100vw, 959px" />

Parrot is based on Debian Testing, which is now entering an important stabilization stage for new Debian 10 (buster) release, that should arrive around the second quarter of 2019. This means that Parrot is up to see a new golden age of stability and reliability, which this time is going to last very long since [the team announced the Parrot Long Term Support project in the previous release note.](https://blog.parrotsec.org/parrot-4-3-release-notes/)

&nbsp;

&nbsp;

&nbsp;

&nbsp;

## VSCodium

<img class="alignnone size-full wp-image-239" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40.png" alt="" width="1028" height="799" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40.png 1028w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-300x233.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-768x597.png 768w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-1024x796.png 1024w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-830x645.png 830w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-230x179.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-350x272.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-46-40-480x373.png 480w" sizes="(max-width: 1028px) 100vw, 1028px" />

Since Github released [atom.io](https://atom.io), an advanced and extensible text editor that is hackable to the core, Microsoft worked hard to create their own atom alternative called Visual Studio Code, also known as VSCode.

Unlike what most of the people think, VSCode and Visual Studio Code are two completely different products:

VSCode is an opensource MIT-licensed editor available ONLY as source code on its github repository, and the only way to use it is to clone the repo and compile it.

Visual Studio Code is a proprietary binary distribution licensed under [this not-FLOSS license](https://code.visualstudio.com/license), and contain telemetry and tracking plugins, as stated by one of their developers in [this comment](https://github.com/Microsoft/vscode/issues/60#issuecomment-161792005).

> When we [Microsoft] build Visual Studio Code, we do exactly this. We clone the vscode repository, we lay down a customized product.json that has Microsoft specific functionality (telemetry, gallery, logo, etc.), and then produce a build that we release under our license.
> 
> When you clone and build from the vscode repo, none of these endpoints are configured in the default product.json. Therefore, you generate a &#8220;clean&#8221; build, without the Microsoft customizations, which is by default licensed under the MIT license

VSCodium is a community project to distribute a binary release of VSCode without any Microsoft branding, telemetry and tracking feature.

<img class="alignright wp-image-240 " src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-49-20.png" alt="" width="349" height="123" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-49-20.png 742w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-49-20-300x106.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-49-20-230x81.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-49-20-350x124.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-21-49-20-480x169.png 480w" sizes="(max-width: 349px) 100vw, 349px" />

Parrot 4.4 uses VSCodium as its new advanced editor instead of Atom, because the atom binary packages became too bloated and too heavy (up to 850MB of storage space), **without** considering the bare minimum set of plugins that are necessary to make Atom a complete environment. VSCodium in the other hand is very lightweight (less than 200MB) and it is way faster than both Atom and Visual Studio Code, with a smaller memory footprint, and it provides many important features by default and without any need of external plugins (advanced intellisense, code inspector, debugger, git interface, broader languages support etc).

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

## New Golang, Rust, Vala and Mono support

<img class="alignnone size-full wp-image-242" src="https://blog.parrotsec.org/wp-content/uploads/how-to-choose-a-programming-language.png" alt="" width="700" height="360" srcset="https://blog.parrotsec.org/wp-content/uploads/how-to-choose-a-programming-language.png 700w, https://blog.parrotsec.org/wp-content/uploads/how-to-choose-a-programming-language-300x154.png 300w, https://blog.parrotsec.org/wp-content/uploads/how-to-choose-a-programming-language-230x118.png 230w, https://blog.parrotsec.org/wp-content/uploads/how-to-choose-a-programming-language-350x180.png 350w, https://blog.parrotsec.org/wp-content/uploads/how-to-choose-a-programming-language-480x247.png 480w" sizes="(max-width: 700px) 100vw, 700px" />

There is a big interest in the Parrot team to offer a comfortable environment for software developers and those pentesters who usually write or modify their tools, and even if we already support python, java, c/c++, ruby, perl, bash and php, there is a big interest in the community in other emerging programming languages like golang, rust or vala.

Parrot 4.4 added for the first time full support for golang, rust, vala and mono (a FLOSS and independent .NET implementation). We believe software developers will benefit from this internal choice that required a lot of effort in order to keep the ISO files within their usual sizes.

&nbsp;

&nbsp;

&nbsp;

## New Privacy Metapackage

<img class="alignnone size-full wp-image-243" src="https://blog.parrotsec.org/wp-content/uploads/privacy-3.jpg" alt="" width="979" />

parrot-privacy now provides all the privacy-related applications as anonsurf, torbrowser, ricochet-im, onionshare and more.

People who need stronger privacy have now a dedicated metapackage.

&nbsp;

&nbsp;

&nbsp;

&nbsp;

## KDE Plasma Edition

<img class="alignnone size-full wp-image-244" src="https://blog.parrotsec.org/wp-content/uploads/photo_2018-11-23_17-58-28.jpg" alt="" width="400px" />

The development of the KDE Plasma edition gave very interesting results, and now Parrot 4.4 provides an awesome KDE flavor with our custom themes and settings for all our users that don&#8217;t like MATE and prefer a more advanced and feature-rich (but heavier) desktop environment.

Parrot KDE includes the latest 5.13 Plasma desktop with custom configurations that proved to be very lightweight and fast with a small memory footprint, and we will continue to improve this flavor in the future.

&nbsp;

&nbsp;

&nbsp;

&nbsp;

## BTRFS and XFS are the new default filesystem

<img class="alignnone size-full wp-image-245" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-11-25-22-08-18.png" alt="" width="400" />

The new Debian-Installer was modified to use **btrfs by default** for root and xfs for the home filesystem. The installer does no longer create a swap partition when automatically partitioning uefi or encrypted systems, and the boot partition is large enough to host multiple kernel revisions without running out of space.

Btrfs and xfs are very powerful advanced filesystems with CoW, subvolumes, snapshots and other features. While xfs is very fast on some specific workloads, btrfs has additional features like live compression and a very efficient checksuming system for file corruption detection.

<img class="alignnone size-full wp-image-246" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot_generic_2018-11-25_220831.png" alt="" width="800" height="600"/>

Btrfs was considered experimental for many years and it is still under heavy development, but its core features are now stable and production ready (but not ready for mission critical scenarios) and many companies already use it and contribute to its development, including facebook, suse, oracle and more. We think it is ready for desktop use and we actively used it on all our personal computers, testing machines, workstations and servers (yes, parrot servers use btrfs almost everywhere), and it proved to be very stable and reliable.