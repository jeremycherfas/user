---
title: 'A little fix'
date: '19-09-2018 16:58'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
---

Turned out my faithful followers on micro.blog weren't actually able to follow me. Links from here, as picked up there, were all in a swivet. The first part of the URL was `https` -- as it should be -- but something was adding `:80` at the end of the domain. Not surprisingly, browsers were unable to make a secure connection to an open port. It took a bit of digging to discover that I actually didn't have the faintest idea where the extraneous port information was coming from. But my pal Sknebel pointed me to an [issue on Grav's github](https://github.com/getgrav/grav/issues/1786) and when I performed the magic incantations as set out there, it seemed to have fixed things.

The proof, of course, will be whether this link can be followed once it shows up at micro.blog. I do hope so.
