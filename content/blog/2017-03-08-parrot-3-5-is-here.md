---
id: 99
title: Parrot 3.5 is here
date: 2017-03-08T12:56:37+00:00
author: palinuro
image: images/slider/macaw-poly2.jpg
---
Hello Parrots, Palinuro here.

I am proud to announce the official release of the new Parrot 3.5 ISO files.

This update took a lot of time (2 months) as we have not only updated and tested many many packages from debian, but we also tried to play with some new features and dropped some old and obsolete ones.

This new release will no longer include all those old packages that did not meet the debian standards, and of course we also removed the old and discontinued gtkdialog, that forced us to remove some other softwares built on top of it.

On a brighter note, native virtualbox and vmware guest support is now included by default.
  
The linux kernel was updated to the latest 4.9.13 release and we are waiting debian to finish the debianization of linux 4.10 to start working on our patches for it.

A virtual machine manager was included by default, but it is neither virtualbox nor the propertary vmware, while we wanted to include virt-manager, which is an awesome manager for KVM and LXC machines that can also control VMs on other computers on your network.

Another interesting feature is the update of firefox which is not firefox-esr 45, as we wanted to import the new firefox 51 by default.

For a full list of all the changes we consider being most relevant, take a look at our release changelog.

&nbsp;

&nbsp;

And don&#8217;t forget to download the latest ISO files from our download page!