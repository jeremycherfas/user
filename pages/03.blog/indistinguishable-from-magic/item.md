---
title: 'Indistinguishable from magic'
published: true
date: '26-05-2022 16:00'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

It has been a week of catching up with technology, hard and soft. And my conclusion is that if you aren’t paying attention it is very easy to be left behind, such that when you do pay attention again, you are completely astonished.

===

Soft first. About a week ago, I was passing our local little Apple-oriented store and noticed that they had an iPad Air 2 in the window at a very reasonable price (or so it seemed). Without doing too much research, and having been softened up by the gift from my mother of her old Mini, I took the plunge. And even though Apple no longer even stock a cover for it, I like it a lot. There’s still plenty to learn, muscle memory being particularly hard to adapt. But the screen size, speed and general capabilities seem to be great.

So, I thought, could it replace my Macbook Air on trips? I read what I could, some of it very out of date, and decided that yes, it could. With a keyboard and mouse and some extra software, it would be good enough. So I started worrying about the extra software, and at some point, as I was starting to get sucked under by the swamp, I realised that the self same RealVNC viewer that I was using to check up on my Raspberry Pi could also control my iMac at home.

Bingo!

No need to jump through all sorts of hoops trying to do the things I normally do sitting at my desk at home while away; I can just do them as if I were sitting at my desk. This is magic. Of course it isn’t (yet) perfect. For one, I don’t seem to be able to summon Alfred with a shortcut (option-space on the iMac) but I fully expect to crack that eventually.

## More for less
A much more trivial problem was solved even more easily. I’ve had problems with my host telling me that I had been running out of disk space, and a few days ago, with work pressing, I just bit the bullet and upped my package. Then, when things calmed down, I started exploring the server using the very handy `du` command, and especially `du --max-depth=1 -h` which gives a human-readable output of the top level in a directory. Ah-ha! Compass, the app that tracks me through space and time, was devoting about 15GB to a huge set of cache files. Having established with Aaronpk that they served no great purpose, I removed them all.

Again, bingo!

![Graph of disk space used on my server, showing a decline from about 27GB to about 12GB after deleting a huge number of cache files](disk-use.png){.center}

I let it settle for a couple of days and then downgraded my hosting package, so that’s nice.

## Flow
As for hardware, the [irrigation timer that keeps the plants on the terrace mostly alive](https://www.jeremycherfas.net/blog/you-can-use-a-gardena-35004-pump-to-boost-irrigation-pressure) through the summer was playing up. Sometimes it worked, sometimes it didn’t; the worst possible kind of fault. In desperation, I opened it up, which wasn’t very difficult, thinking I might be able to fix it and at the very least give the innards a bit of a clean.

My thinking was very much in line with Peter Rukavina's experience [replacing the batteries and converter in a camper van](https://ruk.ca/content/summer-place): I don’t exactly know what I’m doing, but I know enough to try. The big difference, of course, was that although I could see how the inside of the valve operated, I could also see that the rubber was very perished, and I did not have much hope after I re-assembled everything. In that sense, I was not disappointed when it failed utterly to do anything. But there was also no way to get a replacement valve in time, or probably ever.

Down to the giant hardware store, where they had a fine selection of timers, most of which did not allow you to specify when the water should come on. You set the duration and everything and then it does its thing each day at the time at which you started. That’s no good for my purposes, where a smart plug switches the pump on just before the water. There was, however, one that did allow extra programming, and it was about half the price of the original (which of course is no longer available).

When I got it home I was pleasantly surprised by two things. It was very easy to programme, much more so than its predecessor, and with greater flexibility. It also seemed to permit a much greater flow of water. Better performance at a lower price is very refreshing, and the plants seem to agree.

## A great impression
Most remarkable of all, though, was what happened at the dentist. After a long, deep clean — about which I will say no more — the dentist casually announced that he was going to make a digital model of my teeth. He switched on the giant TV above the chair, waved a chunky probe around in my mouth, and there on the screen a 3D model came to life, completely by magic. When that was over he was able to manipulate the model on screen, show me my bite and where the pressure was greatest, point out some dodgy areas and so on. I could barely concentrate because I was just so bowled over by the simple fact of it. This was like those scanners for museum artefacts or archaeological digs or motion capture. Amazing, and no more of those gag-inducing metal trays of cold silicone to take an impression.

What it presages for my teeth will be revealed in a couple of weeks, I believe.
