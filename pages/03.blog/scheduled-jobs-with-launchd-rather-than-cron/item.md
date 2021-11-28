---
title: 'Scheduled jobs with launchd rather than cron'
published: true
date: '28-11-2021 17:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "I don’t deserve any credit "
header_image: '0'
---

One of the bigger self-induced headaches of moving to a new computer was getting passwordless login to my server working properly. Only after getting rid of all the remnants of my former existence as a User with the same name did this finally become possible. That cleared the way to a slightly smaller headache; restoring to good health the various scripts that copy various thing from my server to a local machine.

I used to use `cron` to do this, even though Apple had deprecated `cron` some little while ago. I had seven little scripts, each of which `cron` recited at the requisite interval, and everything was good, but even after login was working just fine, `cron` wasn’t. I got no joy from `cron` itself and logs, nor from a fancy-dancy thing called cronitor.  I had, a while back, looked at Apple's alternative `launchd`, and deemed it too difficult. But needs must.

===

So I rolled up my metaphorical sleeves and started slowly working my way through Alvin Alexander’s really helpful tutorial [Mac crontab: Creating macOS startup jobs with crontab, er, launchd](https://alvinalexander.com/mac-os-x/mac-osx-startup-crontab-launchd-jobs/). I chose a very simple script that opens a random Zettel, copied Alvin’s example `plist` with my own details, told `launchctl` about my `plist` and was amazed to note that it immediately worked.

So amazed, I went to get a coffee, and returned fo find a new Zettel opened at random every 60 seconds, just as I wanted. All good.

For completeness, I continued Alvin’s tutorial by unloading my `plist` from `launchctl`, logging out and logging back in again. To my delight, there was a random Zettel every 60 seconds. Joy.

## Scheduled Joy

At that point, I needed to think about scheduling. My scripts honestly need to run only once a day. And while I was thinking about that, I also thought how much easier everything would be if there were only one script that handled all seven downloads. First I made a new `plist` that referred to the new script and checked that it worked with one task. Then I added the extra tasks, and when I ran it by hand it did everything I needed. 

Back to Alvin Alexander and his helpful [MacOS launchd plist StartInterval and StartCalendarInterval examples](https://alvinalexander.com/mac-os-x/launchd-plist-examples-startinterval-startcalendarinterval/), which provided a very clear explanation. The essence of it is that you specify a number for the hours, minutes and seconds of the days, months and years, order being unimportant, with a neat feature that if you do not specify a number for any of them, it defaults to all, like `crontab`’s `*`.

I amended my `plist` to use `StartCalendarInterval` rather than `StartInterval`, set it for the top of the next hour, and blow me if it didn’t work, perfectly, first time around.

I could have just written this post up there and then, but I never fully trust myself. So I amended the time to earlier in the morning, which is when it ought to take place, and immediately left on a trip. Next day, to my delight, it had worked. And yesterday. And today. That’s good enough for me

It seems probable that if I ever need to schedule another script, I will now be able to do it as Apple expects. That feels good, even if all I did was follow instructions.
