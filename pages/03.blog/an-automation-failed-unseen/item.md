---
title: 'An automation failed unseen'
published: true
date: '17-07-2023 09:42'
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

The extremely rickety automation I built to [download and rename logfiles](https://www.jeremycherfas.net/blog/download-and-rename-log-files) collapsed (again) sometime after last Thursday. The failure only came to light this morning when I tried to run Bise, the little analytics program that gives me a high-level view of what kinds of visits my sites are welcoming. Because of the way the server rotates my log files out of existence, it is quite difficult, though not impossible, to recover after more than a couple of days. For now, then, I have given up on stats until I can get home and sort things out. The problem is how to avoid such mishaps in the future.

===

Two options come to mind. The first, and possibly simplest, would be to send myself an email when the little script that downloads and renames the logfiles works successfully (or fails, though that is probably much more difficult). The second is to remove the dependence on my home machine being up and running, which I suspect was the problem this time. Perhaps there was a power cut as a result of the heat, from which the UPS failed to recover. Who knows? In any case, a good solution would be to have that script run on my cloud server each day, either storing the logfiles in Dropbox, as happens now, or storing them locally and transferring them to Dropbox with another script; belt and braces.

I am sure that the second option is actually better, even though it is a bit scarier and would require tweaking the script to adjust the source and destination for `rsync`. There is no way I am going to try, though, because it would surely wreck the remaining days of my holiday.
