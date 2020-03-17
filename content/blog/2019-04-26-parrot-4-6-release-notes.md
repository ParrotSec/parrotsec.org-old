---
id: 257
title: Parrot 4.6 release notes
date: 2019-04-26T09:32:40+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---


# Parrot 4.6 development notes

We are proud to announce the release of Parrot 4.6, after 3 months of heavy development. This has been an especially big three months for us as Parrot 4.6 is also our first release completely served by our network without SaaS services like cloudflare. Everything is on our infrastructure.

# How to update

Download the latest release from our [official download page](https://www.parrotsec.org/download.php)

Update your existing Parrot system with the following command

```bash
sudo parrot-upgrade
```

Don't forget to use this command regularly (at least once a week) to receive the latest security updates and bugfixes from the Parrot repository.

---

# Parrot Security KDE Edition

When we first added KDE, it was an experiment. We love Mate but we'd heard great things

about KDE and decided we could try and support two desktop environments. Because of the

work required to change everything from Mate to KDE. We started with KDE Home. The

feedback was immediate, you guys loved it. The recurring request since has been "how do I

add the tools". We heard you and it is finally here! A Security edition featuring the KDE

Plasma desktop environment.

We now offer both MATE and KDE images for the Home and Security editions.

![parrot security kde](../img/parrot-4.6-kde-security.jpg)

---

# System Changes

## Appearance

Our design [team](https://www.parrotsec.org/docs/team/#design-team) developed a new, ultra, awesome visual experience for Parrot 4.6,

feast your eyes on a new boot-splash animation and desktop background!

The desktop-base and parrot-wallpapers also received some love and are updated to reflect

such changes including the new Parrot appearence.

**Note:** The themes and icons are still the same.

---

## APT now enforces https

We have modified our APT implementation to support https-to-http downgrades.

This allowed us to configure our repository as https by default. For visual reference


Parrot 4.6 is now configured to serve signed index files via https by default,
and the mirror redirector is configured to redirect traffic to https mirrors when available.
In case an https mirror is not available, the packages are downloaded by fallback http mirrors, but APT will still verify the signatures.

In other debian-based systems and previous Parrot OS versions, mirrors used http by default, and https is just an exception.

Http downloads don't represent a security risk because gpg signatures are more effective

than ssl downloads in certifying repository integrity, as described on [this website - https://whydoesaptnotusehttps.com/](https://whydoesaptnotusehttps.com/).

Although you can never eliminate risk of bad actors, we hope to increase the cost for

providers attempting to intercept or track user activities (i.e. knowing if a

user is installing specific software).

---

## Improved drivers support

Parrot 4.6 includes the Linux 4.19 kernel which contains several security patches,

performance improvements and a better hardware support.

Moreover Parrot 4.6 features important updates for broadcom and other wireless chipset manufacturers,

and the Nvidia drivers were updated to the latest 410 version with better Quadro support.
[Debian Kernel Changelog](https://metadata.ftp-master.debian.org/changelogs//main/l/linux-signed-arm64/linux-signed-arm64_4.19.28+2_changelog) - [Linux changelog](https://cdn.kernel.org/pub/linux/kernel/v4.x/ChangeLog-4.19)

---

## Anonsurf has OpenNIC support
Anonsurf now integrates a new option to change from the system DNS servers to OpenNIC DNS resolvers.

[OpenNIC](https://www.opennic.org) is a community-driven dns resolver provider that respects

user freedom and allows domain resolution of some special top level domains.

![OpenNIC features](../img/parrot-4.6-opennic.png)

---

# Minor updates

## Better snap support
Now when you install from snap it will show up in the applications menu by default.

## AppArmor and Firejail profiles have been updated
We are constantly trying to rebuild the sandbox :) We love firejail and AppArmor and we

hope to achieve a state of near hassle-free setup and use. Sandboxed applications in

Parrot OS are now more stable and reliable than before, and we are pushing forward with

plans to not only add more profiles but utilize firejail's capabilites to their fullest.

## Better OpenVPN support

Setting up your VPN should be painless and quick. Network-manager now integrates all the

available VPN plugins by default, allowing that experience to be just that.

## Miscellaneous

The MATE desktop environment received some minor stability updates, and Firefox 65 is now included.

# New additions

## Matrix and Riot.IM
We love federated instant messaging protocols! We love [XMPP](https://xmpp.org/about/) and [Matrix](https://matrix.org/blog/index) for what they bring to the table.

Though we like [Dino](https://dino.im/) we realized we wanted something that was sexy, lightweight
and worked with XMPP and MTProto. Using Matrix does all of this and more through bridges.

[Revolt](https://github.com/aperezdc/revolt) is a [Riot.IM](https://about.riot.im/) desktop integration written mostly in Python, and shell fits our needs perfectly.

(Riot.IM is a chat client built on the Matrix protocol.)

There are several Matrix clients to pick from and we're still testing. But as we work to

move our community torward XMPP and Matrix we think it makes sense to have Revolt, you

never know when skynet will be activated :)

## Reverse Engineering
While we evaluate the inclusion of NSA's Ghidra, we decided to include [Cutter](https://github.com/radareorg/cutter), the powerful GUI to radare2, which is one of the most powerful reverse engineering frameworks out there.

Cutter makes it easier to work with the radare2 framework and pushes Parrot's reverse engineering capabilities to a new level.

## Tool updates

Many tools received important updates since the release of Parrot 4.5. From airgeddon to metasploit up to the latest bettercap version. All the tools are now up to date with their latest versions.

## Developer Support

Since the introduction of the `parrot-devel` metapackage family, we worked hard to improve the overall development experience in Parrot.

In that regard we have awesome news! The devel metapackage now includes the latest gcc

and clang versions, an important security update for java (openjdk), and a big jump from

nodejs 8.11 to the latest 10.15 version. And finally the inclusion of dbeaver as the default database manager.

Metapackages were improved to be more modular and lightweight by default. The mono

runtime and development tools were moved to `parrot-devel-extra` and are no longer pre-installed.

---

## The Road ahead

The Parrot Project has gone through some considerably large evolutions. We've added over 20 new members, redesigned our internal structures and processes, upgraded our server infrastructure and deployed our own CDN. As we look at where we want to go we realize that we need to automate things more as well as harden ParrotOS from boot to browsing.

