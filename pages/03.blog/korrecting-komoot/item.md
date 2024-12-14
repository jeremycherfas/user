---
title: 'Korrecting Komoot'
published: true
date: '14-12-2024 09:37'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Bicycle
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

With a couple of hours to spare, I decided to try and upload a correct route for [Monday’s ride](https://www.jeremycherfas.net/blog/a-ride-in-the-rain). First I had to convert the data recorded by Compass into a GPX file. With the help of ChatGPT that was reasonably easy, resulting in a Python script that works. I ought perhaps to tweak it to name `output.gpx` as `$DATE.gpx` although it would be even simpler to do that by hand.

I made some effort to add in `$Start` and `$End` times to get just a portion of the day’s track, but that proved a little too tricky. Instead, I uploaded the file to [gpx.studio](https://gpx.studio/), an absolutely brilliant online editor that I am happy to [support](https://Ko-fi.com/home/coffeeshop?txid=1daa740c-eef7-4915-a5e1-36ff3f98d94f&mode=public&img=ogiboughtsomeone). That makes it relatively easy to split and crop the track as necessary, reduce the number of points, and add waypoints of interest.

The downloaded file gets uploaded to Komoot (where, alas, the added waypoints do not survive) and [saved as an Activity](https://www.komoot.com/tour/1982468487?share_token=ajKMl7KeMNs6JPgzbS8TuzM7YhF7osfyrrRjjT2fIfEiq965Gy&ref=wtd). And that’s it.
