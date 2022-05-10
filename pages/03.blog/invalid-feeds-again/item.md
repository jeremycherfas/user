---
title: 'Invalid feeds, again'
published: true
date: '10-05-2022 09:45'
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

Today’s on-this-day post took me back to the heady days of 2004, when this weblog was baked to order by [Tinderbox](http://www.eastgate.com/Tinderbox/) and the RSS feed it generated proved to be [invalid](https://jeremycherfas.net/blog/out-of-my-depth]. I guess I solved it eventually but that post prompted me to check again today. And once again, it does not validate, not [RSS](https://validator.w3.org/feed/check.cgi?url=https%3A%2F%2Fwww.jeremycherfas.net%2Fblog.rss) nor [Atom](https://validator.w3.org/feed/check.cgi?url=https%3A%2F%2Fwww.jeremycherfas.net%2Fblog.atom).

===

The error is the same in both cases, something about a badly formed token in a `CDATA` section of the feed. But what, exactly, is the problem? Is it that there are `<p>` and `</p>` tags in there? Nope, cannot be that, because the first item in the feed has similar `CDATA` and validates just fine. In fact, the only item in the feed that does not validate is one for which I have specified a summary, rather than letting Grav simply curtail the post after x characters.

There is an obvious test. This post will have a defined summary.
