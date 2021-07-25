---
title: 'Displaying On This Day'
published: true
date: '25-07-2021 11:30'
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

Having decided to take a daily approach to filling in the missing posts on this incarnation of my website, I started to think about displaying what I had written on this day in years past. There are all sorts of reasons to do this, many captured by the [IndieWeb wiki page on the topic](https://indieweb.org/on_this_day).[^1] For me, it is partly simply to remind myself of things past. Undoubtedly there will be some negative things in there, but they’re mine, and I own them.

===

Anyway, the challenge was essentially technical. Each post here carries the date when it was written, in the form `25-07-2021 11:30`. I need to sort through all the posts, looking for those that match day and month, but not year (ignoring time completely). For too long, I floundered about thinking that the date was actually a `date` date; it isn't. It is a string. Once I realised that, after a bit of rubber ducking, it made everything much easier. 

I need to extract the first 5 characters of the date for the post being displayed and the first five characters of the date of every other post; if they match, display what I want from that post, if they don't, do nothing. If there are no other posts on that day of the month, display something to that effect, rather like the “This page deliberately left blank” of yesteryear.

The CMS I use is called Grav, which in turn uses Twig as its templating engine, and Twig provides all the necessary logic to do the job. 

In the end, this is what I came up with:

````
{% set targetday = page.header.date | slice(0,5) %}
{% set mycount = 0 %}
{% for p in my_collection %}
{% set myday = p.header.date | slice(0,5) %}
{% if myday == targetday and p.header.taxonomy.tag[0] != 'podcasts' and p.header.date | slice(6,4) != page.header.date | slice(6,4) %}

ALL THE OUTPUT GOES IN HERE

{% set mycount = mycount+1 %}
{% endif %}

{% endfor %}

{% if mycount is same as(0) %}
<p class="text-center">I didn't write anything.</p>
{% endif %}
```

By way of further explanation, in the line `{% if myday == targetday and p.header.taxonomy.tag[0] != 'podcasts' and p.header.date | slice(6,4) != page.header.date | slice(6,4) %}` the second element eliminates notes on podcasts and the third element eliminates posts in the same year. That means that if I have written two posts on the same day (as I have today) neither will show when you're looking at one of them. I think that’s fine.

[^1]: Though it does perplex me a bit as to why it devotes quite so much space to silo examples. Still, I'll go and add myself to the examples once this has been posted.
