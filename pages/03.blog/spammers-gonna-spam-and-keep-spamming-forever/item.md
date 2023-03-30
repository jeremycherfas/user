---
title: 'Spammers gonna spam, and keep spamming, forever'
published: true
date: '30-03-2023 16:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Yes, but why?"
header_image: '0'
---

# Top Few

A few days ago, I [shared some tribulations](https://www.jeremycherfas.net/blog/tracking-an-illegal-byte-sequence) related to looking at the most popular requests to my websites, starting with all requests to Eat This Podcast in 2022.

Of the top 50 resources requested, only 14 were actual  episodes or articles. The rest were technical, behind the scenes things, like various flavours of feed and some of the (locked) doors that give access to the engine. I know why people keep rattling those doorknobs, but I wish they wouldn’t.

I had hoped to see whether any meaning could be gleaned from them, but that will have to wait, because at the start I was staring at a mystery.

===

Way, way out ahead of every other meaningful page is an episode on The Evolution of Food Culture in Mali, with 264,194 requests. The next most “popular” had just 38,391 in 2022. I had absolutely no idea why the Mali episode was requested so much more often, and I wanted to try and find out more.

I used `grep` to copy all lines that contained `the-evolution-of-food-culture-in-mali` to a new file for deeper digging.

`grep "the-evolution-of-food-culture-in-mali" totals-2022.txt > mali.txt`

Using the same Topfew technique to sort by popularity, this time looking at where the requests were coming from, the vast majority were from a Russian server registered in St Petersburg, with most of the rest coming from Vyksa, Nizhegorodskaya oblast in Russia. I still have no idea why. Can’t just be rattling doorknobs. Can it?

Then I noticed that a lot of the requests were for URLs of the form `https://www.eatthispodcast.com/the-evolution-of-food-culture-in-mali/#comment-nnnnn/`, with that 5-digit number constructed seemingly at random. In fact that page has no comments, but WordPress does not balk at the URL; it just ignores everything after the `#` and delivers the page as normal. Again, though, there’s something strange going on because one particular 5-digit number appears 2000 times more often than the next most popular.

At this point I was really none the wiser. Some cyber-chums suggested that they might be checking up on spamming software, to see whether they got through or how quickly they were deleted. And lo, the Mali post for some reason had, as of yesterday, 104,203 spam comments. The next most popular post also had a huge number of spam comments, and then we were down in the realm of somewhat normal numbers. I asked around and the consensus view seemed to be that it would be fine to just delete those spam comments permanently, so I did just that. And not only the ones from the offending servers, but all spam comments, because that was much simpler than waiting for WordPress to do them 500 at a time. (In passing, the ratio of spam to non spam was about 1200:1.)

Although I now understand what was happening, I’m still no nearer understanding why spammers continue to hit particular posts  where they have never had any success. I have to assume that there is just no cost to them. And there’s probably not that much cost to me, but I feel like a teeny little pushback is a worthwhile effort.

! As a happy coda, the Topfew exercise on just the past two weeks reveals that episode No. 1, which in its roundabout way led to last week’s 10<sup>th</sup> anniversary episode, did in fact show up, which proves something or other.
