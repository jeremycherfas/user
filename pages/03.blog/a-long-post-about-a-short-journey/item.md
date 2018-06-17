---
title: 'A long post about a short journey'
media_order: snail.jpg
published: true
date: '17-06-2018 16:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Indieweb
subhead: 'Chasing the dream of Micropub for Grav'
header_image: '0'
summary:
    enabled: '1'
---

 ![Snail](snail.jpg){.center}

Continuing my baby steps towards equipping Grav, which runs this, my main website, with a Micropub endpoint, it took me almost half a day to remember where I had got to. And about ten minutes to undo all my good work. Like the proverbial snail, though, I am now a little bit closer than I was, even if I had to drop down a bit to get here. And i (re)learned two important lessons: git; and small steps.

===

The thing is, although I've learned a lot in the past few weeks, it isn't nearly enough to let me build from scratch, and so I am working to adapt Daniel Goldsmith's [nanopub](https://github.com/dg01d/nanopub). He built it for <a class="u-in-reply-to" href="https://ascraeus.org" >his own site</a >, which is a static site that keep all entries as flat files. Grav is not static, but it is similar enough in that it also keeps all entries as a file within a folder. 

Daniel's nanopub cleverly interrogates whatever it receives to decide what kind of entry it should be (article, link, like, repost, bookmark, etc etc) and then decides how to process the incoming data and where to write the resulting file. All his files of a particular type go into a particular folder with a name like `/like` or `/article`. My version of Grav has a slightly more complex structure, with a high-level folder called `/03.blog` or `/05.notes` and inside that are folders that are named according to the slug and that each has the same name. So this post, when it is done, will be called `item.md` and will live in a folder called `/grav/03.blog/a-long-post-about-a-short-journey/`.[^1]

[^1]: That's the simplest version. The folder doesn't have to have essentially the same name as the post title, and the post doesn't need to be called `item.md` but that's how it is, for now.

Before yesterday, almost a month ago, I had made changes that created a folder with the correct name and a correctly formatted file inside that. I was cockahoop. True, the folder was where Daniel's CMS wanted it, not mine. Putting it in the right place was my task for the day yesterday (having spent all week working for money). [^2]

[^2]: A simpler solution would be to put nanopub into the folder that holds Grav, but there are good reasons not to do that. And I think my approach will work better when I come to update the live site.

The first frustration was that the tool I had been using before to send posts via Micropub simply refused to work, and I couldn't for the life of me work out why. It just kept failing. Although the problem was surely at my end, I could not get enough information to troubleshoot. I switched to a different tool, [shpub](http://cweiske.de/shpub.htm). On the face of it this is more complicated, but it is so carefully thought out that with a little thought on my part it is actually much more useful, because it shows exactly what it sends and exactly what it gets back.

I dove back into nanopub and made what I thought were eminently sensible changes that would just change where it created the folder and file. Miserable failure, over and over again. Luckily my Indieweb friends were there with a clue. I had thought I could just give the program a new URL to store the file. But no, PHP needs to have the full path. And there I had to leave things and head for the kitchen.

What I had forgotten to do was to keep track of all the changes I had made in the various files. Things were a real mess. So I restored them as best as I could from before I started tinkering and first thing this morning got myself back to where I had been before I started. Second thing this morning, I made the project a git repository so I wouldn't get in the same mess again.

Then it was just a question of searching, searching, searching for how to make directories and write files to somewhere else on the server. Slowly I came to discover things I had vaguely heard of and not previously used. The most important of these turned out to be `$_SERVER['DOCUMENT_ROOT']` which tells the program where all paths start. I made a tiny little program that would do no more than make a folder and put a file in it, to avoid any complications from Micropub. And with that, and a lot of trial and error, I was able to get where I wanted to be: in the correct folder in my Grav setup.

*Photo by [Pascal van de Vendel on Unsplash](https://unsplash.com/photos/J3pkJFnpDkM).*
