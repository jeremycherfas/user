---
title: 'Getting a better word count'
published: true
date: '11-11-2021 09:40'
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

It is nice to know that <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/learning-by-doing-python" >some of my stuff</a > is being read, and good to <a class="u-in-reply-to" href="https://jamesg.blog/webmentions/2021-11-04-270" >be encouraged too</a >. Before I delve into histograms and the like, though, I think I need to play more with Python's `split` method. This may enable me to remove the front matter from each blog post, in order to get a more accurate picture of how long the actual content is. And it will not be difficult.

===

_Later . . ._ And, indeed, it was not difficult.

Before I could start fiddling about with histograms and NumPy and whatnot, I got very distracted by the duplication of entries from my Overcast scrobbling script. I thought I had understood the logic of deduplicating, but clearly I have not. It is easy enough to do by hand, but that is not an ideal solution. Part of the problem is that the OPML file that Overcast provides is huge and replete with dead podcasts, dead episodes and all sorts, presented in podcast order. What I really want is recently-completed episodes, in date order, but that is proving tough.

In other news: Another encouraging comment was not displaying properly. I have no idea why. To my amazement, I discovered that <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/comments-plugin-fixed" >I had already solved the problem</a > once before, in January 2019. And when I did the fix again, lo, the comment displayed.