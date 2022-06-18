---
title: 'A problem shared is a problem solved ... almost'
published: true
date: '18-06-2006 14:21'
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

The Problem: I installed falbum, a plug-in for WordPress that displays photos from flickr within a WP blog. Installation was pretty smooth, although I had to edit the htaccess file by hand. Then I noticed that although the photos displayed very nicely on Safari, the pages looked complete crap in Firefox, Camino and IE.

It seemed obvious that the “bad” browsers were not loading falbum’s specific stylesheet. I later learned, on the TextDrive forum, that the calls to the CSS were receiving a 404 error, page not found, and barfing. For some reason, Safari did not barf, found the CSS and displayed perfectly.

===

I do not know enough to resolve the 404 issue, and nobody on the forums I asked seemed to either. So I determined that I could simply put the falbum CSS definitions into my existing stylesheet, which all browsers did find. They find it, but the display is still a little wonky, with the heading and navigation sections messed up.

So now, I have promised myself the luxury of a couple of hours to sort out the falbum CSS, and I decided to try and document what I did.

Validate the HTML: first problem, an error in the HTML. I am not allowed to have a Title where I have one. But where is that coming from? It seems to be after the falbum section. And that's getting ahead of myself too. Turns out the document does not have a valid doctype. So I fixed that and now I just have 26 other errors. To work ...  

Moved the falbum title replacement above the <head> tag. That was no good, although I do not get the same error as before.

Replaced the WP title line with the falbum title replacement.

Bingo! That gets rid of the title error, and the pages continue to display just fine. 3 errors left.

1. No attribute name. This is something to do with the livesearch option in K2. I've searched there and can find no help.
2. The element "input" is apparently not allowed in the livesearch section of K2.

I’m going to ignore those for now. That’s actually all there is on the photo pages in the way of errors. So I’ll check the main blog page quickly.

25 errors, many of which seem to be related to using a Strict DOCTYPE instead of Transitional. So, a quick change to that and we're off again.

17 errors! Most of those seem to be tagging problems associated with Technorati tags, Blockquotes and the like. I am going to ignore them and get on with the CSS.

Simply sticking the falbum CSS into my theme CSS does a reasonable job. The header block looks ok, but the images have no borders and the font styling is not all that pleasing. The sidebar has also been pushed way down.

A little tweakage has got things looking more or less the way I want them to. Oddly, while Firefox and Camino are now fine, Safari is broken. go figure. Now, of course, I’m thinking that I do not really need the sidebar with blogroll on photo pages. There may be a way to tackle that. And the borders and things round the thumbnails. But right now, I don’t too much care ...
