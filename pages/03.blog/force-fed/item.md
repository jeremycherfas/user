---
title: 'Force Fed'
published: true
date: '31-12-2024 15:02'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "A plugin overreaches"
header_image: '0'
---

One of the primary reasons to [design a new ClassicPress theme](https://www.jeremycherfas.net/blog/redesigning-one-of-my-websites) from the ground up was so that I would understand how it worked. That, in theory, would make it easier for me tinker and so, by and large, it proved. The last thing I knew I had to do[^1] after it went live about 10 days ago was to add the [microformats](https://indieweb.org/microformats) that would enable feed readers and IndieWeb stuff to make sense of the contents.

It was weird, though. Even before I had done anything, one of the [testing tools](https://pin13.net/mf2/) was reporting both an `h-feed` and each `h-entry` within it. Something had taken matters into its own hands.

Because there were three entries in the feed, I suspected it must be the plugin that I use to show in the sidebar the three most recent posts that are not podcast episodes. My hunch was correct. Ultimate Posts Widget adds `class="hfeed"` to its output, and the microformat parsers correctly interpret that as being equivalent to `h-feed` even though I would rather they didn't.

Fortunately, Ultimate Posts Widget makes it easy to [use a custom template](https://wordpress.org/plugins/ultimate-posts-widget/#:~:text=custom) so I copied the standard template, snipped out the references to `hfeed` and saved it as a custom template.

Job done, and I do believe everything is now working as it should. Just why Ultimate Posts Widget feels it should create a feed is beyond me, and thankfully I no longer need to care.

[^1]: There is certainly more to do, I just don't yet know what it might be.
