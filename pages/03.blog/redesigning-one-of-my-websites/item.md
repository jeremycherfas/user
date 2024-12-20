---
title: 'Redesigning one of my websites'
published: true
date: '20-12-2024 15:47'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: "The ultimate customisation "
header_image: '0'
---

Yesterday, almost nine months after starting, my from-the-ground-up redesign of the podcast website went live. Of course I was not working on it full time, although I have notes from 25 different sessions. Now that it is up and running, it seems like a good idea to reflect on the process. The primary reflection being, it is a pain.

===

##Some background

The site is driven by a content management system (CMS) called ClassicPress which, you might guess, is a fork of the ubiquitious WordPress. CP wants nothing to do with WP’s fancy block system for laying things out on a page and that suits me, as neither do I. Like WP, CP relies on bundles of code called themes to actually determine how the content appears on the screen, and many of the vast number of themes that clever people have made available for WP also work on CP. The problem was that the themes past me had chosen to display the site were, to current me, impossibly complicated by trying to be all things to all people. No doubt they were very clever, allowing hapless site owners like me to customise so many different sorts of things. But they were also too clever, so that a slightly less hapless site owner, like me, would quickly get lost in the weeds of strange variables that derived their meaning who knows where.

And so it was that, back in March, I set out to design my own theme from scratch, rather than tweaking someone else’s work. I thought it would be easy because, after all, I didn’t need to enable any customisations. This was my theme, for me, so all decisions about where things should be, what they should look like, and how they should work needed to satisfy only me.

In fits and starts, with help from [Every Layout](https://every-layout.dev), a crucial purchase, Timur Kamaev’s [wp-kama](https://wp-kama.com/), which I found much more useful than official documentation, and ChatGPT, I built my theme and let it loose.

## So why aren’t you happy?

I am, honest.[^1] But I have also had occasion to curse long and loud, especially in the final phase of testing the site live and online, and the main cause of my frustration has been the CMS’ failure adequately to separate content from presentation.

I built my theme on my desktop computer, standard practice so that as I tinkered I wouldn’t interfere with the site as the rest of the world sees it. When I uploaded the theme to go live, however, lots of the site looked broken because, for example, I had changed the contents of a particular widget. The new theme displayed the old version of the widget. That’s a trivial example. There were many others that meant I had to open the local version and the live version side by side and copy and paste content from one to the other, like a savage.

OK, quit moaning, there are probably plugins that will take care of all that for you. Maybe there are, but rather than go and learn yet another new thing, I chose to do it the hard way and probably got it done more rapidly as a result. 

## A better way

As it happens, this site runs on a different CMS, [Grav](https://getgrav.org/), which also uses themes to control what things look like on the screen. The big difference is that where CP and WP hide their contents away in a database, the content of a Grav site lives in ordinary files. There’s stuff in those files that tells the CMS which bits of a theme to use for which bits of content. And as it also so happens, a couple of days ago I wanted to make quite a fundamental change to the way this site is organised. All it took, literally, was moving a bunch of files from one folder to another and telling Grav what I had done.

To do something similar in CP would need me to dig into the database and replace every example of something with something else. No problem, for an actual developer and now, thanks to ChatGPT, not for me either. But still riskier than it need be.

In other respects, of course, Grav is just like WP and CP in that the themes other people make are designed to make it easy to customise the bits that the theme builder thinks should be easy to customise. Other things? Back in the weeds. So I built my own theme and it was a darn site easier than with CP. Still, the thing that made it easier — [Tailwind](https://www.jeremycherfas.net/blog/no-more-reverse-engineering) — also made it harder to understand when I wanted to make changes.

Earlier this year I wrote about wanting to [rethink this site and maybe its CMS too](https://www.jeremycherfas.net/blog/seven-year-itch) and immediately embarked on redesigning the podcast site. Now that’s done, and taking advantage of what I learned doing it, it might be time to start.


[^1]: I know there are still some things that aren’t quite right. I’ll get to them, eventually.