---
title: 'Found (Almost All) My Missing Images'
published: true
date: '18-02-2024 10:04'
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

_tl;dr_ The images I lost from my installation of WithKnown are back, thanks to methodical brute force.

===

At some point in late December I updated my installation of WithKnown and [buggered everything up](https://github.com/idno/known/issues/3178). Not quite everything, but all images from all posts were missing, and I am pretty certain it was something I did, although I have no idea exactly what.

Since then, I have tried on and off to work out what went wrong, with occasional flashes of inspiration but no real understanding. On Thursday, I decided to give it one last do-or-die attempt.

![Fake military-style dog tag with a 32-digit identifier](IDtag.png){.center}

The big problem for me — and it is still a problem — is that I have only the faintest idea of how Known does the things it does. Floundering about in the database, everything of importance hides behind a 32-digit identity tag. Most of the important information is tucked away in [a blob](https://en.wikipedia.org/wiki/Object_storage) and I’m sure that from a developer’s perspective that is a very fine idea. But for a mere mortal, it sucks.

I decided to use the skills at my disposal. This showed that when everything works, the blob for a photo post contains a reference to the id of an attachment. For example, [this post](https://stream.jeremycherfas.net/2024/new-lens-on-the-old-camera-very-enjoyable-first-outing) contains in its blob, `”attachments”:[{”_id”:”f9ac374750b8dfb424483b8d80c115f7”` among lots of other stuff. The image is indeed at `https://stream.jeremycherfas.net/file/f9ac374750b8dfb424483b8d80c115f7/DSC06014.JPG`. But where is the file to which that refers?

It is at `~/stream.jeremycherfas.net/Uploads/stream.jeremycherfas.net/f/9/a/c/f9ac374750b8dfb424483b8d80c115f7.file` and if I just change the extension from `file` to `jpeg` it will open and show the picture.

The important discovery was that the first four characters of the filename are also the names of the first four folders within the uploads directory where the file will be found. OK, then, I know what I should do. Where are my backups?

This was the worst part. Nowhere did I appear to have a backup from before the ideo-tragedy.[^1] Finally I realised that back when I thought I understood this monster, I had attempted to make a git repository of my installation and that although I had abandoned the effort it was just possible that the files remained on git. And so it was!

[^1]: Along the way I realised that my previous cunning strategy of using `rsync` to keep a copy on my hard drive and syncing that with Dropbox had also vanished into some kind of conflicted copy hellscape. That’s one for another day.

I tentatively looked in my clone of the repository and to my amazement and delight, there was the file I was looking for. Time to bite the proverbial. I uploaded one entire folder. The target image was restored.

Slowly, using Cyberduck and comparing each file to what was already there, I began to upload to one top folder at a time, 16 in all. And it worked. In the first 50 photo posts, which takes me back to the start of September 2023, the first upload recovered two images, then another three, then five. Then I gave up checking.

Now, after uploading everything I could find, almost all images are back. None from before 17 October 2017; I think all of those were the result of [PESOS](https://indieweb.org/PESOS) from Instagram when that still worked. And five missing from just before The Incident. Those I ought to be able to find, if I put my mind to it, but not for a day or two. I might even still have the photos.

Now to back everything up. Again. Properly.
