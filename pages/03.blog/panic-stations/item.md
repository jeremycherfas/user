---
title: 'Panic Stations'
published: true
date: '14-08-2024 10:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "All is well ..."
header_image: '0'
---

Someone kindly mentioned that a link I POSSEd to Mastodon seemed to be broken. I went to check, and was faced with a terrifying screen that told me that my CMS was correctly installed, but no Administrator had been created and would I like to create one. Yikes!

===

The warning was itself a good sign, in a way, meaning that nobody had already arrived to take things over. Blessed is obscurity. Still, I left my tea cooling by the bedside and sprang to. Tried to create that primary user but for reasons unknown CloudFlare was having none of it.[^1] Checked the user accounts and indeed, there were none.

[^1]: Do I really need CloudFlare? Not really sure. To be continued.

I had an inkling what might have happened. Yesterday I solved a local problem with user accounts, which involved deleting them all in order specifically to force the CMS to show me that first user welcome page. And it worked. I created a new user that worked. Somehow, it seems the deletion had been propagated to the live site, which is weird in itself because those files are very specifically excluded from being updated. A problem for another time. As I had created a new Administrator locally, I tried uploading that user’s data to the live site. Blow me if that didn’t solve the problem. All apparently secure again.

I scurried about trying to understand what had happened, and found a line in the CMS logfile that read:

`2024-08-13 05:29:22 [DEBUG] Flex: User index updated, 0 objects (0 added, 0 updated, 1 removed).`

Why that one object had been removed, I have absolutely no idea. As I said, those objects should never be updated from the local site to the production version.

It was, however, gratifying to find a similar line immediately after I had done the needful:

`2024-08-14 08:09:50 [DEBUG] Flex: User index updated, 1 objects (1 added, 0 updated, 0 removed).`

At one level, of course, I am still absolutely baffled as to exactly what happened. At another, I am happy that I was able to fix things.
