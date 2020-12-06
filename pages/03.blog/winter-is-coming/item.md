---
title: 'Winter is coming'
published: true
date: '06-12-2020 09:55'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: "And I’m ready for it"
header_image: '0'
---

After eight difficult seasons of hot-water bottles and fingerless gloves, I may be about to embark on a comfortable winter. The room in which I work is large, and the heating very poor, and the cost of changing either is prohibitive. In search of ways to heat my body, rather than the space, I came across two suggestions new to me; electric heated throws and far infra-red heating panels.

===

The electric heated throws proved a bust, as all that was available in Italy were full sized electric blankets, and a heated pad on my lap would be as uncomfortable as a hot-water bottle. I did a bit of looking into IR panels, and that seemed a much better idea. I could slot one under my desk where it could radiate to my legs, and my bloostream would do the rest.

In the end the choices on Amazon were too overwhelming and the size I wanted not available soon enough, so I turned to eBay and bought a [Klarstein Wonderwall 360W panel](https://www.ebay.it/itm/Pannello-Radiante-Riscaldamento-Infrarossi-Riscaldante-Termosifone-60x60cm-360W/193495312615?ssPageName=STRK%3AMEBIDX%3AIT&_trksid=p2057872.m2749.l2649). It arrived yesterday, so six days for delivery, and was easy enough to hang on the wall. Switched on, by hand, it seemed to warm up very quickly. But there was a surprise. Apparently, the device is a Thing of the Internet, equipped with wi-fi that enabled it to be controlled from a phone even away from home.

I didn’t really think about this when I bought the thing, although I should have noticed that the image included a phone and app. Anyway, I tried to set it up and it just wouldn’t pair with the phone. Maybe the router was too far away? I dug up an old extender, made redundant by the new router that arrived a couple of weeks ago, and jumped through those hoops. Still no dice. Very frustrated, because with it sitting under the desk, access to the controls would be difficult, I sought help and was quickly plunged into the world of re-flashing and home automation and MQTT and lord knows what else. Head spinning, I spent a disturbed night.

This morning, I had a sudden thought. What if it doesn’t like the fact that the iPhone is on a VPN?

Bingo!

So, if your Klarstein device refuses to pair and your phone is on a VPN, remove the protection. Once it has paired, you can resume the VPN connection and everything still works.

So, here I am, cozy as all get out and ready for winter. Should I be worried about the panel phoning home? 
