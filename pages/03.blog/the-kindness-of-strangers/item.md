---
title: 'The Kindness of Strangers'
published: true
date: '21-06-2024 11:33'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Today I am grateful to two individuals who were willing to share what they knew with me, one directly, one very indirectly. As a result of their generosity my podcast is working properly again and I will be able to continue to putter on some design work while travelling this summer.

===

Podcast first. It is an undeniable truth that most of the time there is very little response to any particular episode. Now and then someone might like or repost a promo announcement, and even less frequently I'll get an actual comment. Like a rat on an [intermittent reward schedule](https://en.wikipedia.org/wiki/Reinforcement#Intermittent_reinforcement_schedules), those occasional hits are part of what keeps me going. Anyway, I got a message on the socials from a listener unable to listen to an episode from back in 2015. 

Big positive reward: interest in the massive back catalgoue. Big negative reward: something was broken. It didn't take too much digging to discover that back then links to the audio file used `HTTP://` rather than `HTTPS://`. I changed the one by hand, confirmed that it worked, and then found a plugin that would quickly change the others, all 186 of them! The listener was happy and so was I, though I'm left with the nagging doubt of how many people before discovered that a podcast wouldn't play and did nothing about it. 

! My conclusion, and I do live by this myself, is that it is a good thing to alert a website owner, particularly if they are obviously an individual, to anything that doesn't work as expected. They'll thank you for it.

## Synchronised puttering

The other person I need to thank is Oliver, Swiss Mac User, for his post explaining <a class="u-in-reply-to" href="https://swissmacuser.ch/how-to-sync-mamp-across-multiple-macos-macs/" >how-to sync MAMP across multiple devices</a >.

I will be away from home a lot this summer, and want to continue futzing with a new theme for my podcast website. Right now I can only do that on my desktop machine, and it would be nice to be able to do it on my laptop too and have both be in sync. As I use MAMP to create a computer environment suitable for futzing, I needed a way to have the same setup on both machines. The internet contains lots of possible solutions and after reading a few, Oliver's seemed the most straightforward[^1] and so it proved.

[^1]: He offers a later tutorial on using Docker to achieve the same outcome, but that is a bridge way too far for me.

Oliver used Resilio, while I use Syncthing, and that was the only speed bump on a very smooth path. I had forgotten how to share a folder because my use of Syncthing has been set and forget forever. Eventually I worked out that you share the folder as part of the process of creating it, and once I had done that everything Just Worked™.

Yes, I [bought Oliver (part of) a beer](https://buymeacoffee.com/swissmacuser/c/9981780).