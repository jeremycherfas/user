---
title: 'Photographic Fixer'
published: true
date: '24-10-2025 18:26'
taxonomy:
    category:
        - blog
    tag:
        - General
        - IndieWeb
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Lately, I’ve been thinking a lot about my photographs, why I take them, why and where I share them, and how to do that from now on. 

===

One trigger has been Instagram’s slow slide into irrelevance. I regularly miss photos from the people I follow, and _vice versa_, plus if I want to explore beyond the people I already follow the barrage of crap is overwhelming.

The ease of Instagram, however, alienated me from Flickr, which I used to really enjoy both for the quality of the comments and wandering into new groups with some great images. And Flickr, in its turn, made it easy to abandon the several efforts I put into hosting my own photo galleries on my own website and, indeed, to keeping my own copies of photos. 

Another trigger was the realisation that I have let myself get lazy. I used to love going out with a real camera and looking for things to photograph. Now, too much of the time, I have only my phone and just point and shoot. Last December I bought myself a second-hand Sony Cybershot RX100 III in order to carry something competent and less bulky than my main camera, and although that has invigorated my picture taking, it has of course made sharing harder because it **is** harder. I would like to bring more intentionality back into photography as well as to publishing the images.

Which addresses why I take pictures. Sometimes, often, it is a simple _aide-memoire_. Sometimes, not often enough, it is a deliberate attempt to create an image that repays looking at. And I share both because I am proud of an image and because I am looking for affirmation, though not necessarily both at the same time.

## Display and Sharing
At present some posts here are illustrated with photos and some are specifically photo posts. I would like to extend that, and it seems obvious now that a static site purely for images is the way to go. With [IndieWeb Camp Berlin](https://indieweb.org/2025/Berlin#Session_Proposals) coming up soon, I’m trying to corral these random swirling thoughts into something specific. To that end, I’ve been reading up about static site generators, notably Eleventy and Hugo, and I think I have settled on Hugo because it seems more approachable to me. It also has a very good-looking portfolio theme that would work more or less out of the box.

### What do I actually want?

1. Album posts, with the ability to have an overarching topic and several albums beneath it
2. Responsive display, out of the box[^1]
3. A specific subdomain, either `photos.jeremycherfas.net` or `jeremycherfas.net/photos`
4. The ability to share a link to a single image (but see 1. below)
4. A reasonably simple underlying structure that is easy to manage
6. POSSE to selected platforms (Mastodon, maybe Pixelfed and Viewbug, even Flickr)
6. A workflow or pipeline that is as friction free as it can be, and no more

[^1]: It seems peculiar to look at photos on a small phone screeen, and yet that is what IG has trained us to do.

### Things I am undecided about

1. Where to host the image files
2. Single photos displayed on their own page
2. Alt text on every image, although it would be useful for POSSE
3. Automatic extraction of some `EXIF` information as metadata
3. Comments and webmentions
4. Geolocation

### Things I don’t want or need (yet)

1. Uploads direct from my phone

## Next
Two paths beckon.

I have ordered a download of my images from Instagram and will make those the basis of a static reconstruction that I will host.

I will also continue to explore Hugo and maybe take the first tentative steps to implementing a photo portfolio.[^2]

[^2]: The worry here, which is also exciting, is that I may find it so attractive that I am tempted to migrate this site and my WithKnown stream, with all the overhead that will entail.

## More about Flickr
I uploaded my [first image to Flickr](https://www.flickr.com/photos/jcherfas/6012911/in/dateposted-public/lightbox/) on 6 March 2005. It was, Flickr tells me, taken on 21 February 2004 with my Olympus C3030Z, a camera I have no memory of. A very quick local search suggests that Flickr holds the only copy of that image. No idea whether that is true for the remaining 1775 items there, but if I am going to be thorough about repatriating my images, I would obviously need to check them all.

For a while, I embedded individual images and whole slideshows from Flickr on my site. Since giving up on that, my site is definitely less visually interesting, even though I have made efforts to use photographs more effectively. I’ve also paid a lot less atention to Flickr, despite coughing up for continuing Pro membership. Just for fun, today, I decided to let Flickr once again email me about interactions and uploads, to see whether that will rekindle my engagement.