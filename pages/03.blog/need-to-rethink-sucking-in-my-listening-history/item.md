---
title: 'Need to rethink sucking in my listening history'
published: true
date: '02-10-2021 10:00'
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

Something untoward has happened to the PHP script I built to [retrieve my podcast listening history from Overcast](https://www.jeremycherfas.net/blog/sucking-up-the-podcasts-ive-listened-to). It is failing to retrieve both the summary and the image from Overcast. The error I am seeing is `file_get_contents(): Failed to enable crypto` which seems to suggest that the problem might just possibly be this root certificate snafu that seems to have affected a lot of sites and that I, of course, don't fully understand.

I've asked Marco Arment whether there is a problem he knows of. In the meantime, I wonder whether this might now be the time to use the original Python script on which I modelled my efforts to cement my so-far mainly theoretical knowledge of Python a bit. That could be an excellent, practical, learning exercise. The big change would be the method of posting.

[CleverDevil](https://cleverdevil.io/content/listen/) uses the native Micropub abilities of his CMS, Known. I currently create the folder and file that my CMS, Grav, requires. A while ago I did fiddle with attempting to implement Micropub for Grav but gave it up as too difficult. If I try again, I ought to do that first, otherwise I'll just get the Python script working by creating the files itself and give up on Micropub, even though a working Micropub would offer all sorts of extra possibilities. Or I could send Listens to my Known-powered stream.

Decisions, decisions.
