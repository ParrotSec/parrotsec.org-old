---
id: 114
title: Debian and Devuan
date: 2017-06-13T15:31:42+00:00
author: palinuro
image: images/backgrounds/macaw-vaporwave.jpg
---
<img class="alignnone wp-image-117 size-thumbnail" src="https://blog.parrotsec.org/wp-content/uploads/if-150x150.png" alt="" width="150" height="150" />

Some days ago we have posted a bizarre proposal on our social channels about a possible migration from Debian to Devuan to get rid of systemd and all the problems that it has brought to our environment since Parrot 2.0, and with this post we will try to explain what is happening in a more official way.

We are not going to deeply explain the technical details of this choice here as it would be useful just to open another systemd flame war which is out of scope, while we prefer to explain what we are actually planning, thinking and doing.

And because we are bad people and we love to have a beer while following Unix wars, we will fill this topic with systemd memes.

<img class="alignnone wp-image-122 size-medium" src="https://blog.parrotsec.org/wp-content/uploads/photo_2017-06-13_17-25-19-300x275.jpg" alt="" width="300" height="275" srcset="https://blog.parrotsec.org/wp-content/uploads/photo_2017-06-13_17-25-19-300x275.jpg 300w, https://blog.parrotsec.org/wp-content/uploads/photo_2017-06-13_17-25-19-230x211.jpg 230w, https://blog.parrotsec.org/wp-content/uploads/photo_2017-06-13_17-25-19-350x320.jpg 350w, https://blog.parrotsec.org/wp-content/uploads/photo_2017-06-13_17-25-19-480x439.jpg 480w, https://blog.parrotsec.org/wp-content/uploads/photo_2017-06-13_17-25-19.jpg 650w" sizes="(max-width: 300px) 100vw, 300px" />

&nbsp;

**Is Parrot switching to Devuan?**

Nope, not yet.

We are just testing how our packages behave on top of Devuan instead of Debian, and what should be modified to have everything working without systemd (which seems to be hardcoded almost everywhere).

We are also collecting feedbacks from our community, and this is why we posted a very short announcement on our social channels some days before writing this post, and in a very very short amount of time we were able to collect an exaggerated amount of positive messages.

<img class="alignnone wp-image-115 size-medium" src="https://blog.parrotsec.org/wp-content/uploads/CvIYxpJXYAEFXJv.jpglarge-292x300.jpeg" alt="" width="292" height="300" srcset="https://blog.parrotsec.org/wp-content/uploads/CvIYxpJXYAEFXJv.jpglarge-292x300.jpeg 292w, https://blog.parrotsec.org/wp-content/uploads/CvIYxpJXYAEFXJv.jpglarge-230x236.jpeg 230w, https://blog.parrotsec.org/wp-content/uploads/CvIYxpJXYAEFXJv.jpglarge-350x359.jpeg 350w, https://blog.parrotsec.org/wp-content/uploads/CvIYxpJXYAEFXJv.jpglarge-480x493.jpeg 480w, https://blog.parrotsec.org/wp-content/uploads/CvIYxpJXYAEFXJv.jpglarge.jpeg 490w" sizes="(max-width: 292px) 100vw, 292px" />

&nbsp;

**How would it happen?** (assumed that the switch will happen)

It would probably happen with the release of Parrot 4.0, but again, only rumors there

<img class="alignnone wp-image-118 size-medium" src="https://blog.parrotsec.org/wp-content/uploads/2ILhpxW-300x199.png" alt="" width="300" height="199" srcset="https://blog.parrotsec.org/wp-content/uploads/2ILhpxW-300x199.png 300w, https://blog.parrotsec.org/wp-content/uploads/2ILhpxW-230x153.png 230w, https://blog.parrotsec.org/wp-content/uploads/2ILhpxW-350x232.png 350w, https://blog.parrotsec.org/wp-content/uploads/2ILhpxW-480x319.png 480w, https://blog.parrotsec.org/wp-content/uploads/2ILhpxW.png 610w" sizes="(max-width: 300px) 100vw, 300px" />

**Would i notice any differences?**

