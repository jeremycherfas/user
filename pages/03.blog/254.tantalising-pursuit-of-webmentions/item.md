---
title: 'Tantalising pursuit of webmentions'
subhead: 'One step forward, two steps back'
header_image: '0'
---

Over the past few days I have again picked up the torch of fully implementing webmentions in Grav. It's a maddening pursuit, mostly because I don't really know what I'm doing (although I am getting fantastic help from the folks in the [IndieWeb community](http://chat.indieweb.org)). The details are pretty arcane, and although I am trying to keep a decent record of all the steps and missteps, a full write-up will have to wait. In the meantime, I'm up against all sorts of weird things that I don't fully understand. My main aim is to try and get a more consistent, more essential, set of data back about webmentions to this site. To do that, I need to persuade the plugin to use XRay, rather than the standard PHP microformat parser, which I started doing [back in late May](https://www.jeremycherfas.net/blog/there-s-no-success-like-failure).

===

![Goya's Tantalus](672px-Francisco_de_Goya_Tantalo.jpg){.center} 

Back then, one problem was that I seemed unable to test the whole thing locally. That proved relatively easy to solve. Now, the hard part is working out exactly what and how the plugin does. The problem is, it doesn't seem to be very actively maintained. In fact, the author does not seem to be using it on his own Grav site, which goes against at least [one IndieWeb principle](https://indieweb.org/selfdogfood). 

During the latest local test, it seemed to me that the script that pulls in webmentions was stalling for some reason, failing to complete. This could be some arcane aspect of the local server setup, so it was suggested I try it on the live site, which I am always loathe to do in case I break anything. However, there seemed nothing for it but to try that. At first glance, the script seemed to hang there too. But then it chugged forward a notch. Minutes later, another. In the end, after about two hours, it did actually come to a halt, having dealt with all 503 pending notifications on the live site.

And this morning, there was an email from DreamHost, telling me that my site "is running rough". I don't know why, but clearly something about the script does too much of something. So maybe the slowness is inherent in the script, or maybe something about the script uses too much in the way of resources, but at least I know that it does in fact work on the live site. Later I'll try testing again locally, and if it fails to complete there, given enough time, well, I'll know something.

I do wonder whether I am going about this effectively. Would I do better to start from scratch? I don't think so, because while I know enough to tinker, I really don't think I know enough to build a new plugin myself.

All this gets me a little bit closer to the ultimate goal of using XRay, but each time I reach for a tasty piece of low-hanging fruit, or stoop for a refreshing draught of water, away they go, eluding me, frustrating me and, in the end, I suppose, keeping me going.

*The image is Public Domain,* <a href="https://commons.wikimedia.org/w/index.php?curid=559890">Link</a>