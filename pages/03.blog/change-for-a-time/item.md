---
title: 'Change for a time'
published: true
date: '12-04-2018 19:45'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Indieweb
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---
One of the difficulties of trying to be IndieWeb is that because there is no One True Way, only a set of useful building blocks, lovingly assembled, when something isn't working well it can be hard to know which bit is responsible for what. I had that problem recently with [micro.blog](https://micro.blog) waiting a long time before a post here appeared there. Then today, a post I published this morning popped up on micro.blog, and I had time to think about fixing things.

It was trivial, but I fixed it. Here's how.

===

Posts here reach micro.blog _via_ an RSS feed. It turned out that the feed contained a dodgy `<pubDate>Thu, 12 Apr 2018 09:30:00 -0700</pubDate>`. That final number `-0700` is the timezone offset, and I wasn't sure where it was coming from. There's no setting behind the scenes of Grav for adjusting the time (as there is on WordPress) but I asked in the Grav support on Slack and they suggested I check my server. Sure enough, `date.timezone=America/Los Angeles`. 

I ferreted around for a bit in my host's knowledge base, came up with lengthy instructions for creating a `phprc` file, discovered I didn't need them because the file was already there, added a single line, restarted everything, and all seemed to be right with the world.

The proof, of course, will be whether this shows up on micro.blog now or in seven hours time. And I still have another problem that isn't going to be nearly as simple, I fear.
