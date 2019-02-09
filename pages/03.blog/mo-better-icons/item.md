---
title: "Mo' better icons"
published: true
date: '09-02-2019 15:30'
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

A couple of weeks ago I wrote about [replacing the icons](https://www.jeremycherfas.net/blog/simple-icons-on-grav) that link to my various other web presences. Today I finished the job by swapping out all the font awesome icons I could find. The changes should not be glaring. 

===

The crucial part about this, for Grav, is to place all the icons in a central store and then call them from there using the variables that Grav offers.

I keep all my site-wide images in `user/mytheme/images/`. In order to allow Grav to find them wherever it is, I use a variable to point to that location:

`<img src="{{ url('theme://images/whatever.svg') }}" alt="whatever" height="32" width="32" style="display: inline;" ></i>`

I had intended to use icons from The Noun Project, but in the end I found some others elsewhere. The nice thing about this approach is that if I do want to switch to other icons, as long as I give them the same filename, I don't actually need to change anything else.

Still on the to-do list for icons is a slightly trickier proposition of using an icon to identify a particular type of microblog post. At the moment I am passing the name of a font-awesome icon in the post's front matter. I'm sure I can do the same with any icon I have downloaded, but that's actually a minor issue for my whole micro-blogging system, which now moves up one step on the priority ladder.
