---
title: 'Distinguishing my machines'
published: true
date: '08-06-2024 15:07'
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

I was away much of last week, using my laptop rather than my desktop machine. I have a little Alfred workflow that helps me blog by creating a properly named folder in the correct place and moving a draft post into that folder before publishing. Trouble is, the correct place is slightly different between the desktop and the laptop. Until now, I have had both destinations hardcoded in the workflow, with the "wrong" one commented out. The theory is that before I write anything after switching machines, I edit the workflow to change which destination is wrong. In practice, I inevitably forget. 

So, after that happened this week, I resolved to sort it out. Each machine has several identifying characteristics. Surely I could use one of them to control the workflow. And I could. ChatGPT offered me five different ways. I chose the one that actually uses the name I gave the machine: `scutil --get ComputerName`.

About two minutes later -- certainly less time than it took to write this post -- the modified script was working beautifully. Plus One for better automation and ChatGPT.
