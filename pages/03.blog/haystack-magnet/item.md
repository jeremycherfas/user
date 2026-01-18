---
title: 'Haystack Magnet'
published: true
date: '27-12-2025 15:43'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "If images were needles ..."
header_image: '0'
---

As part of my continuing effort to build a decent portfolio for photographs, I’ve had to think some more about how best to handle the two essential aspects of image management, cataloguing and editing. For now I have settled on Photo Mechanic for the catalogue and Acorn for the editor, and after adding keywords and all that I save the image files in folders according to camera, year, and month. Easy if I know the date of an image I’m looking for, but hellish in Photo Mechanic because it can search only one folder at a time.[^1] Having done all the metadata stuff, I needed a better search solution.

Step forward [the amazing exiftool](https://exiftool.org), but with a twist. The tool itself is extraordinarily complex, and in essence all I want it to do is search recursively through folders looking for images that contain a specific keyword, a specific city, or a specific named person. Then copy the found images to a temporary folder where I can browse directly in the Finder or else open that folder in Photo Mechanic to do more fine-grained searches.

So I asked ChatGPT to make me a script, and it did. There was one hiccough. The script copied something as requested, but it was not the image file. It looked like all the information that exiftool extracted from the image.

“You’re exactly right,” ChatGPT replied, “good catch 👍,” which is always good to know, although having explained the problem it rather spoiled the effect by trying to shift the blame.

“ExifTool did exactly what you told it to do — just not what you wanted.” 

Er, you’re the one who told Exiftool to do that, not me. 

Still, scant seconds later I had the three scripts I needed up and running, and mighty useful they are too.

[^1]: I know I could spring for Photo Mechanic Plus, but for a mere hobbyist $249.00 a year is a bit steep. Heck, Photo Mechanic Standard is expensive enough to give me pause, though I might be able to justify the perpetual licence to myself.
