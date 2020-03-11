---
title: 'A complete mystery, mysteriously solved'
published: true
date: '10-03-2020 18:30'
taxonomy:
    category:
        - blog
    tag:
        - General
header_image: '0'
summary:
    enabled: '1'
feed:
    limit: 10
subhead: 'My keyboard went bananas'
---

Yesterday, I came home from a walk, during which the person who helps clean the house was cleaning the house, to discover the groovy lights under my keyboard breathing heavily. 

I have never shown the slightest interest in the groovy lights under my keyboard. I’m not even sure I knew they existed. This was odd.

===

![A broken orange keyboard covered in dirt](broken-keyboard.jpg){.center} 

The keyboard, I should add, is a delight, a Varmilo VA87/Mac. I know it can also be switched for use on Windows, but I had never done so, and the manual in English is sketchy at best. I tried a couple of things, and nothing worked, and I hated the lights shining up at me every time I looked down.

Then I noticed that my keyboard shortcuts weren’t working. I don’t have many, but the ones I do have I love, and they’re firmly embedded in muscle memory. So that was a drag. Worst of all, `⌘-TAB` no longer allowed me to cycle through open apps. In fact, `⌘` didn’t seem to be working at all.

There were other strangenesses too, none of which made any sense. I was floundering. I uninstalled and reinstalled various things. Logged out and logged in again. Even shut down and restarted. Changed back to the old keybaord, and it worked perfectly. Nothing. Online searching turned up a load of sites that didn’t help me, until I found [Fix keyboard input not behaving properly in OS X](https://www.cnet.com/news/fix-keyboard-input-not-behaving-properly-in-os-x/) on CNET. And that contained this very salient piece of advice:

> [T]he first thing to do is determine if the problem is happening in your user account (a step that is part of a basic troubleshooting routine).

Duh. I should have known I was missing something simple. So I cranked up a new user, logged in, and everything worked as expected. So, it **was** a problem with my user. I ritualistically went through most of the other steps in that article, and finally lit upon the idea of using the keyboard viewer to see what was going on. (I had tried using Karabiner-EventViewer but to be honest, it offered a bit too much information.) It turned out to be relatively simple. ⌘ and ⌥ had somehow got inverted -- I still don’t know how -- and after a bunch of back and forth, things now seem to be how they were yesterday morning. Which is nice, not least because it will save me having to relearn all that muscle memory.

I still have no real idea what happened, or what actually solved the problem, but I do think I am going to unplug the keyboard, or even shut down, next Tuesday morning.

!!! Photo by [lost places on Flickr](https://www.flickr.com/photos/places_lost/30187853255/)
