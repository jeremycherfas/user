---
title: 'Where are my images?'
published: true
date: '03-02-2026 17:01'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "They must be somewhere"
header_image: '0'
---

Good news and bad on The Great Migration. 

Good, I successfully moved [my WithKnown instance](https://stream.jeremycherfas.net) to its new home at Hetzner. Bad, I had to dig deep to find out why it was looking for the wrong CSS stylesheet, and I still have not managed to connect any of the older entries to their images. This is what I have discovered so far in the hunt for images.

===

Spelunking deep, I can see that the entity (or [post](https://stream.jeremycherfas.net/2026/ok-lets-do-this-1), as I call it) is looking for the image at `https://stream.jeremycherfas.net/file/23cfaff8f9070bf4726acb84486c66bd/birdnet-components.jpeg`

In the database, I can see that there is a file called `23cfaff8f9070bf4726acb84486c66bd.file` at `/stream.jeremycherfas.net/Uploads/stream.jeremycherfas.net/2/3/c/f`.

If I change the extension of that file to `jpeg` it opens perfectly in any image viewer and is indeed the picture I am looking for.

So the big mystery is, how does that `file` in the URL get translated into `Uploads/stream.jeremycherfas.net/2/3/c/f`?

It must be something to do with the path to the Uploads folder. How to discover that? It is set in `/configuration/config.ini` which is currently `public_html/stream.jeremycherfas.net/Uploads/stream.jeremycherfas.net` Maybe that's wrong.

But the image file is right there in `/public_html/stream/Uploads/stream.jeremycherfas.net/2/3/c/f`

Let's try a new [Photo post with image](https://stream.jeremycherfas.net/2026/just-a-photo). The image uploads without a problem and can be seen at `https://stream.jeremycherfas.net/file/a9952911c37f1275fe79a0728471ef5d/miracle-seeds-2.png`. **But** there is no folder 5 at `/stream.jeremycherfas.net/Uploads/stream.jeremycherfas.net/A/9/9/`. Where is the file?

Same goes for a [Post with image](https://stream.jeremycherfas.net/2026/test-post-with-image). The image is at `https://stream.jeremycherfas.net/file/654108661baa7deb2f6fc41cd9455b2d/thumb.png` but there is no folder 1 at `/stream.jeremycherfas.net/Uploads/stream.jeremycherfas.net/6/5/4/`.

Looking directly at the database and searching for the file identifier of the Photo post, I find an entry in entity_metadata, which is an attachment, the value of which just replicates information I have.

```
{"_id":"a9952911c37f1275fe79a0728471ef5d","url":"https:\/\/stream.jeremycherfas.net\/file\/a9952911c37f1275fe79a0728471ef5d\/miracle-seeds-2.png","mime-type":"image\/png","length":8052571,"filename":"miracle-seeds-2.png"}
```

And the `blob` associated with the entry again points to a whole lot of possible files that are not present where I think they ought to be.

```
{"access":"PUBLIC","owner":"http:\/\/stream.jeremycherfas.net\/profile\/jeremy","title":"Just a photo","body":"<p>A photo post with a paragraph of description syzygy<\/p>","tags":null,"attachments":[{"_id":"a9952911c37f1275fe79a0728471ef5d","url":"https:\/\/stream.jeremycherfas.net\/file\/a9952911c37f1275fe79a0728471ef5d\/miracle-seeds-2.png","mime-type":"image\/png","length":8052571,"filename":"miracle-seeds-2.png"}],"thumbs_large":{"miracle-seeds-2.png":{"id":"813b5c310c8b317e07312b2453865e35","url":"https:\/\/stream.jeremycherfas.net\/file\/813b5c310c8b317e07312b2453865e35\/thumb.png"}},"thumbs_medium":{"miracle-seeds-2.png":{"id":"e9d2918c8eaf8bf7b1becc7b733cd010","url":"https:\/\/stream.jeremycherfas.net\/file\/e9d2918c8eaf8bf7b1becc7b733cd010\/thumb.png"}},"thumbs_small":{"miracle-seeds-2.png":{"id":"4ea3430cc2c014676ff979bd5878cbb6","url":"https:\/\/stream.jeremycherfas.net\/file\/4ea3430cc2c014676ff979bd5878cbb6\/thumb.png"}},"slug":"just-a-photo","created":1770130976,"updated":1770131633,"publish_status":"published","_id":"281f5217-d548-4990-ae36-c4fa422600dd","uuid":"https:\/\/stream.jeremycherfas.net\/view\/281f5217-d548-4990-ae36-c4fa422600dd","entity_subtype":"IdnoPlugins\\Photo\\Photo","siteid":null}
```

All of which leaves me entirely befuddled.

**Where are the image files?**
