---
title: 'Download and rename log files'
published: true
date: '28-10-2019 19:30'
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

For the past three weeks, I have each day downloaded my website's access log by hand, at first literally, using FTP, and then, after a couple of days, with a command to do so. And each time, I would go look at the file and change it's name from `access.log.0` to `access.log.yyyy-mm-dd` where `dd` is actually yesterday's date. The point of all this is to try and get into a position to make use of a neat-sounding analytical tool called Bise (see <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/seeking-satisfaction-in-statistics" >Seeking satisfaction in statistics</a >).

===

I'm nowhere near that, yet, but storing the logs files here is crucial. Soon, I'll be travelling without my laptop for a while, and I don't want to lose the files, so it was time to automate the process. I ended up with a very simple script that first downloads and then renames the file. The cool bit was finding out that it is relatively easy to get yesterday's date in bash. `$( date -v-1d +%F )` gives me exactly what I need.

Tomorrow I'll run the script one more time to check and then add it to my `cron` jobs. And while I'm about it, I might just add the other two backups that I do by hand most days.
