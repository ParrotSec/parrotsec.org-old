---
id: 193
title: Parrot 4.0 release notes
date: 2018-05-21T13:14:34+00:00
author: palinuro
image: images/backgrounds/macaw-poly2.jpg
---
Parrot 4.0 is now available for download.

The development process of this version required a lot of time, and many important updates make this release an important milestone in the history of our project.
  
This release includes all the updated packages and bug fixes released since the last version (3.11), and it marks the end of the development and testing process of many new features experimented in the previous releases since Parrot 3.9.

&nbsp;

### Experimental Netinstall Images

Netinstall images are a powerful tool to install only the bare core of the system or just the software components you really need, you can even use them to install another desktop environment and to build your own system exactly as you want.

On Parrot 4.0 we decided to provide netinstall images too as we would like people to use Parrot not only as a pentest distribution, but also as a framework to build their very own working environment with ease.

We consider this installation method as experimental because sometimes the installer fails when using https mirrors (using http mirrors work fine), and because it is harder to debug issues on uncommon package combinations, but we are going to keep these variables in consideration in the future.

&nbsp;

### Docker images

We are glad to announce the official release of our Docker templates.

Docker is a powerful container technology that allows our users to quickly download a Parrot template and immediately spawn unlimited and completely isolated parrot instances on top of any host OS.

Parrot on Docker gives you access to all the Parrot containers you need on top of Windows, Mac OS, or any other system supported by docker, no matter if it is just your laptop or a whole docker cluster running on an entire datacenter. You will always have access to all the parrot tools in all the isolated environments you need.

We also offer different Docker images: a core container with only the bare system, a more complete environment with a lot of useful tools, and a container dedicated to the metasploit environment. But you are free to download our Dockerfiles, customize them and build your very own Docker templates with just the tools you need, or you can download the core template and install additional tools into it.

&nbsp;

### **Linux Kernel 4.16**

**[<img class="alignnone size-full wp-image-195" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00.png" alt="" width="631" height="152" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00.png 631w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00-300x72.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00-230x55.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00-350x84.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00-480x116.png 480w" sizes="(max-width: 631px) 100vw, 631px" />](https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-38-00.png)**

The introduction of the new Linux 4.16 kernel is a very important step forward for the distro, as newer kernels always introduce many important new features, broader hardware support and important bugfixes.
  
The previous Parrot 3.11 release used Linux 4.14, which included basic spectre/meltdown fixes, while the true effective patches are included since Linux 4.15.
  
The 4.16 version includes [other important updates](https://www.linux.com/blog/2018/4/linux-kernel-416-networking-patches-and-more), including AMDGPU multi-display fixes, optimized in-kernel filesystem operations and so on.

&nbsp;

### **Sandbox**

[<img class="alignnone size-full wp-image-196" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24.png" alt="" width="609" height="155" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24.png 609w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24-300x76.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24-230x59.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24-350x89.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24-480x122.png 480w" sizes="(max-width: 609px) 100vw, 609px" />](https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-39-24.png)

The Parrot system is known to be secure and sandboxed thanks to its custom firejail profiles with the underlying apparmor support. Parrot 4.0 is the final result of months of testing on this field, and now the sandboxed applications are stable and reliable.

### 

### **MATE 1.20**

[<img class="alignnone size-large wp-image-197" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-1024x576.png" alt="" width="1024" height="576" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-1024x576.png 1024w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-300x169.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-768x432.png 768w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-830x467.png 830w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-230x129.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-350x197.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19-480x270.png 480w" sizes="(max-width: 1024px) 100vw, 1024px" />](https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-41-19.png)

The MATE Desktop Environment was updated to its 1.20 release, with many graphic bugfixes and new features, like HiDPI support, or the ability to auto-resize windows by dragging them to the corner of the screen and divide them in new layouts.

&nbsp;

### **Nginx**

[<img class="alignnone size-full wp-image-199" src="https://blog.parrotsec.org/wp-content/uploads/Nginx-Logo.png" alt="" width="300" height="300" srcset="https://blog.parrotsec.org/wp-content/uploads/Nginx-Logo.png 300w, https://blog.parrotsec.org/wp-content/uploads/Nginx-Logo-150x150.png 150w, https://blog.parrotsec.org/wp-content/uploads/Nginx-Logo-230x230.png 230w" sizes="(max-width: 300px) 100vw, 300px" />](https://blog.parrotsec.org/wp-content/uploads/Nginx-Logo.png)

Apache2 is the most famous web server out there, but it is heavy and complex to configure and maintain.
  
Nginx is its most powerful alternative, it is very light weight and easy to use, and it is famous to be not only a fast and secure web server, but also a powerful proxy, cacher, load-balancer and general purpose forwarder. And its configuration syntax is very easy to use.

For this reason we decided to include nginx as our new default web server daemon, while apache2 will be available in the repository, or pre-installed as a dependency of some security tools that rely on it.

&nbsp;

### **Libreoffice 6**

[<img class="alignnone size-full wp-image-200" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41.png" alt="" width="908" height="232" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41.png 908w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41-300x77.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41-768x196.png 768w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41-830x212.png 830w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41-230x59.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41-350x89.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41-480x123.png 480w" sizes="(max-width: 908px) 100vw, 908px" />](https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-15-02-41.png)

Libreoffice 6 is now included by default in Parrot 4.0, with better documents support, memory efficiency and stability.

[Read the release notes](https://wiki.documentfoundation.org/ReleaseNotes/6.0)

&nbsp;

### **Firefox 60**

[<img class="alignnone size-full wp-image-198" src="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47.png" alt="" width="611" height="369" srcset="https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47.png 611w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47-300x181.png 300w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47-230x139.png 230w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47-350x211.png 350w, https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47-480x290.png 480w" sizes="(max-width: 611px) 100vw, 611px" />](https://blog.parrotsec.org/wp-content/uploads/Screenshot-at-2018-05-21-14-58-47.png)

Firefox, probably the most delicate and critical component of the OS is now updated to the latest 60 release.

&nbsp;

### **MD Raid Support**

Parrot 4.0 now includes md raid support by default.
  
It was a great lack in the previous versions, because parrot is also meant to be used for forensics analysis, and to be able to open software raids can be crucial while reading disks in a server environment.
  
Of course the introduction of mdadm as a pre-installed tool also mean that parrot can be installed in a software raid for better reliability.

&nbsp;

&nbsp;

### Full list of updated packages

Want to see the full list of packages that were upgraded between 3.11 and 4.0.1?
  
Follow this link <https://archive1.parrotsec.org/parrot/iso/4.0.1/updated-packages.txt>

&nbsp;

### How to upgrade

If you have a previous version of Parrot and want to upgrade the system, follow these steps:

Open a terminal window and type the following commands

<pre>sudo apt update
sudo apt purge tomoyo-tools
sudo apt full-upgrade
sudo apt autoremove</pre>