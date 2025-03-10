---
title: 'A Little Learning ...'
published: true
date: '07-03-2025 09:53'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "But I forgive myself"
header_image: '0'
---

![Painted wall at the Library of Congress with the quote from Pope, A little learning is a dangerous thing, drink deep or taste not of the Pierian spring.](loc.jpeg?loading=lazy){.img-fullwidth .u-featured}
<figcaption style="font-style: italic;">At the Library of Congress, they understood</figcaption>


In [yesterday's monthly post](https://www.jeremycherfas.net/blog/monthly-report-2025-02) I teased about not being able to talk about "the thing that hijacked this update" because it happened in the current month. Here's the story.

===

For most of February, I was working on a redesign of this site, intended to simplify it under the hood and, somewhat, on the screen. Back in 2019 I found out about Tailwind, an interesting approach to designing sites that would look reasonably good on any size screen. At the time it was just what I needed, not knowing very much about responsive design, and I was very happy to use it. Almost six years on, and having dabbled a bit more in the meantime, it became obvious that it wasn't necessary any more, that I could use what I had learned to get the same effect without all Tailwind's clutter, so in late January I set about doing just that.

The immediate trigger was an email from someone about dark mode and how I wasn't supporting it. I made the minimum possible changes and immediately discovered that they did nothing to improve the look of the place, even though I never use dark mode myself. Something had to be done.

My notes track my halting progress, including the momentous decision to abandon a sidebar entirely -- the horror! -- decide on colour schemes, and all the little details. Finally, on 3 March, I was ready to upload the new theme to the server. It was an unmitigated disaster. I still don't entirely know why, but at one horrifying point I was greeted with a message from the server saying something like "congratulations on your new site, go ahead and upload some content". Yikes!

I could see that everything was still all there, but somehow I had broken the connection between Grav, the engine under the hood, and the shiny new site. After agonising a good long while I retreated and jumped through various hoops, all of my own making, and finally succeeded in getting back almost to normal. But not quite, because the system I have used since starting up this engine no longer worked.

OK, here's a confession of weakness. Because I am a dabbler, with only a little learning, I do things without fully understanding them. The makers of Grav long ago explained how to use github to store a copy of the whole site and use a webhook to deploy updates whenever they occur, and by diligently (slavishly?) following instructions, I made it work. Until, this week, it didn't. One reason I cleaved to github was because all alternatives involved the terminal, where terrors lurked and anything could happen.

Since then, I've learned more about the terminal and quelled my fears enough that some things have become routine, like using `rsync` to download stuff from the server for safekeeping here. When I went looking for solutions to my github problem, I found one from 2017 that basically said: don't bother with github, [use `rsync`](https://discourse.getgrav.org/t/grav-deploy-best-practice/4459/17). (Let me put in a hearty thank-you Grav here, for keeping information available.) Back then, that would have seemed way too complicated. Today, not so much.

I adapted Chris Jung's approach to suit my circumstances and was not really surprised that it worked beautifully. The command isn't that complicated, but having seen it work once I created an alias in my shell to avoid mistypings and this post here represents the acid test.

I still have no real idea why what seemed like a simple github plus webhook started delivering its payload to the wrong place, but I no longer really need to find out. I'm happy with the new workflow, which is actually faster and simpler, with the added benefit that I vaguely understand it. I'll probably keep using git as an offsite backup because it allows me to tinker locally without getting into a huge mess when things break, but I will probably break its connection with the server.

As for this site, there are still some things I need to do. Some of those I can only do online, but I know I can recover from here without github as an intermediary, which gives me some confidence. And at least now it mostly renders nicely in dark mode.

! Is piece this about self expression? I reckon it is, which is why I will be submitting it to this month's [IndieWeb Carnival](https://indieweb.org/IndieWeb_Carnival), on [Self-Expression and hosted by Pablo Morales](https://lifeofpablo.com/blog/self-expression-indieweb-carnival-march-2025).
