---
title: 'Styling Subtitles'
published: true
date: '03-03-2025 10:03'
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

The subtitles over at [Eat This Podcast](https://www.eatthispodcast.com) were really tiny, which somehow I had not noticed before. A WP plugin called Subtitles is responsible, and reading the [FAQs](https://github.com/wecobble/Subtitles#frequently-asked-questions) I discovered that it injects its CSS directly inline. To replace with my own CSS I would need to block the plugin’s CSS from loading and then add my own. Simpler, for now, to override the plugin’s CSS by editing line 532 of `class-subtitles.php`. I don’t suppose anyone else will ever need this, so it is more of a reminder to myself if I upgrade and forget.
