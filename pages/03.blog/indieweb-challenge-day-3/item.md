---
title: 'IndieWeb Challenge Day 3'
published: true
date: '03-12-2019 10:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
        - Challenge
summary:
    enabled: '1'
subhead: " "
header_image: '0'
--- 


One of the worthwhile things about a commitment like this is that fixing even the smallest thing becomes worthwhile. Today, it was an oddity I noticed in the JSON feed for the site. I noticed it because it seemed that [micro.blog](https://micro.blog/) had not picked up the two most recent posts. In fact it had, but it had given them a timestamp of midnight on the day in question. And I had also switched from the RSS feed, which was throwing errors, to the JSON feed, which wasn't.

===

Turned out the JSON feed wasn't sending the time of the post at all, while the Atom and RSS feeds were. While I was about it, I noticed that the JSON feed also had placeholder text for the `feed_url` link and the `author: url:` link.

A little digging into `feed.json.twig` revealed the placeholder text -- easily replaced -- and the format for `date_published`, not so easy. The challenge is that I do not know exactly how to achieve the format that is offered in what I must imagine is the [ur-JSON feed](https://jsonfeed.org/feed.json). That has  `date_published	"2017-05-17T08:02:12-07:00"`

That looks like a format the PHP manual calls SOAP, but despite fiddling to the best of my ability, I could not reproduce it here. Instead, I copied the formatting from the RSS feed  
`"date_published": item.date|date('D, d M Y H:i:s')`

I suppose I will find out soon enough whether micro.blog deals with it appropriately. Might need to add timezone information.

I also created a [pull request on the plugin](https://github.com/getgrav/grav-plugin-feed/pull/54) to add this information to the `readme`.
