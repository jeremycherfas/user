---
title: 'My independent drop box'
published: true
date: '18-11-2020 18:00'
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

> I don’t really need to write much here; just enough to make sure that there is something to receive when I go out and try to logon from outside.

And bang, there it is. I couldn’t be happier. Not least because I feel I have dodged several bullets.

===

Let me explain.

For a week or so now, I have been wrestling with what ought, on the surface, to be a relatively simple problem: how can I maintain an independent system that allows me to share a few files between my computers (desktop and laptop) and is also available to me when I am outside my home. I downgraded my DropBox plan a while ago to save money, switching to [SyncThing](https://syncthing.net/) as a way to share stuff. It worked beautifully, more or less invisible, as it should be.

Then the desktop machine had a near-death experience in the middle of an important piece of work, and I realised that I would not be able to pick up the work on the laptop if the machine were truly dead. I have loads of spare hard drives lying around the place, and I had long wanted to play with a Raspberry Pi, so this seemed like an opportunity to play with purpose.

Long story short, I was gobsmacked to see the Pi desktop appear remotely on my main desktop machine. It truly does seem like magic. I reconfigured SyncThing so that desktop and laptop share a read-only folder on the Pi and again, it all seemed to work like a charm. Then came the problem: accessing that shared folder while away from home.

So I started reading up about VPNs and port forwarding and static IPs and a whole lot of stuff. Not just reading up, but installing things willy nilly. Nothing worked, and although it hurt I came to realise that I was completely out of my depth, mindlessly going through the rituals prescribed on the endless pages of the internet.

Step back. Take a deep breath. Stumble through the Wikipedia entry on VPNs and seriously doubt my ability ever to understand this stuff. And then I remembered a throwaway remark by a tech-smart IndieWeb friend as we were both enthusing about SyncThing, to the effect that it could be accessed from outside my network. He confirmed the details, I checked some settings and created a file on the desktop machine, the content quoted up at the start. Came out to the local cafe, ordered a pot of tea, logged on and waited for SyncThing to do its sync thing.

You’re reading the result now.

My tech-smart friend said “syncthing is an absolutely awesome piece of technology”.

I said “Magic!”
