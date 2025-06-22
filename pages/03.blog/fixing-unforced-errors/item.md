---
title: 'Fixing unforced errors'
published: true
date: '22-05-2025 14:57'
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

A couple of days ago a strange error on one of my websites suggested I look at `php_error.log` for a deeper understanding of the problem. The deeper understanding eluded me, but I did notice just how many errors there were. I had never before had to pay attention to these things and now I was upset, not least by my ignorance of what to do.

===

The most prevalent error was coming from the IndieWeb section of my podcast website. I asked in the IndieWeb chat and was informed I could probably remove the offending line of code. I did so, it didn't seem to break the site, and that error seems to be no more. So then I thought, why not simply tackle the next most prevalent error.

That was coming from the image-handling code in a different website. I asked Perplexity to fix it and received suggested changes, which I implemented. Again, the site does not seem to be broken, and the error has not occurred in the 10 minutes or so that I have been writing this.

The next error looks more complicated, first because it is coming from WithKnown with its arcane (to me) architecture, and secondly because it seems to involve strings that aren't strings and `htmlspecialchars()`. That can wait a day or two (or until Perplexity resets).