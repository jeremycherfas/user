---
title: "Sucking up the podcasts I've listened to"
published: true
date: '16-03-2019 12:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Days to save minutes"
header_image: '0'
--- 

Finally, I have succeeded in importing [all the podcasts I have listened to with the Overcast app](https://www.jeremycherfas.net/stream), at least as far back as May 2018.

===

This crazed exercise was prompted by my total inability to find an episode that I **know** I had heard, and modelled on the very excellent <a class="u-in-reply-to" href="https://gist.github.com/cleverdevil/a8215850420493c1ee06364161e281c0" >Python script by @cleverdevil</a >. Of course, not speaking a word of Python, I had to translate it into pidgin PHP, which I started doing on 27 February.

And here we are, after a lot of great help from my pals in the [IndieWeb IRC](https://chat.indieweb.org/).

My version is way too buggy to release just yet, and in any case is not fully automated. I have not managed to ensure that episodes for which I have already created posts are not duplicated. I'm also still not entirely happy with the actual logic of my program. But at least it works, as far as it works.

The biggest programming problem is that the detailed OPML file that Overcast sends me is a beast to work with, especially as I am not all that good at handling deeply-nested arrays. I tried to use `SimpleXML` instead, but failed to make much progress. Still, I know where I need to improve things. How is a different matter. 

I'm leaning towards comparing the current OPML file with its predecessor and extracting only things that have changed, but the nesting makes that rather complex. Extracting entries with a date more recent than some arbitrary moving target might also be a way.

As far as the information itself is concerned, I'm broadly happy with that too. Right now, each post contains the data supplied by the podcast to Overcast, untouched by human hand, and a link to the episode on Overcast. Ideally, when I have caught up, I would have time to add any notes I may have, and maybe even edit the official summary where I think it could use a clean-up.

The other thing I need to do is work out how best to handle skipping an episode and deleting ones I have listened to. Currently, that's all manual. If I let Overcast handle it, the OPML file might be easier to use.

The time spent, I regard as worth it, for two reasons. First, learning more about PHP and Grav (or about anything, for that matter) is always worthwhile. Secondly, even though manual steps are still needed, if I had to enter each podcast manually as I listened to it, I wouldn't.
