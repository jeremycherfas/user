---
title: 'Clearing the Grav cache'
published: true
date: '26-10-2019 15:05'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "More baby steps in automation"
header_image: '0'
--- 

Grav, the CMS behind this site, aggressively caches pages that it has built in the recent past. That's a good thing for people visiting the site, and not such a good thing for me when I want to see that anything new is working well. I do have a Firefox extension that zaps the cache locally, but that has no effect on the cache at the other end. Time to change that.

===

At the moment there are, basically, two possibilities. One is to log in to the Grav admin panel, which has a handy *Clear Cache* option, but that's a lot of clicking and stuff. The other is to login to the server and use the Grav command directly, but that's also a lot of clicking and stuff. Automation to the rescue.

I read up about using SSH to execute a script on a remote server, and tried that, but immediately ran into problems that I could not understand, let alone fix.

Then I made a tiny script on the server which did the needful perfectly:

````
#! /usr/bin/env bash
cd MY GRAV INSTALL
php bin/grav cache --all
````

However, as the entire point of the exercise was to avoid logging in to the server, I decided to try and see whether I could use SSH locally to run that script on my host. And there the fun began, because I got an error: `You are running PHP 5.6.36, but Grav needs at least PHP 7.1.3 to run`. However, `php -v` on my server and on my local machine both show a PHP version above 7.2. I threw myself on the wisdom of people in the Grav Discord channel.

Gradually, they helped me solve the problem, more by way of ignoring it than understanding it. Instead of letting Dreamhost pick which version of PHP to use (and ignoring the version it *claimed* to be using), I changed the final line of the remote script to:

````
/usr/local/php73/bin/php bin/grav cache --all
````

That forces it to use PHP 7.3 to run the command, and everybody is happy.

Now, the local script contains `ssh jeremygrav@ps589716.dreamhostps.com "bash ./clear.sh"` and the whole thing works a treat. Then I put my previous effort to work and [created an alias](https://www.jeremycherfas.net/blog/bashing-onwards), and that works too.

I still have to open the terminal and type `clear`, but that's a lot simpler than what I had before. Better yet, I think I can just add that script to other scripts that post to the website to have it happen automagically, although I can't test that until I have finished listening to another podcast.
