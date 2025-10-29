---
title: 'Attacked by the Evil Empire'
published: true
date: '08-10-2025 16:55'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Пошел ты, спам-боты"
header_image: '0'
---

Yesterday arrived with an onslaught of Russian spambots abusing the comment form here, and nothing seemed able to stop them. Cloudflare worked, then it didn’t. Slightly panicked here, I might have slowed the flow by adding a block on 11 IP ranges. And still they seemed to keep on coming through. I appealed to Cloudflare, and they told me that despite my dashboard there advertising that I was now being protected by Cloudflare, in actual fact I was not, because my nameservers etc. were at Dreamhost.

Previous engagements meant that I could not continue yesterday, probably just as well because I am sure in my stressed state I would have made some ghastly error and destroyed everything. An exhausting time, for sure, but I was somewhat encouraged that the bots seemed to stop at around 18:10, with a single salvo at 19:41.

They got going again early this morning, between 03:28 and 06:37 local time, during which they managed to send more than 4000 emails, almost 3 per second. OK, not crazy, but quite an onslaught, and coupled with yesterday’s 5000 or so was enough in a 24-hour period to get me locked out of my email provider. Strangely, the bots seem to have figured out a way to bypass (or solve?) my honeypot challenge. And some of them seemed to slip past my quickly implemented roadblocks.

Dreamhost was sympathetic, but all they could offer was to get properly behind Cloudflare. Once upon a time, Dreamhost itself made that easy. No more. Nothing for it but to sit down and do the needful.

Which I think I have now successfully done, slowly, with many false steps and a great deal of trepidation, and fingers crossed not to be jinxing the effort. The big takeaway was how “professional” Cloudflare’s instructions are compared to Dreamhost’s. My impression is that anyone can follow instructions at Dreamhost, while at Cloudflare it really helps to know exactly what they are talking about. Dreamhost holds your hand. Cloudflare treats you like a grownup. In the world of IT maintenance, I am not a child, and nor am I fully grownup, but I think I got there.