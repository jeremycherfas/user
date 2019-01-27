---
title: 'Simple Icons on Grav'
published: true
date: '27-01-2019 16:45'
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

Almost a year ago, on 13 February 2018, I left myself a note to use [Simple Icon](https://simpleicons.org/) SVGs instead of font-awesome right down at the bottom of my home page, where I link to a bunch of the other online places that are "me". Now I've done it.

===

At first I planned to modify the About Me plugin to do the job. I gave up on that because it seemed overkill. (And hard.) The plugin had given me the HTML, and all I really needed to do was to use that as the foundation of a new partial template `about.html.twig`. I edited the HTML to use the icons I had downloaded, and then I call that template (instead of the About Me plugin's partial template) from `recent.html.twig`.

I'm quite pleased with how it looks. I even managed to snag the pnut icon. Now to think about converting the other icons scattered about the place, probably using images from [The Noun Project](https://thenounproject.com/).
