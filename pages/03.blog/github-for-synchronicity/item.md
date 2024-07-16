---
title: 'Github for Synchronicity'
published: true
date: '16-07-2024 11:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Big files gotcha "
header_image: '0'
---

Moaning about how hard it is to have a laptop and desktop machine perfectly in sync even for things I don't use often, one of my cyber-chums said "Why don't you use git?". A forehead slapping moment. I already use git to share the vital bits of my blog publisher. Of course I could do the same for some of the Python apps I use from time to time. But it had to wait until I got back to the desktop machine.

===

When I did, I quickly discovered that back in 2020 I had left a note to myself on how to convert an existing folder into a git repo. Alas, when it came time to push that folder up to github, github desktop didn't want to know. Resolutely refused to add my new local repo, probably because both `.gitignore` and `.gitattributes` were missing. I cast around a bit and found a variety of incantations. In the end I settled on creating a completely empty repo in github.

```
git remote add origin https://github.com/jeremycherfas/newrepo.git  
git branch -M main  
git push -u origin main
```

That did the trick, except that one dependency was too large, so I was told to use `git-lfs`. That stores the actual large file some other place. For all I know, it only stores one version of the large file that every git account uses when necessary.  [The instructions](https://git-lfs.com) suggest not, and in any case were perfect.

Now to see whether I can make it work on the laptop.

