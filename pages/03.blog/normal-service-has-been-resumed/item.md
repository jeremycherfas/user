---
title: 'Normal Service has been Resumed'
published: true
date: '19-10-2023 10:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Call that an error message?"
header_image: '0'
---

Thank goodness that’s over. For the past two days I have battled with my online hosting, wasting my time going down several blind alleys until finally, this morning, I got a clear explanation of the problem that was very easy to solve. While not wanting to jinx anything, all seems hunky dory now, so I am writing this as a reminder to my future self and as possible assistance to anyone else.

===

In essence, none of my websites has been working properly since Tuesday morning. That was when I was met with this at eatthispodcast.com:

[![Screenshot of malfunctioning website](screenshot-s.png?classes=center){.center}](screenshot.png)

Made no sense to me, and none of it “worked”. The cancel button did nothing and even when I filled in the data requested nothing seemed to happen. But I had received an email that morning about my site having auto-updated to ClassicPress 1.17.1. Heigh-ho, I asked about it on the ClassicPress support forum and then futzed with my site for a **long** time. Eventually, turn it off and then turn it on again prevailed. I nuked everything except `content` and `wp-config` and restored from a fresh download of ClassicPress. Bingo! I still have no idea what caused the problem, but all was well.

## But not for long

In the afternoon, I went to upload a photo to my microblog and got a very unusual error message, telling to check that my `Uploads` folder was writeable. Well, yes. It is. Always has been. Nothing had changed. But still the error persisted. I gave up for the night.

Then, yesterday morning, absolutely all of my sites were down. Turned out Dreamhost was doing something or other. That took far longer than planned, and at the end of it, when Dreamhost announced all was good, as far as I was concerned, no it wasn’t. 

eatthispodcast.com was back to the enigmatic but useless screen. OK, at least now I knew what to do. Nuke everything and restore from the fresh download. Except that now the upload failed with a completely useless error message: Could not create directory. WTAF?

Off to the Terminal, to discover that I could not create the directory there either. This time the error message was, if anything, even more enigmatic: No space on device.

Into Dreamhost, to discover that while I was using about 100% of the allocated RAM, disk usage was less than 70%. So, what space was there none of? Dreamhost, to its credit, offers a useful article on how to extract information about memory usage, but unfortunately that doesn’t actually tell you how to recognise if there is a specific problem. My guess is that if you know enough to recognise the problem, you probably know enough to extract the information in the first place, but hey.

So, I asked Dreamhost support for help. Late last night, I finally got an answer I could use:

> It looks as if you have hit the inode limit for the machine. As you can see here you’ve used 100% of your inodes.  
> /dev/lvm-pool/custom_default_vps32795—home  1966080 1966080 0 100% /home  
> Your options are to either remove some files (each file/directory = 1 inode) or you can upgrade your plan to the next tier. The next tier’s inode limit is: 3,932,160.

This morning, I was easily able to fix the problem, using some [very useful answers at Stack Exchange](https://unix.stackexchange.com/questions/4105/how-do-i-count-all-the-files-recursively-through-directories). The most valuable is  
`find . -maxdepth 1 -type d | while read -r dir
do printf "%s:\t" "$dir"; find "$dir" -type f | wc -l; done`  
with which I went spelunking through my files. I had an inkling where the trouble would lie, in [Compass’s cache files](https://www.jeremycherfas.net/blog/indistinguishable-from-magic) and so it proved. There were 1,603,205 items in the cache. As I knew they were not important, I deleted every last one of the suckers.

I was now free to restore ClassicPress to eatthispodcast.com and to upload an image to stream.jeremycherfas.net and all was well with my little online world.

Checking, the number of items on my server dropped to 218736 and my disk usage from 67% to 37%. My hope is that next time I will remember to check the number of items before setting off down those blind alleys, but I probably won’t. And alas, RAM is still 100%. I don’t really have a clue how to bring that down.