---
title: 'Stamping out comment spam'
published: true
date: '24-10-2017 18:01'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
---

It has taken a wee while, but I finally managed to complete a task I set myself in mid-August: <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/reading-coding-and-commenting" >automatic deletion of spam comments</a >.

===

Well, not quite fully automatic. Thanks to the super helpful people on the IndieWeb IRC, I built a simple little PHP script that deletes the file I tell it to. I get the name of that file from the email that my website handily sends me when some poor sap of a human being copies and pastes a bunch of spam into the comment box. With the PHP script working, it wasn't too hard to then build an equally simple little workflow in Alfred that gets the job done.

Of course it is all probably horribly fragile, and works only for me under my peculiar circumstances, but if you want to know the details, leave a comment. Haha.