---
title: 'The Internet Archive made more useful'
published: true
date: '16-09-2021 08:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "A workaround for the trigger-happy Firefox extension"
header_image: '0'
---

The Internet Archive is a wonderful resource, one that I am happy to support whenever I can, precisely because it allows me to find copies of things that have vanished from the actual internet. To make life even easier, there is an official extension from The Internet Archive that makes saving and finding things a snap from my browser (Firefox). Lately, though, I have been increasingly bothered by the extension’s hair trigger splash screens. Even before a site can possibly have loaded, let alone returned a 404 error, the extension tells me it is unavailable. And often it messes with the back button too so that I have no way of getting back to the page I was looking for.

I put up with this for a while, and asked around, but none of my limited circle of cyber-chums had seen anything similar. I inactivated the extension.

Today, faced with a slew of lookups, I went to re-activate it, and on a whim decided to [look at the reviews](https://addons.mozilla.org/en-US/firefox/addon/wayback-machine_new/reviews/?utm_source=firefox-browser&utm_medium=firefox-browser&utm_content=addons-manager-reviews-link). I am not alone, it seems. Many people have just given up on it.

My temporary solution is to create two snippets (in Alfred) that ask Internet Archive to save or find a web page.

- `.iaf` consists of `https://web.archive.org/web/{clipboard}/`
- `.ias` consists of `https://web.archive.org/save/{clipboard}`

If I don't have the URL in the clipboard, it is easy enough to fix that bit manually.
