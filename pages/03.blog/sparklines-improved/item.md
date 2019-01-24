---
title: 'Sparklines improved'
published: true
date: '24-01-2019 19:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Sparklines are a Tufte invention to display data almost as a word. I like them, and built them laboriously by hand in the past, for example to track changes in how Board members rated aspects of my workplace's activities. Anyway, having suddenly become aware of an avalance of spam  to WithKnown (which had been going on for a while) I decided to track it and, as an exercise, to [display the data as a sparkline](https://www.jeremycherfas.net/blog/tracking-spam).

===

Kevin's code looks straightforward -- not sure I fully understand, but well enough -- but I could not seem to get it working in Grav. It worked when I called Kevin's `svg` script from his site, but not with mine, no matter where I put it.

Turned out, thanks to Sven and Rose, I was able to find a place for it, in `mytheme/images` and then call it from a new partial that is in turn called from the sidebar partial.

The main takeaway from this being that I need to learn to use the browser's developer tools instead of tearing my hair out.

I then wasted a lot of time trying to build the query in the Twig template, because I thought I had to concantenate the path with the data. But no.

A Twig variable is just expressed as whatever it contains. So the code is: 

````
<embed src= "{{ url('theme://images/sparkline.svg') }}?7,6,3,4,2,23,14,6,2,,2,0,5,10,4," width="100" height="15">
````

No need to contantenate at all. And the benefit of using a relative url is, of course, that it works just as well on the production site.

I did reduce the size of the viewbox, at least until I have more data, and changed the colour of the line to match my colour scheme: `ln.setAttribute("stroke", "#e15e0e");`.

The only tweak I would make now would be to have the data in a separate file and get that into the Twig template somehow.

Sources:

* [SVG Sparklines 2016-04-18](http://www.kevinmarks.com/svgsparklines.html)
* [SVG Basics Tutorials - Scalable Vector Graphics by Hand](http://www.svgbasics.com/)
* [Sparkline Graphics in HMTL5 – Interdependent Thoughts](https://www.zylstra.org/blog/2019/01/svg-sparklines/)
* Possibly useful [SVG Basics Course](https://teamtreehouse.com/library/svg-basics)
