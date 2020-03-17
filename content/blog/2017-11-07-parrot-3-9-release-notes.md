---
id: 167
title: Parrot 3.9 release notes
date: 2017-11-07T17:54:07+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---
Parrot 3.9 is now ready, and it includes some important new features that were introduced to make the system more secure and reliable.

The most important feature is the new sandbox system, introduced to protect many applications from 0day attacks out of the box. The sandbox is based on firejail, a suid program which is very easy to configure and customize to protect many critical applications in a quick and effective way (if an application does not work as expected, customize the corresponding firejail profile to be more permissive).

The other characteristic of this release is a long list of little details we wanted to fix to make the system look better, and the new debian updates we have introduced to include the latest technologies.

In some cases this release might not work as expected, in these cases our users are invited to check their firejail profiles and their drivers compatibility, and they should contact us immediately as all the new features introduced in Parrot 3.9 will be refined and consolidated for Parrot 4.0 (sorry for the spoiler).

Because of these important (but experimental) new updates, we will release other sub-versions before Parrot 4.0 to make sure everything works as expected, and we are preparing a significant update to our security tools.