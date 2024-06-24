---
title: 'Better synchronised puttering'
published: true
date: '24-06-2024 19:30'
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

Alas, I failed to properly test my spiffy new [synchronised puttering](https://www.jeremycherfas.net/blog/the-kindness-of-strangers) set-up, and it did not Just Work™. The part involving MAMP did work, but not the puttering, because the URLs for the site are hard-coded into the SQL database. Having transferred to a new local URL, nothing other than the bare HTML displayed and nor could I log in. I figured that out on my own, using phpmyadmin to edit two rows in the cp_options table — siteurl and home — to reflect the new URL.

That allowed me to login, which let me see that that links to images no longer worked. They too use the old URL scheme, but there is no one specific place to change it. I have to change every instance of an absolute internal link. ChatGPT to the rescue again, with the correct SQL incantation.

`UPDATE cp_posts SET post_content = REPLACE(post_content, 'http://localhost:8000/ClassicPress-release-1.5.2/wp-content/uploads/', 'http://localhost:8000/MAMP-htdocs/ClassicPress-release-1.5.2/wp-content/uploads/');`

That succeeded; of course it did, and now I can see the images and carry on puttering.
