---
title: 'Cleaning up my RSS feeds via the OPML file'
published: true
date: '28-01-2023 12:30'
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

RSS is not dead, never has been, but in recognition of renewed interest, I decided to have a go at cleaning up my feeds. Not getting rid of them, because there is absolutely no cost to keeping a feed hanging around just in case it miraculously springs back to life. But tidying up.

===

[Newsblur](https://newsblur.com/) is my reader of choice, and has been since forever. [^1] It can sort feeds into folders I define, which is a facility I have made some use of in the past, but badly. That is to say, I created entirely new folders that duplicated the feeds from the unsorted All Feeds, and that is now a problem, because although Newsblur does a great job of importing and exporting the OPML files that describe the feeds I am subscribed to, it does not, as far as I can see, have any useful way to remove duplicates.

My approach has been to go through All Feeds each day, moving unread feeds into a folder that I think fits. Then I read them **in their folders**. That leaves some feeds unread in All Feeds. Repeat while unread in All Feeds. That works well, the number of uncategorised in All Feeds dropping from 12 to 4, to 4, to 3. Any day now I expect there to be 0, and when that day comes I will get to work on the OPML file.

My plan there will be to remove the duplicates from All Feeds and remove any remaining feeds to a new folder called something like Dormant. Then I’ll nuke all subscriptions in Newsblur and import the cleaned up OPML file. The result, I hope, will be a bunch of folders that I can employ to make keeping up with feeds more efficient.

At last, the problem: do I deduplicate the OPML file by hand in a text editor? [^2] Or do I attempt to do it programatically, probably taking far longer and knowing that I am unlikely ever to perform such a cleanup again? I mean, there are only 636 of them.

[^2]: There does not seem to be a good online tool to do this with, say, a drag and drop interface. I looked at the exported OPML file in a trial version of [Bike](https://bikeguide.hogbaysoftware.com/) and while the title of the feed showed up, I couldn’t see any of the feed details. I need to buy the full version anyway, so should find out soon whether Bike can do the needful.

[^1]: I do wish it would become more like a [social reader](https://indieweb.org/social_reader). It kinda sorta is, allowing me to share posts I save, within Newsblur, and subscribe to other people's shared posts, but it would be great if it allowed direct interactions with the originating sites. 