One of the goals that we want to achieve, in case of a switch to Devuan, is to write some transition wrappers to make commands like **systemctl** continue to work on sysvinit, exactly like the wrappers that make **service**, **update-rc.d** and **/etc/init.d/** launchers work on systemd.

<img class="alignnone wp-image-119 size-medium" src="https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-300x200.jpeg" alt="" width="300" height="200" srcset="https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-300x200.jpeg 300w, https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-768x512.jpeg 768w, https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-1024x683.jpeg 1024w, https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-830x553.jpeg 830w, https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-230x153.jpeg 230w, https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-350x233.jpeg 350w, https://blog.parrotsec.org/wp-content/uploads/C97e9YhWsAE9Npj.jpglarge-480x320.jpeg 480w" sizes="(max-width: 300px) 100vw, 300px" />

**Sysvinit or openrc?**

Openrc is awesome, and we love how it correctly implements that dependency-based init model that systemd is quite far from being able to represent for the eyes of a _Veteran Unix Admin._

But openrc needs a lot of work to work properly in the debian ecosystem, and the introduction of systemd has slowed down its introduction as a valid alternative in Debian, so we will use the Devuan version of sysvinit and eventually follow the Devuan work, and then switch to openrc when it&#8217;s ready.

But again, these are just suppositions of how we would like to move in case of a migration.

<img class="alignnone wp-image-120 size-medium" src="https://blog.parrotsec.org/wp-content/uploads/u7o1tk-300x225.jpg" alt="" width="300" height="225" srcset="https://blog.parrotsec.org/wp-content/uploads/u7o1tk-300x225.jpg 300w, https://blog.parrotsec.org/wp-content/uploads/u7o1tk-230x173.jpg 230w, https://blog.parrotsec.org/wp-content/uploads/u7o1tk-350x263.jpg 350w, https://blog.parrotsec.org/wp-content/uploads/u7o1tk-480x360.jpg 480w, https://blog.parrotsec.org/wp-content/uploads/u7o1tk.jpg 512w" sizes="(max-width: 300px) 100vw, 300px" />

**WHY?**

This is not the question, the real question is:

Do we care of what we run at PID 1?

YES, WE FUCKIN&#8217; DO!!

<img class="alignnone wp-image-121 size-medium" src="https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT-300x217.jpg" alt="" width="300" height="217" srcset="https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT-300x217.jpg 300w, https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT-550x400.jpg 550w, https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT-230x166.jpg 230w, https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT-350x253.jpg 350w, https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT-480x347.jpg 480w, https://blog.parrotsec.org/wp-content/uploads/DB9QiQlXcAEx7VT.jpg 757w" sizes="(max-width: 300px) 100vw, 300px" />

**Ok, let&#8217;s suppose the migration happens, would i be able to install anyway?**

notabug wontfix.

Seriously, no one gave a fuck of people wanting (or needing) to run other init systems when systemd was introduced in most of the GNU/Linux distributions screwing up years and years of synergy.

We would be happy to see people being able to switch back to systemd on our platform, but we will not waste time and resources to make it easier.

<img class="alignnone size-large" src="http://i1.kym-cdn.com/photos/images/newsfeed/000/925/966/8d2.gif" width="480" height="320" />

**But i want to know what&#8217;s wrong with systemd!**

Again, we are not here to provide technical reasons about hat is wrong with a wrongly implemented init system, because many other people have deeply studied this situation and can explain it way better than us.

Here some useful resources:

[Linus Torvalds and others on systemd &#8211; ZDnet](http://www.zdnet.com/article/linus-torvalds-and-others-on-linuxs-systemd/) <&#8211; here you can also understand why we don&#8217;t like gnome

[Arguments against systemd &#8211; WithoutSystemd](http://without-systemd.org/wiki/index.php/Arguments_against_systemd)

[<span class="c00">I still don&#8217;t understand why systemd sucks &#8211; Ycombinator</span>](https://news.ycombinator.com/item?id=12589281)

&nbsp;

&nbsp;

**I am Poettring, i am reading this topic and i dislike the way the web is treating me**

We want to make it clear, we have nothing to do with those morons who started fundraising campaigns to hire a hitman to kill you, and we hate all the people who are bullying up on you.

We just consider systemd an immature init system which works almost perfectly on some standard desktop use cases. But we also believe that your approach is destroying that part of the Unix philosophy that made GNU/Linux one of the most stable and reliable systems out there.

We also dislike the way systemd took us away the sacred graal of choice.

So, again, nothing personal. Everything that may have hurt your person in this topic happened only because we love memes and freedom, and one of your softwares gave us the former but took us the latter.

&nbsp;

  * Palinuro