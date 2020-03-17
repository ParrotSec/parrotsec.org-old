---
id: 136
title: Parrot 3.7 Release Notes
date: 2017-07-10T10:41:53+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---
Take a Debian core and configure it to be lightweight with a classic but complete desktop environment, put a beautiful dark theme on it and modify it to have nice colors and to not stress your eyes even after many hours of work.
  
Next step? integrate a full arsenal of tools to cover most of the aspects of the workflow of pentesters, sysadmins and developers.
  
As a final touch make an accurate selection of daily use applications.

These were our goals when we started to work on Parrot 3.7.

Of course the release of Debian 9 as the new stable branch brought many important changes in Debian, but for those distributions based on Debian testing, the main change was the introduction of many many updated packages that remained locked in the unstable branch because of the pre-release testing freeze.

We decided to not introduce significant changes on our side in this new release, and we just wanted to focus on making existing things better.
  
The most evident change is the introduction of the ARC theme, while also the auto-updater received an important change to show the progress of system upgrades.

The old linux 4.9 kernel was replaced with the new 4.11 branch, and this introduced a better support for many devices.

But the most important change is the core which is now based on Debian 10 (testing).

&nbsp;

Our platform received some revisions too: the recent crash of our server in France gave us the perfect opportunity to review our infrastructure. The most important result is that now the central repository is replicated over 2 servers, and both of them host the geo redirector that redirects every request to one of our mirror servers around the world.

We are still working on our new build infrastructure and more hardware is required to complete everything and have it up and running as expected, if you want to contribute with a donation (both money or hardware) feel free to visit our [Donations Page (https://docs.parrotsec.org/donate)](https://docs.parrotsec.org/donate) or contact palinuro AT parrotsec DOT org (spam it and we will hire a hitman for you).

&nbsp;

Let&#8217;s finish with a little note on what is happening on our ARM side:
  
our repository fully supports both armhf (armv7hf &#8211; 32bit with HF) and arm64 (aarch64/armv8 &#8211; 64bit), and all the ARM packages are perfectly synchronized with their equivalent x86 versions. The only problem woth our ARM support is that our current ARM developer was too busy in these months to finish the ARM builds in time, and our current ARM images are based on Parrot 3.4 and are available only for Raspberry Pi

But on a brighter note a new developer is up to join our ARM team and our current ARM developer will be back on the build platform very soon, and he is already at work to support not only the Raspberry Pi but many other ARM boards like the Pine64 that we would like to adopt as our official embedded board.