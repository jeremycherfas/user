---
title: 'One hamburger on the menu'
published: true
date: '11-10-2020 12:10'
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

For a while now, I’ve known that this website was not fully functional on the small screen of a phone. Although there was the familiar hamburger menu visible up top, it didn’t actually work. The menu it was supposed to expose when clicked was permanently visible and it didn’t actually click. But nobody bothered to mention it, and it didn’t bother me that much.

===

Then, when I read that <a class="u-in-reply-to" href="https://www.rousette.org.uk/archives/using-tailwind-css/" >bsag had adopted Tailwind.css</a > for a redesign, the same framework I use here, I decided to take a look at her site on a phone. And what a lovely little fully-operational hamburger menu she had. 

Well, I thought, what’s stopping me fixing mine?

So I did, and it was quite fun getting back into Tailwind and trying to work out where I had gone wrong. After way too much time, I too had a working hamburger locally on my desktop, mostly shamelessly stolen from bsag, based on the old-fashioned technique of looking at her code and adapting it to my needs.

Excellent. Up it goes to the live site. 

Misery. Although it worked, it looked completely different there. But how could that be, given that I took the templates that were working perfectly well here and merely copied them there?

I find that sort of bug — where things work perfectly well but look different — very hard to track down. Eventually, though, I did find the solution, which turned out to be a difference in the settings of the underlying CMS between my desktop and the live site.

That fixed that, but in making sure I noticed an odd discrepancy between two kinds of page, which should have looked the same. Again, a little tricky to track down but I got there in the end. And with that, I’m more or less happy that this site looks more or less as I would like it to on more or less all screen sizes.

## Coda

bsag, of course, went further than me in adopting Tailwind.css and actually uses the whole Tailwind build process, while I just snag the basic Tailwind stylesheet on the fly. That’s slowing my site down, a lot. I’ve just discovered that I am not using fully 99.7% of the Tailwind stylesheet, so my next task is to extract just what I need. Doing it by hand is probably a lot more likely than any of the more advanced options I have come across.
