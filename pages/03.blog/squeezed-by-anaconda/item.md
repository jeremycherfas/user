---
title: 'Squeezed by anaconda'
published: true
date: '19-02-2021 15:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

A week or two back, I started doing an online course for Python. May as well have a tenuous grasp of another language, right? To start, they had me install a thing — I suppose it is an IDE — called Anaconda, which actually seems very nice and easy. However, it has definitely done something to my established environment, because when I went to run my weekly stats script, I got a bunch of errors saying it couldn’t find things that it had been perfectly well able to find before I installed Anaconda.

===

![Anaconda engraving 1885](anaconda.jpg){.center}

Doing anything interesting through Anaconda is still way above my pay grade. I’d like to just be able to disable the environment it seems to have set up until I need it, but even that is beyond me for the moment.

In any case, searching online offered a couple of ways to tell the [stats script](https://www.jeremycherfas.net/blog/bise-workflow) where to look for those modules. None of them worked, for me, and I think I tried everything. I let the whole thing ride until today, when I put off a very boring job by fixing this problem. Encouraged by an online friend, I took a deep breath and typed `cpan install Modern::Perl`. 

> Me: Progress! Now there's something else it can't find, which is fine. I'll just keep iterating until I succeed or get a different error.
> My friend: yep, that's exactly what everyone does when there are missing libraries 😊

So now maybe I’m a step further along the path to understand this stuff. Or, if not understand, at least use it. And the Python course must be doing some good; note the highly technical use of “iterating”.
