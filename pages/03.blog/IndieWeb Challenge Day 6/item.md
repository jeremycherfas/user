---
title: 'IndieWeb Challenge Day 6'
published: true
date: '06-12-2019 11:15'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
        - Challenge
summary:
    enabled: '1'
subhead: "Faulty logic. Again "
header_image: '0'
--- 

If one is sufficiently slapdash, fixing something on this site each day is more than doable. A couple of days ago I did some work to tidy up the display of Reviews. Deeply fancy logic (not) to check the name of an image file seemed to do what I wanted. I had forgotten, however, that while the name I gave the image file was constant, it respected the file format of the original image file. My logic was testing for only one file format.

===

The fix is reasonably easy. Instead of testing for the whole filename, I strip out the extension and test for what remains. Except I don't. I use a filter to see whether the filename starts with the name I give it. Possibly not as bullet-proof, but it works.

Then I had to add another filter to ensure that I did not display the contents of the page twice. And that seems to work too.

So that's another small win.
 