---
title: 'Putting my house in order: Phase 1'
published: true
date: '17-01-2017 13:08'
metadata:
    Keywords: indieweb
taxonomy:
    category:
        - blog
    tag:
        - Geeky
subhead: 'I need to do a better job online'
summary:
    enabled: '1'
    format: short
---

For a while now I've been concerned about owning my own data, in the spirit of [IndieWeb](http://indieweb.org). In June 2015 I started [an experiment in the indieweb](https://www.jeremycherfas.net/blog/an-experiment-in-the-indieweb) using a CMS called Known, and bits of that worked well enough. Trouble is, I actually have almost no control over the details of the CMS, which has meant that whenever I come across a little problem that might be within my capacity to solve, I generally can't even try. This frustration has finally reached the point where I'm prepared to do something about it, like host my own copy of Known rather than rely on Indiehosters.

===

I've also been hanging around in the Indieweb Slack channel, where I'm both amazed at what people are doing and increasingly convinced that it is beyond me. But I'm determined to give it a proper try.

The first step is to figure out just how to organise myself, and this post is intended to describe how things are currently and why, in an effort to clarify my own thoughts and maybe get some advice from the indieweb gurus.

##The properties

Here's most of what I have.

###[jeremycherfas.net](http://jeremycherfas.net)

This is the site I currently view as the mothership. It has been through many incarnations, from NucleusCMS to WordPress to Octopress to its current platform Grav. I dumped WordPress because it was just too complex, slow and hard to fix for what was essentially a very simple site. I'm only about 10% of the way through transferring old posts from Octopress to Grav, because I insist on doing it by hand to catch broken links and stuff. The big downside of being on Grav is there doesn't seem to be a huge amount of indieweb interest in that community.

There's nothing really social associated with this site; I have the same username on ADN (for now) and on Flickr (maybe also not long for this world) and on 10Centuries. Also Facebook, but I hardly use that except for promoting episodes of ...

###[eatthispodcast.com](http://eatthispodcast.net)

Where my food podcasts live. This is a WordPress site. Why? Because it was relatively easy to set up for podcasting, and that part of it works very well. Why a separate domain? Because I think it is quite likely that people who are interested in that podcast might not be that interested in everything else I do, and it seems a natural to keep it separate. The vast majority of posts are podcast episodes, although there are also copies of the email newsletter and occasional other posts related to topics that have been covered in podcast episodes. I doubt that it would be worth moving this to another CMS.

This site has accounts at Twitter and Instagram. Posts there go beyond the strict confines of the podcast, but generally stay in the area of food studies in the widest sense.

###[www.fornacalia.com](http://www.fornacalia.com)

(Got to fix that www thing.)

Like Eat This Podcast, this is a WordPress site. It is dedicated to my various breadmaking activities, again kept separate because I wasn't sure whether people interested in my breadmaking would be interested in my other activities.

No social activity, except that I post breadmaking things to the Eat This Podcast account at Instagram.

This is the site that could most easily become a category of jeremycherfas.net if I wanted to get rid of sites, but I rather like the URI.

###[vaviblog.com](https://vaviblog.com)

The indiweb experiment, running on Known CMS but hosted at Indiehosters, which gives me very little freedom to tinker. [^1] Bits of this work, and work well. Now, however, I think I'm ready to declare an end to the first experimental phase and start to embrace the indieweb in earnest. 

I should note that vaviblog.com used to have a much more interesting website associated with it, and that I would eventually like to get that back (I have all the content). I used this domain for my experiment because it was one I already owned. In retrospect, that was a mistake. There is a Twitter account called Vaviblog but I have used it very little recently. If I got the old content back, I might use it more often.

[^1]: That's perhaps not fair. It doesn't give me any kind of FTP access, so I can't use that route to add a new plug-in or fiddle beneath the hood. I recently learned that there is a way I could use Git to make changes and have Indiehosters pull those changes, but I haven't actually bitten that bullet. If I'm going to go that route, I may as well save myself a bit of cash and host it where I host other sites.

###[potp.it](http://www.potp.it)

The site for a short-lived project, hosted at 10Centuries. Although I've almost stopped posting longer things there, it is possibly my most active social site, but for a small society.


##What I'm thinking

One approach I've seen and liked is the way Chris Aldrich has implemented his "[primary hub](http://boffosocko.com)" in WordPress with his "[social stream](http://stream.boffosocko.com/)" in Known in a sub-domain (though I'm not entirely sure what makes a post there different from a post in the hub). I don't really want to migrate my main site **back** to WordPress, but maybe I can achieve a similar sort of thing in Grav. Mind you, I still haven't enabled comments on Grav; how on Earth am I going to manage pulling them in from other sites? My main worry there is that because Grav developers are not all that interested in indieweb, it will be beyond my abilities. So maybe back to WordPress really is the best option.

I'm open to any and all suggestions, and I'm going to [crosspost to vaviblog.com](https://vaviblog.com/2017/putting-my-house-in-order-phase-1) because that should be able to receive replies from elsewhere.