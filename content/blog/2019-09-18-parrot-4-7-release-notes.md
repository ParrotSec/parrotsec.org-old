---
title: Parrot 4.7 release notes
date: 2019-09-18T09:32:40+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---

# Parrot 4.7 development notes

We are proud to announce the release of Parrot 4.7, which represents an important step forward for our project.

# How to update

Download the latest release from our [official download page](https://www.parrotlinux.org/download.php)

Update your existing Parrot system with the following command

```bash
sudo parrot-upgrade
```

Or use the raw apt command

```bash
sudo apt update
sudo apt full-upgrade
```

Don't forget to use this command regularly (at least once a week) to receive the latest security updates and bugfixes from the Parrot repository.

---

# Domain changes

To reflect the neutrality of a distro that started as a pentest-only system and became more general purpose later with Parro Home, the community voted through a democratic process to switch to parrotlinux.org as the new default domain of the project.

We will still use parrotsec.org for other things (included the old email addresses), and we introduced other project domains to handle specific parts of the infrastructure.

# Repository changes

We are preparing to integrate a future LTS branch, so we decided to rename the current repository from stable to rolling.
Nothing changes for the end user, and the current Parrot branch will continue to behave the same as before, but now with a different name to better reflect the rolling release nature of the system, waiting for the LTS edition to join the Parrot OS family along side the rolling branch in a similar way OpenSUSE does.

# New menu structure and tools improvements

The pentesting menu structure was refactored and re-designed to make tools easier to access in a more logical hierarchical structure.
New tools were also added to the project, and we plan to add even more in the future. Not all of them are going to be pre-installed, but a good set of tools in our repository enables pentesters to build up the perfect pentest system for their specific needs, regardless the default package selection picked by our team.

# New sandbox behavior (opt-in rather than opt-out)

Sandboxing is a great thing, and we were in the first line when we introduced our custom firejail+apparmor solution for the first time many years ago.
We still want to improve such feature and we have a whole team dedicated to improve sandboxing and hardening of the Parrot system, but we had to face the many users with issues caused by the restrictions of our sandbox.

In Parrot 4.7 the sandbox is disabled by default, and users can decide wether to start an application sandboxed or not. You can easily start the sandboxed version of an installed program from the /sandbox/ folder or from a dedicated menu that we plan to improve in the future (meanwhile the search feature of the bottom menu will fit all your needs), or you can re-enable it by default by using the `firecfg` tool.

# Latest Linux 5.2

The new ISO files of Parrot 4.7 are being released only now, but we were the first Debian derivative distribution to introduce Linux 5.1 and 5.2 to all our users, and now we are ready to offer it also with our ISO files rebild cycle to support more devices and integrate all the latest linux features from the beginning.

# New MATE 1.22 release

Parrot 4.7 ships with the latest MATE 1.22 desktop environment.

# Miscellaneous

New firefox 69, the latest radare2 and cutter versions and many other important upgrades are all aboard as expected in a properly developed rolling release distro.
