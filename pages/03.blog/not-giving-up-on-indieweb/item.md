---
title: 'Not giving up on IndieWeb'
published: true
date: '27-07-2017 11:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "It isn't easy, but it is doable and satisfying"
header_image: '0'
---
I know this only an ego trip, but I'd like to get back to having comments enabled on my website. That part is actually quite easy. There is a good Comments plugin for Grav that I have tested locally and it does a nice job. More than comments, though, I want IndieWeb comments. That is, I want people to be able to comment on, link to, like or otherwise engage with my content *on their own site*[^1] and have that show up here, on my site. In other words, I want it all.

The key to all this is a technology called [webmentions](https://indieweb.org/webmention).  Webmentions are somewhat fundamental to the way the IndieWeb deals with conversations, because they allow all the participants to own their contributions. In essence, if you react to something I've published, your site sends a message to my site. What I choose to do with that is completely up to me.

===

Anyway, most of the people who develop and use the engine behind this site, Grav, seem completely uninterested in the IndieWeb, with one exception. He made a bunch of plugins, including one that implemented webmentions. Unfortunately, I just could not get it to do a reasonable job for me, despite lots of help from IndieWeb keenies.[^2] Finally, after more than a week of at least a couple of hours a day trying to bend the plugin to my will, I threw in the towel.

Online, in response to questions about implementing webmentions, I had seen many people recommend [a webmention service](https://webmention.herokuapp.com) that would deal with receving webmentions for static sites, but my site isn't static, so I hadn't paid much attention. Because I was so frustrated, I took a better look, and it seemed there was absolutely nothing restricting it to static sites. I abandoned the Grav plugin, signed up with Voxpelli's service, and 15 minutes later -- I swear -- I had webmentions visible on my site.

Of course, they're butt-ugly, but I was warned that this would be the case, and so my next task is to make them slightly less so. Until that's done, at least to the point where I can live with how they look, you won't see webmentions or comments here.

##Never gonna give you up

All of which leads me back to the title of this post, a direct reference to a recent piece by Glenn Dixon in which he announced that he was <a class="u-in-reply-to" href="http://glenn.thedixons.net/blog/giving-up-on-indieweb">Giving Up on IndieWeb</a>. Glenn, too, threw in the towel:

> While I love the IndieWeb concept and the general ideas behind it, the current set of implementations are so complex, so mind-blowingly difficult to implement that I am making a self-care decision and deleting almost all of it from my computer and sites. There is a reason that the handful of people who actually care and talk about this stuff have careers in programming. At this point, that is what is required to get this up and running.

My experience has been different. I certainly have never had a career in programming, and yet I am slowly getting IndieWeb to work for me. In that, I have depended on people who are programmers, many of them career programmers. The work they do for IndieWeb they do for love.

I'm not here to berate Glenn for giving up. That's his prerogative. What I don't like is his attempt to belittle the work of the people who want to see the IndieWeb succeed and grow. He cites a bunch of numbers about how small the IndieWeb is. Some of those numbers are definitely spurious. But even for those that are not, numbers are not the way to judge progress. 

Is IndieWeb easy? Not in the way that the silos are easy. But anyone who can use the Kirby content management software, as Glenn does, could also work with Known which, despite what Glenn says, remains one of the few CMSs that does almost everything a presence on the IndieWeb needs, more or less out of the box.

##Different strokes

A classic case of YMMV. 

I'm enjoying making progress in the IndieWeb despite not having a full set of technical skillz, and it doesn't hurt that I am learning new things as I do so. There are many other things I still need to do, like remembering to send out webmentions by hand[^3] (for now) and making a way for people to send me things by hand if they're so minded.

Glenn chose not to jump through those hoops. That's OK. I wonder, though, will he ever discover this post?

[^1]:Or in silos like Twitter or Facebook, if I should happen to syndicate things there. 

[^2]: Who are not as keen on Grav, it has to be said. And unfortunately the plugin author's keenness does not extend to actually using his plugin on his own site.

[^3]: There are services for that too; I'll probably use [Telegraph](https://telegraph.p3k.io).