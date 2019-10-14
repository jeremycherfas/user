---
title: 'King content crowned again'
published: true
date: '14-10-2019 19:30'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: "A time of innocence and empowerment"
header_image: '0'
--- 

As part of a project I have in mind, I've started downloading the logs of this site from my server. Looking at them, I'm still surprised by how many pages search engines seem to be looking for and failing to find. Two questions:

1. Where are they coming from? Mostly, it seems, opensiteexplorer.com, which is now moz.com.
2. Why doesn't my nifty rewrite rule redirect as I thought it did? [^1]

===

Anyway, I'm not actually pursuing answers in detail. Instead, I'm using the first three unfound pages each morning as a goad to bring those old pages into the not-so new-anymore site. It was doing that that alerted me to the second point, because after finding the old version and chasing down all the links in it, I noticed that the page does indeed exist, [exactly where it ought be](https://www.jeremycherfas.net/blog/king-content). And looking back, the links on that page, tracked down with the help of The Internet Archive, are a microcosm of some changes over the past 15 years.[^2]

Rex Sorgatz's website is still going, although these days he seems to be putting more effort into [his newsletter](http://fimoculous.com/recs/).

The website he was working on, for NBC's coverage of the Athens Olympics? [What would he make of it now](https://web.archive.org/web/20040703113810/https://www.nbcolympics.com/index.html)?

The $14 steadycam? No longer still there, but [parked](http://steadycam.org/) and "coming soon," complete with fetching person-at-work under construction image. How it takes me back.

The [Italian Stanley Kubrick fan site](http://www.archiviokubrick.it/) is still there too, and on this visit, so was the [English version](http://www.archiviokubrick.it/english/index.html), albeit a little scrambled. Kubrick's [telex about the Steadycam](http://www.krusch.com/kubrick/Q60.html) is still there too.

Saddest, for me, are the demise of "[probably the oldest UK based Poultry Web Page](https://web.archive.org/web/20040603153819/http://www.surrey.ac.uk/~cus1fb/fowl/)" and the glorious [Vasalini's Chickencam](https://web.archive.org/web/20040710085302/https://users.adelphia.net/~chickencam/), offering "A live view of daily life in a chicken yard on the island of Martha's Vineyard. They don't make 'em like that any more.

In passing, I note that both of those sites were members of webrings. The one hosted on Geocities is dead as a Norwegian Blue. The other, remarkably, is [still going strong on Angelfire](http://www.angelfire.com/ar/awwcr/rings.html).

It's tempting to try and draw some overall conclusion, but beyond harking back to a time of innocence and empowerment, I'm not sure I can. Everything that allowed people to make those pages back in 2004 (except the NBC site) is still available to anyone who cares to make something similar.

Go to it. 

[^1]: `RewriteRule ^\d{4}/\d{2}/\d{2}/(.*)$ /blog/$1 [R=301,L]` is the rule in question. Which, I expect, should convert `GET /wp/Archive/2004/07/05/king-content/` to `GET /blog/king-content/`. But it doesn't.

[^2]: I find it pretty hard to believe too.
