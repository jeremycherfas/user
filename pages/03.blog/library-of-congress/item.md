---
title: 'Library of Congress'
published: true
date: '19-11-2018 14:30'
taxonomy:
    category:
        - blog
    tag:
        - Photos
process:
    markdown: true
    twig: true
never_cache_twig: true
subhead: ' '
header_image: '1'
summary:
    enabled: '1'
unitegallery:
    gallery_theme: tiles
    assets_in_meta: true
---

Recently I came across a website called [The Eclectic Light Company](https://eclecticlight.co/), which is one of those places that you cannot believe you hadn't visited before. I can't remember who first linked to it, but it is catnip to me; geeky Mac stuff plus a wide appreciation of art and painting, it quickly won a place in my reader and I look forward to it daily.

===

All of which is by way of a throat-clearing justification for this post. 

Skipping through the archive, and what an archive it is, I came across <a class="u-in-reply-to" href="https://eclecticlight.co/2016/04/12/the-story-in-paintings-elihu-vedder/" >The Story in Paintings: Elihu Vedder</a > and recognised the featured image as one I had seen before, gazing down the main staircase in the Library of Congress. I had been absolutely captivated by the decor of the Thomas Jefferson Building when I visited, and took a fair few photos myself. That, and a sort of rennaissance of Flickr, prompted me to look them out and share them there. Then I discovered that it was no longer easy to embed a Flickr slideshow on my website, so I went looking for a plugin, [found one](https://github.com/variar/grav-plugin-unitegallery) and quickly and easily got it working more or less to my satisfaction here.

<div class="gallery-container {{ page.header.class }}">
	{{ unite_gallery(page.media.images, '{"gallery_theme":"' ~ page.header.unitegallery.gallery_theme ~ '"}') }}
</div>

I'm still undecided whether I prefer tiled thumbnails or a slider, but that is easy enough to change. I do have a niggle, which is that presenting information about the photos is a bit topsy-turvy at the moment, but I have raised an issue with the plugin maker and may try to fix it myself when I get a moment.

Much more to the point, [Howard Oakley](http://en.gravatar.com/hoakley) has assembled an astonishing resource, one that will keep me occupied for hours and hours and that has already prodded me to turn up the heat on a little project that has been on the back burner for longer than I care to remember.

Truly, the internet can be a place of wonders.