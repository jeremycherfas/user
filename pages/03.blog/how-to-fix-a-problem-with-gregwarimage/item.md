---
title: 'How to fix a problem with Gregwar/Image'
published: true
date: '30-04-2022 16:15'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Don’t use it"
header_image: '0'
---

There is an IndieWebCamp going on in Dusseldorf, and during a session on the presentation of photos I thought about sharing my own efforts in that department. Then I discovered, to my horror, that search was completely broken on the website, in production and locally, where I tinker with things. Obviously I gave up the idea of sharing my photo pages and tried to work out what was wrong. 

The problem is down to a program called `Gregwar/Image`, which Grav uses to do some clever image manipulation, like cropping and resizing, on the fly. I have had trouble with it before, and indeed Grav has complaints about it going back to [2016](https://github.com/getgrav/grav/issues/983). Before, when I had trouble, I gave up on whatever it was that I was trying to do, claiming that I didn’t use the fancy features anywhere. Turns out I was wrong.

When I looked through all the blog posts here with images, I discovered that nine of them were making use of `cropResize` to change the image on the fly. So, I got rid of each one and — Lo! — everything seems to be working again.

Which is nice.
