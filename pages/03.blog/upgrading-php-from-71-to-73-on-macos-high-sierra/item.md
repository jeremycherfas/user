---
title: 'Upgrading PHP from 7.1 to 7.3 on macOS High Sierra'
published: true
date: '06-08-2021 15:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Payin' that sweet admin tax"
header_image: '0'
---

It’s no secret that I know just enough to be a danger to myself. My latest problems surfaced when I tried to build a new theme in Grav, and was told that my version of PHP was too low. This despite the fact that MAMP happily uses PHP 7.4.16. I understand that Terminal on the Mac does not necessarily use the same version of PHP as MAMP, and spent an utterly frustrating day trying a whole slew of things to either persuade my Mac to use the same version as MAMP or to upgrade PHP on my Mac. Neither worked, and I realised I had got into a terrible muddle with $PATH. After another frustrating few hours (and I should say that during all this some people on the Grav Discord were incredibly helpful, despite the problem really being nothing to do with Grav) I had to give up. Today, I took up the task again, having spent a bit of time researching $PATH.

===

After lots of searching online and in my various hidden files, I was a little wiser.[^1] I know that I had in the past used brew to install PHP 7.2, but wasn't sure where it lived, and researching that led to some understanding. Still, brew absolutely refused to install 7.4 or 7.3 and I was beginning to give up. I did a final bit of searching, and turned up [this video: Upgrade the latest version of PHP to Mac 2020 Using Unix Bash](https://www.youtube.com/watch?v=-SlI_FoIDJg), from Hell Buddy Solutions, a name that gave me pause.

I watched through quickly. It referenced [PHP for OSX](https://php-osx.liip.ch/), which I had seen before in other online guides. I watched through again. Despite the site saying that the package was now deprecated, the instructions in the video seemed clearer than any others I had come across, so I decided to give it a go, stopping and starting my way through to the end.

Dear Reader, it worked.

There were a few unanticipated wrinkles that needed ironing out, but I now have a version of PHP running that Grav is OK with. Not only that, but [Grav's built-in server](https://getgrav.org/blog/using-builtin-webserver) means I don't actually have to use MAMP for that any more. I added a quick Alfred snippet to do the needful and launch it, and everything is now good to go.

Eventually I will probably have to upgrade to 7.4, and sooner rather than later, and 8.0 pretty soon after that, but for now I am happy enough. And maybe the large screen M1 iMac that I am patiently waiting for will arrive first. That would be a treat.

[^1]: The answers on this [Stack Overflow question](https://stackoverflow.com/questions/15872666/how-to-remove-entry-from-path-on-mac) provided a very useful list of places to look.
