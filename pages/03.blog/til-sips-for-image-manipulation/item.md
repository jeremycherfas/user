---
title: 'TIL: sips for Image Manipulation'
published: true
date: '07-10-2025 10:45'
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

I’ve been helping the Squeeze update her website to show [new work](https://lucyclink.net/recent-works/), a lot of which requires me to rightsize the image files she produces as part of her practice. Normally not much of a problem but occasional enormous TIFF files cause all the tools I have to stutter and fail. Fearing I might have to install ImageMagick or similar, I cast around online and found [Use sips to quickly, easily—and freely—convert image files](https://robservatory.com/use-sips-to-quickly-easily-and-freely-convert-image-files/). Bingo!

===

I did one run of a straight TIFF to JPEG conversion and it worked, but the JPEG was still too large. So I actually read `sips help` and discovered the `-Z` option to specify a size in pixels for the largest dimension.

`sips -s format jpeg -s formatOptions 80 -Z 1920 "input.tiff" --out "output.jpeg"`

Took me down from 251Mb to 862Kb in no time flat. Very good to know.
