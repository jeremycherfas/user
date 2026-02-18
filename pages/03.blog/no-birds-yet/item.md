---
title: 'No birds, yet'
published: true
date: '12-02-2026 17:26'
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

Our little terrace is not exactly a wildlife haven, though some birds do occasionally pop in to investigate, most notably some lovely hooded crows. Nevertheless, I quite liked the idea of a 24/7 monitor that would tell me what birds are around and that I could maybe take to the nearby park with me. So the seed of a [BirdNET-Pi](https://github.com/Nachtzuster/BirdNET-Pi) found fertile ground when I read a fine, detailed write-up that explained exactly how to [Set up BirdNET-Pi on a Raspberry Pi Zero 2 W](https://hannahilea.com/blog/birdnet-setup/).

===

The set up itself went remarkably smoothly and I was stunned to discover that the whole thing Just Worked. At least, up to a point. Everything about it functions beautifully; the little Pi always finds my wifi network when it powers on, I can access the website from any device also on the wifi network, I can adjust the settings from the website, although that takes more patience than I normally have. The only downside is that it has not detected a single bird yet.

The reason is simple. The Analyser bit of BirdNET-Pi cannot keep up with the recordings. I think that's down to the Pi Zero not being powerful enough. Hannah, in the write-up I followed, does warn several times: "Your Pi is working very hard to analyze birds and handle website requests at the same time. Have patience!" The Analyzer, however, gives up the ghost if there are more than 200 30-second sound clips to analyse (a limit it took me some digging to discover). And in the meantime, the Recorder keeps on recording.

Once I worked that out, I stopped recording while I deleted thousands of recordings. Still, the Analyzer continued to fall behind a couple of times. Right now it is keeping up, although there are no birds around, so I hope it is having an easier time of it.

The obvious solution is to bite the bullet and buy a heftier Pi, which I will almost certainly do tomorrow. And while I am about it, I have one major desire.

It would be great somehow to be able to automate starting all the core services so that I could start an hour before sunrise. Maybe that is as straightforward as a `cron` job to run `restart_services.sh` at the specified time. That [script says](https://github.com/Nachtzuster/BirdNET-Pi/blob/main/scripts/restart_services.sh) it removes all unprocessed audio, which would help prevent the Analyzer stalling, though I don't actually see that command. I'm probably missing something.

Anyway, for now, I'll keep hoping that eventually my little Pi Zero will in fact detect a bird. Soon.
