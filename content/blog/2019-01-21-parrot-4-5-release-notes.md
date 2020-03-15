---
id: 256
title: Parrot 4.5 release notes
date: 2019-01-21T05:18:45+00:00
author: palinuro
image: images/slider/macaw-poly2.jpg
---


## Parrot 4.5 development notes

Parrot 4.5 is officially released, and there are some major changes under the hood.


&nbsp;

<a href="https://www.parrotsec.org/download-home.php">
![Parrot 4.5 download](../img/parrot-4.5-download.jpg)
</a>

&nbsp;


## Dropped 32bit architecture images

We are in 2019 now,  and computers that are not capable of running 64bit and complex applications operating system are mostly old, legacy computers. To add to that, many programs and frameworks are no longer available for 32bit x86 systems.

![Old crap](../img/parrot-4.5-old-crap-pc.jpg)

We have released 32bit (i386 Architecture) images since the beginning of the project, and we worked hard to provide fresh binary updates for the i386 architecture for a long time; However, 32bit-only computers are no longer capable of running a full pentest campaign or providing hardware-accelerated support to our security protection systems.

Parrot 4.5 no longer provides any live ISO files for the i386 architecture, even if it is still supported by our repository and our netinstall images. We are slowly planning to drop support for it in the future.

NOTE: 32bit deprecation does not affect our ARM support, and armhf architecture is still fully supported.


&nbsp;

&nbsp;


## Virtual Appliances

We released official docker templates for parrot many months ago, and they proved to be a turnkey solution to bring a full parrot pentest stack on top of any operating system supported by docker.

![virtual appliance](../img/parrot-4.5-virtualbox-ova.png)

The next step that comes with Parrot 4.5 is the release of desktop virtual appliances in the OVA format that can be imported in VirtualBox, VMWare and other famous virtualization environments.

These virtual environments are still experimental, and even if they are the perfect solution to give Parrot a try and experiment with it, we still recommend a full custom installation from the ISO files for best chances of being supported and easier configuration and troubleshooting.

&nbsp;

&nbsp;

## Linux 4.19

Linux 4.19 is the default kernel in Parrot 4.5, and this new kernel version was already packaged by following our new kernel distribution policy implemented for Parrot 5.0 LTS.

![linux 4.19](../img/parrot-4.5-linux-4.19.jpg)

We plan to support 2 kernel branches, a stable kernel and a testing kernel, and provide updates for both. Linux 4.19 is part of our testing branch, while the first release of the stable branch will be released with Parrot 5.0 itself.

Read the full PSC [here - https://nest.parrotsec.org/parrot-organization/parrot-standards-codex/issues/2](https://nest.parrotsec.org/parrot-organization/parrot-standards-codex/issues/2). 

&nbsp;

&nbsp;

## Metasploit 5.0  

![metasploit 5](../img/parrot-4.5-metasploit-5.jpg)
\
Metasploit 5.0 was released with many new important features that we immediately imported and tested for our users.

We absolutely loved the new evasion modules, the opportunity to write shellcode in C, the new search engine, the integrated web services or the json-rpc daemon, and we wanted to offer quick access to this awesome framework through this new Parrot release.

&nbsp;

&nbsp;

## Better Dev Tools

We improved our metapackages for developers, and setting up an advanced development environment for several programming languages and frameworks is now easier than ever:

&nbsp;

&nbsp;

### parrot-devel

It is pre-installed in Parrot 4.5 and provides the following tools:

* vscodium - an advanced and extensible text editor.
* zeal - an offline documentation downloader and browser.
* git-cola - a graphic client to GIT.
* meld - a graphic patch inspector.
* tora - a graphic database frontend compatible with several database backends.

These packages are included in the metapackage by using the "Recommends" apt directive, and they can be removed individually without triggering the removal of the whole parrot-devel metapackage.

The metapackage also recommends the installation of parrot-devel-tools.

```
sudo apt update
sudo apt install parrot-devel
```

&nbsp;


### parrot-devel-tools

It is recommended by parrot-devel and pre-installed in Parrot Security.
It provides some useful compilers and interpreters for the most used languages and provides the following packages:

* GCC/G++ - a compiler collection for C, C++ and other languages.
* python3 - the cpython interpreter for the python 3.6 and 3.7 language.
* ruby - the official ruby lang interpreter and basic toolkit (includes irb and ri as well).

The package also recommends the following packages, that can be safely removed without triggering the removal of the entire parrot-devel-tools metapackage:

* default-jdk - the latest Java OpenJDK distribution for Java 11 (both JDK and JRE).
* cython3 - a compiler for the cython language, a strongly-typed dialect of python for efficient code.
* rust/cargo - the rust compiler and devel tools and its package management system.
* valac - the vala c compiler.
* mono-devel - the development tools for the MONO framework, an open source implementation of .net.
* mono-runtime - the runtime of the MONO framework compatible and interoperable with the latest .net runtime.
* php-cli - the PHP 7.3 language plus its command line interface and some useful core libraries.
* perl6 - the PERL 6 interpreter and core libraries.
```
sudo apt update
sudo apt install parrot-devel-tools
```
&nbsp;


### parrot-devel-extra

The parrot-devel-extra metapackage is a quick way to install many additional development utilities like advanced IDEs, additional languages, debuggers and extra tools.

* golang - go language compiler and runtime
* nodejs - node.js framework
* npm - node.js package manager
* atom - advanced and extensible editor by github
* qtcreator - powerful C, C++ and Qt/QML IDE and debugger.
* kdevelop - advanced general purpose IDE by KDE.
* edb-debugger - graphical debugger.
* jad - Java decompiler.
* nasm - powerful general purpose x86 assembler.
* radare2 - advanced command line hexadecimal editor.
* cmake - cross-platform, open-source make system.
* valgrind - nstrumentation framework for building dynamic analysis tools.
* devscripts/build-essential - useful development utilities for debian developers/maintainers.

```
sudo apt update
sudo apt install parrot-devel-extra
```

&nbsp;

&nbsp;

## Other updates

Many more updates were imported since we are currently based on Debian testing, and we included all the latest updates, security patches and new features as usual.




