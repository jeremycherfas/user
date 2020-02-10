---
title: 'Polishing up tag pages'
published: true
date: '10-02-2020 18:30'
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

At last, after what seems like forever chained to work for money (as opposed to work for fun) I have been able to get back to fiddling with my website. Top priority today was to display a page showing all the posts with a specific tag.

===

The tags were already being displayed at the bottom of each posts, but while some worked perfectly, others gave onto a non-existent page. The problem was clearly the way that my template was constructing the link to the collection of posts and once I sat down with paper and pencil and scrawled a table of what worked and what didn't, it became obvious that all it needed was a change in one line of code.

`<a class="p-category" href="{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>`

had to become

`<a class="p-category" href="{{ base_url|rtrim('/') }}/{{ page.header.taxonomy.category.0 }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>`

The difference is subtle. `blog.url` includes the portion after `base_url` and that was messing things up. By constructing the collection's url myself, using the `category` of the post, it no longer pointed to a non-existent page. Mostly.

In fact, errors did remain, but fewer than before. They turned out to be caused by me being inconsistent about the order of the values of `category` when there is more than one. I edited those and everything works as I want.

For now ...

As a bonus, and for no extra work, I do believe that the tag pages are properly formed h-feeds in their own right, which is nice.
