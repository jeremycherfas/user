---
title: 'Renaming automated'
published: true
date: '18-04-2022 09:30'
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

For months, I have had to change the name of a file from `access.log.2022-04-14` to plain, simple `access.log` and every time dear old OSX asks me to confirm that I really do want to do that. In a fit of pique, I finally decided to automate the whole process with a tiny little Alfred workflow. Getting rid of the date suffix was easy enough, but I could not seem to get the actual renaming to work. Turns out that in `zsh` you do not use `${clipboard}` but instead use `$(pbpaste)`. 

Who knew? Vitor at the Alfred forums knew, that’s who. Kudos.
