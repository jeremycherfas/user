---
title: 'Images Have Reappeared'
published: true
date: '04-02-2026 15:16'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Lotta continua sempre"
header_image: '0'
---

![A crowd of demonstrators under a banner that reads Lotta continua. The photo was taken in Florence in 1970.](lotta.jpeg?loading=lazy){.img-fullwidth .u-photo}
<figcaption style="font-style: italic;">A demonstration in Florence, 1970</figcaption>


The story so far: [WithKnown lost my images](https://www.jeremycherfas.net/blog/where-are-my-images), and my [previous experience](https://www.jeremycherfas.net/blog/found-almost-all-my-missing-images) was not as helpful as I hoped. Back to the blow-by-blow troubleshooting.

===

OK, so this
<code>
`filesystem = 'local'
uploadpath = 'stream/Uploads/stream.jeremycherfas.net'
</code>

results in a **new** folder being created at 

<code>
stream/Uploads/stream.jeremycherfas.net/stream.jeremycherfas.net
</code>

in which any newly uploaded images files are stored.

At first, it seemed that WithKnown **creates** the folder named for the domain. It should **not** be part of `uploadpath` as defined in `config.ini`. Indeed, nor should the first `stream` in that path. The correct path ought to be simply `Uploads`. I think. So let’s see if that’s true.

However, with `uploadpath = ‘/Uploads/’` or `uploadpath = ‘/Uploads’` I get an error from WithKnown’s diagnostics that “The upload path either doesn’t exist or isn’t a directory.” And that, back at the beginning, is what lead me all over the place.

The strange thing is that there very definitely is a directory at `stream/Uploads`. It contains a whole bunch of stuff, including a `readme.txt` that exists only to ensure that the directory gets picked up, because sometimes empty folders aren’t. So maybe that’s it. Maybe it needs to be empty? Nothing ventured, I’m going to rename it (not delete it. I’m stupid, but not that stupid.)

Ahah! It is the opening slash! Now, let's see. Does the domain name folder need to be there? Yes, I think it does; or rather, if it doesn't exist, it gets created as soon as you save a file. But maybe not. In any case, WithKnown fills `Uploads` with the other folders it needs. Uploading one of the folders from the previous domain name folder as a test, and I wish there were an easier way to do that. 

Also, there seems to be some sort of js event listener that injects the default image when the correct image file cannot be found. I had to disable js in order to further debug. but I got there in the end. The test uploaded did indeed provide the image that the post was looking for. Time for slow and methodical uploads.

## Normal service has been resumed.

All the saved files and folders have now been uploaded to their proper place, directly under `Uploads/stream.jeremycherfas.net/` and in my limited testing, all is well. At some point, again for reasons that completely elude me, some of the folders named a, b, c, etc., had become A, B, C, etc., Changing them back worked, and  I am so fed up I have no inclination to discover why.

One problem remains, and it can wait. The CSS on notifications, account settings, and site configuration cannot be found. I tried a couple of things and they didn’t work, and as I am the only person who should ever see those pages, and I don’t care what they look like, at least for now, I’m calling it a day.

Maybe now I can get on with my life, and consider changing not host but CMS.
