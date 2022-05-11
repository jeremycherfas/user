---
title: 'Now my feed dates are “implausible”'
published: true
date: '11-05-2022 14:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Another day, another error"
header_image: '0'
---

Further to [my own prediction](https://www.jeremycherfas.net/blog/invalid-feeds-again), a deliberate excerpt is not the reason for my feeds failing to validate. Nope, it is a dastardly invisible character, as [pointed out by Jan Boddez](https://jan.boddez.net/notes/91671c0af2) in a comment. This problem has bitten me before, and I always forget it. It would be very cool if I could automagically test for the presence of this kind of stuff; StackOverflow suggests that `iconv --from-code=UTF-8` would do the needful, so that could be something, especially if I can trigger something like that when I save a new blog post.

===

Meanwhile, another “error” surfaces, but only in the Atom feed. 

<pre>
<lastBuildDate>Wed, 11 May 2022 09:30:00 -0700</lastBuildDate>
<pubDate>Wed, 11 May 2022 09:30:00 -0700</pubDate>
</pre>

The offending dates are what the validator gently calls “implausible”. Seeking further information, I learn that

> One common error, particularly among the British and Western Europe during the summer time (i.e., during the periods of BST and WEST), is for the numeric part of the time to reflect local time and for the zone part of the time to hard code GMT.

Fair enough. But looking now, the hard-coded timezone is, of course, wrong. My timezone is GMT+2. Something, somewhere, seems to think I am on the West Coast of North America, which would actually explain something else odd I have noticed lately.

Off I go spelunking again.

*Later:* Yup, somehow I had obliterated the timezone setting in my CMS. Let's see whether that pleases the Validator.
