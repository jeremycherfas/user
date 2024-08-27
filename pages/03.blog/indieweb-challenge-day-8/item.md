---
title: 'IndieWeb Challenge Day 8'
published: true
date: '08-12-2019 18:45'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
        - Challenge
summary:
    enabled: '1'
subhead: "More faulty logic "
header_image: '0'
--- 

Eventually, perhaps, I'll learn to think things through properly, but for now it seem that trial and error just leads me to more errors and more trials. My [improved logic](https://www.jeremycherfas.net/blog/indieweb-challenge-day-6) for detecting whether a post was a Review or a Listen failed to detect that it was neither of those things. As a result, those pages were having an empty image thrust upon them whether they wanted one or not. Now fixed.

But now I really need to work out why pagination has stopped working entirely. Something about how Grav handles a collection based on a category, I'm sure, but what?
 