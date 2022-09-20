---
title: 'Converting straight quotes with Alfred'
published: true
date: '20-09-2022 14:20'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Smarten up over there"
header_image: '0'
---

[Get the Alfred Workflow](https://github.com/jeremycherfas/alfred-smartify-quotes)

I write these posts in Byword, and they come to you *via* the Grav CMS. Each post has a front section that tells Grav how to deal with it. Straight quotes — " and ' — are needed there to enclose certain items. Curly (*aka* smart or typographical) quotes — “” ‘’ — in the front section break everything. Obviously I know how to type smart quotes, but it is extra work and luckily Byword has a switch that will ensure that all quotes are either straight or curly. The problem is, I often forget to flip that switch, so everything breaks. Pain.

===

You might think someone would already have solved this problem, but although the reverse, curly to straight, is common (I suspect both because it is much simpler and because coders hate curly quotes), straight to curly is not. I asked around, and Stephen Millard, Automator Extraordinary, pointed me to a post by [Dr Drang](https://leancrew.com/all-this/2010/11/smart-quotes-in-javascript/). Oh no! JavaScript. And here’s me just beginning to get to grips with Python. Of course, one of the great ways to get to grips with a new language is to translate something into it, so that is what I did, taking full advantage of Drang’s logic.

After a couple of hiccoughs it worked, at least from the command line.[^1]

That’s a faff too far though. Surely I could use Alfred to do an even more automatic job. And I could, again after some ~~plagiarism~~ research and a couple of hiccoughs.

This is the first thing I’ve made in Alfred that might just possibly go beyond an intensely personal itch. So, yes, I am sharing it [in the Alfred forums](https://www.alfredforum.com/topic/18992-smartify-quotes/).

[^1]: Note to self and other readers: How do I get the script to remind users that they must end multiline input with CRTL-d?
