---
title: 'IndieWebCamp Brighton Hack Day'
published: true
date: '26-10-2019 17:30'
taxonomy:
    category:
        - blog
    tag:
        - General
        - IndieWeb 
summary:
    enabled: '1'
subhead: " "
header_image: '0'
--- 

"More tomorrow," I said in [part 1](https://www.jeremycherfas.net/blog/indiewebcamp-brighton-1) and, as usual, life got in the way.

===

Before heading to Brighton I had hoped that my new Grav theme would already be up and running, so that I could use the hack day to smooth things out and use the assembled wisdom to help me get the microformats all fixed up. Life got in the way, a familiar refrain. In the end I dedicated the day to pushing the new theme live, and the result is before you now.

The work was essentially solitary. The only other IndieWeb  person I knew of who was actively using Grav gave up on it (although she is still full of wisdom and helpfulness) and most of the problems I faced in going live were Grav problems, so I just ploughed on.

The core effort was in adapting previous posts to fit the new scheme of things. Mostly, that involved the judicious use of BBEdit's power to do search-and-replace burrowing deep into nested folders, and aside from one or two mishaps, not too hard to recover, that worked out well. By the end of the day, I was able to demo the new theme live. Nothing was broken. I suspect that I was the only person who knew that some things weren't working, and I wasn't going to let on.

I had also hoped to be able to fix the microformats, but there just wasn't enough time. The [h-feed of posts](https://pin13.net/mf2/?url=https://www.jeremycherfas.net/blog/)  works well enough, although I don't myself consume it so I can't be sure. It is missing an author, for sure, and there's a spurious entry for h-full, which is caused by a Tailwind class on the menu list, but I believe most readers will simply ignore that. Individual posts have no e-content yet.

##Glass half full

The theme "works".

##Glass half empty

Lots of snagging still to do, including, in no particular order:

- Add CSS sticky to menu
- Style footnote numbers
- Fix all microformats
- Use icons like &#127911; where appropriate
- Tidy presentation of Search results
- Remove stream from Home and Latest
- Fix styling of text notes in Reviews
- Go through creafully and delete [what I don't need](https://www.jeremycherfas.net/blog/i-dont-know-what-i-dont-need), trying not to break anything
- Rethink `<details>` for comments and webmentions
- Add micropub (hahaha)

##Glass the wrong size

Maybe Grav just isn't the right CMS. But I do like it, and the community. Just wish more IndieWeb types would use it.

