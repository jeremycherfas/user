---
title: 'IndieWeb Camp Nürnberg 2023'
published: true
date: '31-10-2023 17:43'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "... and failure's no success at all"
header_image: '0'
---
IndieWeb Camp and border:none in Nürnberg were wonderful. I had a great time seeing old friends, making new ones and just giving myself over to the whole thing. Well worthwhile, including even the two twelve-hour train journeys that took me there and back. No complaints.

But. Because there has to be a but.

===

I failed miserably in the main task I chose for myself on the hack day on Sunday, which is why I am especially grateful to Jeremy Keith for his timely reminder that it is a really good idea to have a little task that you were pretty certain to accomplish. That I did, on [the day before the hack day, no less](https://jeremycherfas.net/blog/stop-the-linkrot), though it is possible that nobody but me will notice it or care if they do.[^2]

[^2]: On the day itself, I fixed the display of search results here, not that important.

The big task was to fix the way my microblogging machine, [WithKnown](https://withknown.com/), handles maps. There are actually two problems, which may or may not be related. Most obviously, check-ins to a location have not displayed a map of the location since 22 May 2022. And that’s a bit weird because the form for posting a new check-in does show a map that allows you see where it thinks you are. A couple of days ago, however, that map started warning me that the map tiles it displays would no longer be available after today.

I’d known about this for a while. Stamen map tiles have been very up-front about moving hosting to Stadia Maps and I did my homework. According to [the guide](https://docs.stadiamaps.com/guides/migrating-from-stamen-map-tiles/#url-based-migration-steps), the changeover could be as simple as “just” changing the URL from which I requested the tiles. But I also knew how difficult WithKnown’s code is for me to understand, which is why I postponed the changeover to a time and place when I knew that smarter and more experienced people would be available to help: IndieWeb Camp.

## Lost in the Code

I’m quite certain WithKnown’s code makes a great deal of sense to its own developers, but it is a dreadful tangle for a mere amateur to explore. There is precious little guidance in the way of either documentation or comments in the code, which perhaps makes sense for people who work on the code every day, but the sad truth is that nobody is doing that any more. If they were, these problems would have been addressed aeons ago. So, nothing for it but to tie a thread round my waist and go spelunking.

As an aside, Jeremy Keith has also [written about his hack day projects](https://adactio.com/journal/20589), unsurprisingly a lot more successful than mine, and the code he shared is a delight. The comments tell me exactly what is going on, and why, making it possible for even a tyro like me to follow along, no thread necessary.

Anyway, `grep` found what I was looking for in a flash, a call to the old Stamen URL in `tile.stamen.js`. At first glance it looked quite straightforward, assembling the request from a base URL to which were added variables for the zoom, the latitude and longitude, and the type of image required (because different tilesets offer different types of image). Modifying the URL constructor to use the new base URL, however, failed miserably, and looking at the request being sent revealed that it was not what I expected, having a tile “flavor” added to the tile style.

Further digging revealed another function that seemed to offer the opportunity to indicate the style and flavour of the map tiles required, with the flavour added to the style by a hyphen, `-`. The new URL joins the flavour to the style with an underscore, `_`. OK, lets change the join to use that.[^1] Still no change. Maybe something else was adding `-flavor`?

[^1]: A further complication, spotted by my helpers, was that `tile.stamen.min.js` was also present, and rather than re-minify the original file, we edited that too, and that definitely worked as planned.

We looked, but we couldn’t find anything. It certainly wasn’t in the bits that actually build the maps in Leaflet. All very frustrating.

## Options not Offered

A bigger mystery is why WithKnown code includes functions to set the style and flavour of the map tiles it displays. I’ve never seen those options offered to me anywhere. At this point I was desperate, so I tried deleting that whole function; it didn’t break anything, but it didn’t fix the problem either. My guess is that WithKnown’s developers modified an original `tile.stamen.js` just enough to use the single tile source they wanted but left various bits and pieces in even though they made no use of them. Or rather, no use of them that I could find.

At that point I resigned myself to failure, and spent the final 45 minutes of the hack day thinking about my own options. One of the attractions of the IndieWeb in general and WithKnown in particular is that it ought to allow me to take the data I have been so careful to “own” and move it to some other system. I’ve tried to get WithKnown’s export to work before, unsuccessfully, but of course I tried again. After a good long wait, it downloaded an empty file, with no indication that it had run out of time, or memory, or patience. Twice.

Then I started reading up about web scraping and getting the HTML source files (and images) so that I could maybe work on those. Because the source contains microformats it ought to be possible to import them into another suitably equipped machine, like [micro.blog](https://micro.blog). Then I had a few moments of existential doubt. What was so precious about the roughly 3500 posts I had created with Known? Maybe better to cut and run? That does and does not appeal. It would be very, very easy, but it would also somehow negate the point of having used WithKnown in the first place, that the contents was mine to migrate.

## My Solution is Known

I’ve a feeling I am going to keep banging my head against this brick wall for a little longer yet. Step One will be to share this post and see whether I can’t get people who know WithKnown to step up. Step Two will be to keep spelunking through the code to see whether I can trace the complete path from clicking on the location button to the display of a checkin on my site, complete with map.

Step Three I don’t want to contemplate any further. Yet.
