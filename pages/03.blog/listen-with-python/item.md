---
title: 'Listen with Python'
published: true
date: '19-10-2021 09:30'
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

At last, I am once again extracting summary details and artwork for the podcast episodes I have listened to, and I am doing it with Python rather than PHP.

===

At the end of September, possibly connected to the Great Security Certificate Snafu, Overcast seemed unable to supply me with the details I wanted from my account. There was some back and forth about where the problem lay, my end or Marco's, the upshot of which was that if it was my end, I was ill equipped to fix it.

My PHP script had been based largely on a Python version by [CleverDevil](https://cleverdevil.io/), so I took this as an opportunity to put some of my recent book learning about Python into practice. With a bit of help from my friends I finally got it working on Saturday, only to discover that I had been rate-limited by Overcast. This was my own dumb fault, for hitting the site to fetch the data every time I fixed some small new item. Much more sensible to keep testing with a local copy of the data file.

So that's what I did, and the results are now once again visible on my [stream of micro-posts](https://www.jeremycherfas.net/stream). I have not actually checked whether I am still rate-limited, and do not plan to do so until tomorrow; three days ought to be enough to release me. Even at its busiest, the script is unlikely to run more than once a day, so I should be OK in future.

I learned a lot. I am slowly getting the hang of how Python refers to things. I really like how Jupyter lets me divide the script up into little blocks and see what each is doing. I now know that one of the first things to check when a loop fails to loop is indentation, and not to mix tabs and spaces. Thanks to [capjamesg](https://jamesg.blog/), I learned how to use a random string to make a more unique filename (though I am sure I could make it a bit shorter). I needed that because I have not learned exactly what `userUpdateDate` means in Overcast. I feel it may be a timestamp from when my phone connects back to the server at Overcast, rather than the time at which an episode actually transitions from `progress` to `played`.

Some rough edges remain, of course. My credentials are hard-coded into the script, because I have not been able to work out how to use a `conf.py` file just yet, which is why I am not sharing the code. I am still not sure exactly what the original script is doing when it saves a session, or why it does that. And in the long term, using MicroPub to send the data to the website is more elegant than creating a folder and files, but that would require me to build a MicroPub server for Grav, and that seems a bit of a challenge.

For now, I am content with what I have. I'll run it by hand every couple of days for a week and then, perhaps, automate it to run every two days or thereabouts.

Thanks to everyone who helped me get to this point.
