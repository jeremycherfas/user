---
title: 'Under the Hammer'
published: true
date: '17-01-2026 14:50'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Why won’t the bots just leave me alone?"
header_image: '0'
---

I don’t mind paying taxes. Governments need income to pay for the things they provide, and I am happy to contribute my share, even though I may not agree with everything government spends on and may not personally benefit as some others might. But I find myself fuming mad at what some people call an [admin tax](https://indieweb.org/admin_tax): “the time you spend maintaining your personal site, rather than actually using it”.

===

What has riled me is an ongoing attack by malicious spambots that is continuing to exact taxes for reasons I do not understand and, for that reason, can do nothing about.

This all started [back in October](https://www.jeremycherfas.net/blog/attacked-by-the-evil-empire) with bots abusing my email contact form to send out thousands of emails. After some struggles, I moved this site behind Cloudflare. The bots seemed to give up but they were just regrouping, because last week they started up again in earnest. I did what extra I could in Cloudflare, singling out the worst offenders among IP addresses to face a challenge. In one sense that worked, as they never seemed able to solve the challenge. In another, however, it failed miserably as my host continued to rack up loads of hits that elevated my RAM use (at least, I think that is what is happening) and frequently blocked me even accessing the site to change things.

Eventually I decided to get rid of the email contact form completely from everywhere on the site and even changed the URL of one of the pages that seemed to be attracting the most abuse. Still, the site continues to be hammered, and I cannot understand how. I don’t believe it is scrapers.

![Graph of RAM use over the past 7 days](ram-use.png?loading=lazy)
<figcaption style="font-style: italic;">I’d love to manage my usage; how?</figcaption>


The question I had before — how are the bots evading the honeytrap on the form? — remains unanswered but for now is not relevant. I have plenty of others.

- What is going on?
- Does asking for a non-existent page take much RAM?
- Why is the supposedly strict rate-limiting I set up at Cloudflare not having any apparent effect, and would it be much worse without that?
- What might there be at `/ig.html` that is of such great interest to bots?
- Is there anything else I can do, or must I just wait it out?

There is also the question of logs. The site is hosted by Dreamhost, proxied by Cloudflare. This means that the Dreamhost access logs are essentially empty, and so provide no information. But to get access logs from Cloudflare would cost $20 a month, a tax I am really unwilling to pay. Without logs, even though I don’t have a deep understanding of how to use them, I feel even more stuck.

In a sense, of course, the admin tax is not actually a tax; it doesn’t bring me any tangible benefits beyond having my own domain and online home. Perhaps there are alternatives to my current combination of (paid-for) Dreamhost and (free) Cloudflare that would offer more effective protection. I’d certainly be happy to pay for that.