---
title: 'IndieWeb Challenge Day 5'
published: true
date: '05-12-2019 15:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
        - Challenge
summary:
    enabled: '1'
subhead: "Tweaking Wembmentions and Comments "
header_image: '0'
--- 

A brief flurry of webmentions to a recent post reminded me that I needed to look again at how those things are presented. In building the new theme, I had discovered the `<detail>` and `<summary>` elements and used them to hide interactions as the default. I hope most people know that clicking on the triangle will expose something hidden. Ideally I would like to offer different visual presentation depending on whether either webmentions or comments exist. That is not going to happen for a while.

===

I did dig around enough to know that I could do something like that for webmentions, but it would mean becoming a whole lot more familiar with Javascript than I am currently. I also discovered some long-neglected modifications to the Grav comment plugin that would make a few things a lot simpler to do. That too will have to wait.

Instead, I opted to slightly tweak the presentation and to offer a brief explanation of webmentions and of comments. Tiny changes, but hey, it counts.
