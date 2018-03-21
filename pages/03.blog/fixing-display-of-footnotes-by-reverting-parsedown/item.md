---
title: 'Fixing display of footnotes by reverting Parsedown'
published: true
date: '21-03-2018 11:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
subhead: ' '
header_image: '0'
summary:
    enabled: '1'
---

An update to Parsedown, one of the packages that Grav uses to process Markdown, broke the display of footnotes and image captions. The update was necessary for security reasons that I don't understand, to do with processing HTML, I believe. While the Parsedown people are working on a proper fix, it seemed OK for me to revert to an earlier version as long as I am the only person adding footnotes and image captions, and as long as I trust myself not to do malicious stuff.

Andy Miller graciously provided a step-by-step:

````
1. Edit composer.json in the root of Grav
2. Remove the security checking dependency: "roave/security-advisories": "dev-master"
4. Edit the parsedown entry to force the last pre-security fixed version: "erusev/parsedown": "1.6.4"
6. From terminal run `composer update --no-dev`

Job done.

````

And indeed it was, locally. On the live server I ran into trouble because Composer was not installed, and wouldn't install because the `.phar` extension was missing from my PHP. Fiddling with `php.ini` on DreamHost was more than I bargained for this morning, so I just uploaded the changed  `composer.json` file and the `/parsedown` folder and hoped for the best.

It worked there too, so I am very happy. I hope I haven't created problems for the future.
