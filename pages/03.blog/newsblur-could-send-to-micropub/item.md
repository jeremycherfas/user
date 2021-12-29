---
title: 'Newsblur could send to Micropub'
published: true
date: '29-12-2021 19:31'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "I do not know how hard that would be"
header_image: '0'
---

Still pursuing the idea of sharing from NewsBlur to other places, especially Known and Micro.blog, I went digging around in the code. All of the options are in a section of `NewsBlur-master/media/js/newsblur/reader/reader.js` starting at line 2560. 

===

The basic form is a function that constructs a url to be opened. The url includes the various bits and pieces that each receiving service requires, but the only parts of the story that Newsblur sends are the story permalink and the story title (and the tags, if it has any, to Pinboard, diigo, Evernote, Google+). I actually don’t think it has any more information than that stored, because the content of the story is displayed when NewsBlur fetches the story and is not stored.

All this is happening in javascript, which I don’t really know. It does, however, suggest that it ought to be possible for someone who does know javascript to construct an additional send-to service that would target a micropub endpoint. It would have to allow the user to add the micropub endpoint and be able to authorise. Sharing to Pinboard, if I am not logged in, takes me to the login page, and once that’s done saves the story. I am not sure whether this would work for WithKnown or Micro.blog, but it might.

I realise this is a lot of hand-waving and that it is probably anything but simple. I realise too that my little knowledge may well be dangerous. Nevertheless, I do believe that an option to share from NewsBlur to a Micropub endpoint or a Micropub client would greatly add to its value.
