---
title: "Grav proves it: There's always something else"
published: true
date: '17-10-2018 09:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Fix one thing, break another"
header_image: '0'
--- 

Grav, the software that powers this website, has a nifty feature. It will automatically number things for you, which is handy to set the order of things on a page. It also allows you to change the order by just dragging the things around. But once you have more than 200 things, it gives up on that. Which is absolutely fine, don't get me wrong. But it isn't appropriate for a weblog.

===

I didn't realise that when I first moved to Grav, and so I allowed it to number things for me. That became pointless though once I had exceeded the limit, so I started doing without. But then there's a mix of numbered and unnumbered things, and that grew increasingly annoying. So, after making enquiries, yesterday I just got rid of all the numbers. And everything seemed fine. I also updated to the latest version of Grav, and everything seemed fine after that too.

All of which is a long preliminary to the fact that, of course, everything was not fine.

My chums on micro.blog alerted me to the fact that [an error I had fixed](https://www.jeremycherfas.net/blog/a-little-fix) back in early September had resurfaced, because it had not been fixed in the updated Grav. That was easy enough to repair again, thanks to others having shared their work. The fix, however, revealed that something was not well among the denumbered things.

Two posts that I knew were old posts popped to the top of what ought to be a chronological list. That's because of another nifty feature of Grav: if you don't explicity set a date (as you would normally for a blog post) then it just uses today's date. But here's the thing. Because those posts did not have an explicit date, I did not know the date on which I had published them. I searched around and was able to make a bit of a guess, but I am sure I am way out. And that is because of another weird quirk of Grav's.

For some reason best known to itself, it often changes the date on which something was created and modified, even though it was not modified at all. I guess this is something to do with the way it keeps things neat and tidy, but it means that if I have not explicitly set a date, I have no way of knowing when it was originally written.

Heigh ho.