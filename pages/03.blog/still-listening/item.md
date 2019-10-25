---
title: 'Still listening'
published: true
date: '19-04-2019 15:10'
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

A month on, and my little program to [suck up and display the podcasts I have listen ed to](https://www.jeremycherfas.net/blog/sucking-up-the-podcasts-ive-listen ed-to) is working well, but not perfectly. It still sometimes duplicates an entry it has already created, and I have been having a difficult time trying to work out why.

One simple reason for the difficulty is that I do not want to hammer Overcast with requests for my detailed OPML file. There's a rate limit on requests. I have no idea what the limit is, but I do not want to reach it. So, when I think I might have solved the problem, on stored data, I have to wait a day or so to try it against the live data. Occasionally I think I've cracked it, and then it breaks again, and the honest truth is that I have not been able to pin the source of the breakage down to my code or the OPML file I receive.

I've tried working on the stored data to see whether I can narrow the problem down, and that's great, as far as it goes. But, as I said, I have to wait until I've listen ed to another couple of podcasts before I can try it again for real, which makes for slow going.

The difficulty seems to be that Overcast stores whether I have deleted the episode, whether listening is in progress and whether it has been played, each as separate key:value pairs. I don't want things that have been deleted unlisten ed and I don't want things that are still in progress. I only want things that have been played, no matter whether they have been deleted meanwhile. The logic for that is proving trickier than I expected.

Right now, I run the program manually, check for problems and then push the [new posts out there](https://www.jeremycherfas.net/stream). I won't be able to automate it until it has been working perfectly for a week or two, which may be never.

A side effect of all this has been that I have not devoted much time to any other sort of writing here. It being Friday afternoon, maybe I'll spend the rest of it rectifying that.
