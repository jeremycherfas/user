---
title: 'Bise workflow'
published: true
date: '15-03-2020 15:57'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Manual till it hurts"
header_image: '0'
--- 

It has been three weeks now since I first [ran Bise on my logfiles](https://www.jeremycherfas.net/blog/statisfaction) to see who and what had been popping in here to take a look. It’s a bit of a faff, for a whole variety of reasons, which start with my host keeping only a couple of days worth of logs. That means I have to download the logs daily. And my host’s naming convention is different from the one Bise expects. Rather than play with Bise, it is easier to rename the files. And then there's a whole lot of to-ing and fro-ing.

===

Anyway, although it seems complex, in that there are many steps, those steps individually are not too arduous, so I am happy to go through them manually. Ultimately, of course, it would be great to automate everything and have it Just Work™. 

Until then, and with a view to helping me understand what automation would entail, here is my ...

## Bise workflow

1. Is it Sunday afternoon?
2. Open A Better Finder Renamer 11, where there is a preset called `bise logs`
3. Go to `/Users/jeremycherfas/Dropbox/jcn-logs`
4. Copy 14 items
5. Go to `/Users/jeremycherfas/bise/jcn-logs`
6. Paste 14 items
7. Rename most recent log file, e.g. `access.log.2020-03-14` to `access.log`
8. Drag 13 dated access logs to ABFR 11 and Rename All
9. Open `/bise` in Terminal
10. Run `/Users/jeremycherfas/bise/bin/bise jcn-logs/access.log*`
11. Marvel at the data returned
12. Select and copy data from Terminal and append to file `jcn-logged.md`
13. Select all `access.log` files and move to a new folder labelled 2020-03-15
14. Go to `/Users/jeremycherfas/Dropbox/jcn-logs`
15. Select 7 oldest files and delete them
16. Wait until next Sunday and repeat.


