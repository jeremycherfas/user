---
title: 'Posting photos with a photo post'
published: true
date: '28-01-2022 08:30'
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

A new template I built for this site will, I hope, both display photographs attractively and encourage me to take and publish more pictures.

===

I used to take lots of photographs with my “proper” camera and even shared them publicly here and on [Flickr](https://www.flickr.com/photos/jcherfas/). Neither has happened much for the past several years, a combination of the ease of taking pictures with the phone, the difficulty of posting them here, and my general lackadasiacal attitude. I’ve wittered to myself and sketched ideas for how I would like to present images on the screen, but failed to do much about it until a week ago. That’s when we set out for a proper walk in the country, and I decided to take the camera as well as the phone.

The pictures weren’t that great, but I resolved to make more of them, here first, then maybe on Flickr. A key inspiration is the way Phil Gyford displays photos. Some of his landscape (orientation) images are wider than the text column and centred while others are the same width as the text, a look I find very pleasing. I also took some inspiration from [tufte.css](https://edwardtufte.github.io/tufte-css/) and how that handles images of different widths. While I was about it, I discovered that Grav can automagically handle responsive images for different resolutions, which made life a whole lot easier and also, in some respects, a whole lot harder.

The issue is that although Grav’s image handling is based on a particular Markdown string, it does not go the whole hog and wrap the `srcset` in `<figure>` tags. I don’t know why not, although I plan to dig deeper to find out. That means I need a peculiar mix of HTML and Markdown in the file, which can be a bit of a faff.

Another tweak I am happy with is loading the photo stylesheet only if the photo template is being used. A minor saving in the overall scheme of things, but I am sure now that this approach could be used to speed things up more generally.

Anyway, I am pretty happy with [the result](https://jeremycherfas.net/blog/a-walk-near-monteflavio). A couple of choices slowed me down, but once I decided that a photo page did not need a sidebar, the look came together quite quickly. I like the very pale gray background to the whole page; it sets the photos off well and subtly says this is a different kind of post. I have not yet designed for image sizes less than the width of the text column which might be appropriate for the route map. I’m thinking probably a third of the width.

An interesting extra effect has been to make me think more about presentation in general and the home page in particular. I wanted to publish a photo page before I lost the impetus of the walk it records, so I did nothing about how it looks on the home page. I don’t hate it, but I don’t love it either. I need to think harder about how a photo post might work on the home page. There is probably a way to have it use the photo template there too. And in the list (and feed) of recent posts, maybe an icon 📷 in front of the title (like Listens) to indicate a different kind of post. Still on the list, I’ve long wondered whether I need an explicit “Continue reading” reading link, or whether I should trust visitors to know how to operate.

All of which is to say, this whole website remains a work in progress, and one on which I have now made some progress.
