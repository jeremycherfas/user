---
title: 'Knowing where you’ve been: Part I'
published: true
date: '29-01-2007 21:44'
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

## Geotagging Photos

I understand there are now cameras with built-in GPS systems that record where each photo was taken. I can’t afford one. But I do have a GPS device and a digital cameras, so it seems silly not to marry the two. But it is not in fact as easy as it seems, not if you want to do it right. I’ve been trying to work out a reliable workflow, which I thought I would share.

===

A teeny bit of background. GPS receivers use satellite signals to calculate their position on the earth’s surface. They also record the time. Digital cameras record the time at which each image was taken. Put the two together, and you can use the track recorded by the GPS to identify the location of the camera at any given time. It is easiest if the camera and the GPS are both using the same time reference, but all the software I have tried allow you to change the time on one set of data or the other so they are in sync. In practice, though, it is easier to make sure both machines are on the same time before you start taking the pictures and recording the geographical track.

More background. Image files can contain metadata -- data about the image and the file -- embedded in the file itself. This is very handy. It means you can embed information about who took the photo, what it shows, keywords and all sorts of delightful stuff that will help you and others to make use of the image. That includes geographical information, not just latitude and longitude but city, country and more. Trouble is, there are way too many standards for the content of the metadata. The downside of that is that sometimes you think you have recorded the data in one program, and another fails to read it. This is bad. There is no easy solution, except to plead with big players (whisper it soft, [Microsoft's new offering is piss-poor](https://gcoupe.wordpress.com/2007/01/23/metadata-woes/)) to get their act together. Isn’t that what standards are for?

But enough background, and enough whinging. On with the show.

**Step 1:** Download the photos from the camera. Whatever tool you use, ensure that you are downloading the EXIF data. These data are inserted by the camera, and they contain the time the photo was taken, essential for matching with the GPS Track. I do not recommend using iPhoto to manage your images; it is just too weird. I use iView MediaPro, but that has been bought by Microsoft so I may need to think about moving elsewhere, unless they decide to leave it alone, which is always possible, I suppose. But one of the joys of embedded metadata in the image files is that any decent image program ought to be able to read it. Ought to. But see the whinge above about standards.

**Step 2:** Download the track from the GPS unit. I have a Garmin GPSMap 60C, which I am only just beginning to get to grips with. One thing I learned painfully; do not save the track. It erases the time data! Why, I do not know, but it does. And without the time data, you cannot match the photos. You want the GPX file for geotagging the photos. I use [LoadMyTracks](https://web.archive.org/web/20060623090757/http://www.cluetrust.com:80/LoadMyTracks.html) for this. LoadMyTracks can translate between GPX and KML, Keyhole Markup Language. This is the format used by Google Earth. You can do the translation from GPX to KML at any time.

**Step 3:** Match the photos to the track. This is the tricky part. I use [GPS Photo Linker](https://web.archive.org/web/20070704054455/http://oregonstate.edu/~earlyj/gpsphotolinker/), which generally does a great job, with a batch mode (which is what I use almost exclusively) as well as manual mode and a standard mode. Standard and manual both allow you to check the location on Google Maps, but as you cannot move the marker I’m not sure how useful this is. GPS Photo Linker will also download tracks, but I couldn’t get it to work with my Garmin GPS unit.

So, load the track into GPS Photo Linker. You may want to deactivate previously loaded tracks, as they are no help. Click on the files icon. Now load the photos. And Lo! it is done. In standard mode you can go through the images one at a time and decide whether you want to use the preceding track point or the next track point -- the program helpfully tells you the time and distance between them. Or just let it use the time weighted average, which if you have stopped to take pictures is probably a reasonable bet. And hey, how much accuracy do you really need? Most consumer GPS units are probably fine on the time-weighted average. The manual setting allows you to see any track point or marked waypoint on the map; I never use it. (Note, can you edit the function that searches Google Maps; to set the zoom value? z=14 would suit me perfectly. But like I said, I never use it.)

Batch will sometimes give up if, say, you have no track point sufficiently close in time or space. I’ve had this happen when taking pictures inside a building. At the moment I don’t think the program will present you with a list of photos it skipped. It would be really neat if it did.

The photos are all now tagged with geographical information.

**Step 4:** Back to iView. You might be tempted at this point to Sync the annotations; that is, to read the information put there by GPS Photo Linker back into the iView catalogue. Don’t! At least not yet. A Sync will bring in some of the geographic information, notably City, State and Country, which may in any case be wrong, because GPS Photo Linker doesn’t have very good information on “cities”. But a straightforward Sync will not put the latitude, longitude and altitude into the Photo Exif data, which is where it will do most good. So, select all the images (⌘-A) and then select Action>Rebuild Item (⌘-B). You'll see the thumbnails darken as iView rebuilds them (don’t know why) and then all the photos will show up with their geodata in the PhotoExif section. You do, however, need to Sync if you want to bring GPS Photo Linker’s City, State and Country information in. I don’t usually, preferring to do that by hand.

Now is the time to do all the other tagging you may want to do, before uploading to Flickr or whatever. Remember, when you are done tagging, captioning and whatever, you have to Sync to write that information back into the image file. You chose Action>Sync Annotations>Export annotations to original file.

At this point, your photos have embedded metadata about where they were taken and whatever other information you may have provided. That may be as far as you want to go. But I got into this in order to share the location of images, which I currently do with Flickr. You need uploading tools that will leave the metadata intact. and you need to be aware that Flickr has its own, idiosyncratic view of geodata too. Furthermore, different programs will quite possibly have stored your carefully wrought geodata in different places.

Next time, how to upload to Flickr.

p.s. I’ve kind of assumed that if you found this post, you already know about some aspects of image files, metadata and the like. But I could very easily be wrong. If you would like me to add links to missing information, leave a comment.
