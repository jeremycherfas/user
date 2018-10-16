---
title: 'Open Sores'
published: true
date: '13-01-2004 00:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
process:
    markdown: true
child_type: default
routable: true
cache_enable: true
visible: true
header_image: '1'
summary:
    enabled: '1'
    format: short
---

Not  an entirely fair title, I grant, but I may be experienced the first pangs of remorse after an on-going fling with open source software. The task has been to implement an image bank on my work website, in spare time and with no money. Clearly a job for open source. The site itself runs on [Nucleus](http://www.nucleuscms.org/), which really is a rather good open source content management system. [^1] And some Nucleus enthusiasts have implemented a kind of photoblog on their sites. But I need much more functionality than those seem to offer.

===

[^1]: Alas, now dead. But it was a good introduction for me.

After searching through the available offerings I settled on one, [4images](http://www.4images.de/), that seemed to have everything I needed.[^2] There was, however, one big problem: metadata. One of the crazed things about most image libraries (even, whisper it, iPhoto) is that they don't make nearly enough use of the facility to embed information about the image within the image file itself. This metadata, often called the IPTC tags, stores crucial information about the information, including useful stuff likes captions, copyrights and keywords.

[^2]: Still going strong, apparently.

The beauty of the system is that once the data have been embedded in the file they stay there until someone willfully removes them. And lots of applications, notably Photoshop, can read the information. So no more scrabbling around in search of credit or caption to go with an image. If you send someone a file with IPTC data in it, they probably have all the information they need to use the picture properly.

Very few of the gallery packages I have looked at deal well with IPTC tags, and alas 4images is no exception. The IPTC standards say clearly that keywords can contain letters (_sensu latu_) **and spaces**. In other words, a keyword can be a phrase. But 4images seems to think that keywords should be separated by spaces. This makes nonsense of the keywords that have been lovingly added to some 3500 images in my personal image database.

I don't begin to have the PHP skills needed to tackle the problem, though I did try and in the best tradition of open source not only searched the various support forums but also asked specifically and clearly for help. Deafening silence! That prompted another search of what was on offer, but none of the packages that I looked at, even those that apparently might deal properly with IPTC keywords, had the really useful features of 4images. What to do?

In the end I have settled, temporarily perhaps, on a kludge. I have used Applescript and the estimable [iView Media Pro](http://www.iview-multimedia.com/)[^3] to append the keywords to the caption. The beauty of this is that 4images has a really good search engine that effectively searches the IPTC caption and so returns the images that contain the required keywords. It doesn't look all that pretty, but at least it works. (Not that I can point you there yet. There's the little matter of a Help Page to write. Maybe in a day or two.)

[^3]: Even deader than NucelusCMS.

The thing about open source is that it does depend on the kindness of volunteers, and I am trying not to be hurt that my pleas have gone unanswered. After all, I don't even bother to ask that nice Mr Gates if he wouldn't mind perhaps persuading his browser to comply with a few standards here and there.

The other thing that I noted when I first looked at 4images was that it uses tables for positioning, which makes adjusting layouts and the like a monstrous chore. Blithely, I'm contemplating converting the whole thing -- no few than 42 templates -- to modern CSS based layout. Actually, it doesn't look that hard. What does look hard right now is finding the time to do it. But if I did, and shared that with the 4images community, maybe they could be persuaded to solve my little keyword problem.

(Ooer! What a long rant.)