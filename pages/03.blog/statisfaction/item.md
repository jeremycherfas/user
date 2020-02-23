---
title: 'Statisfaction'
published: true
date: '23-02-2020 14:58'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Finally installed a blog-readership recorder"
header_image: '0'
--- 

It is 160 days since I first [noted](https://www.jeremycherfas.net/blog/seeking-satisfaction-in-statistics) that I would like to make use of Bise, Jason McIntosh's [blog-readership reporter](https://fogknife.com/2018-01-03-announcing-bise-a-blog-readership-reporter.html), 118 since I [automated downloading](https://www.jeremycherfas.net/blog/download-and-rename-log-files) the access logs. With half an eye on the project day at [IndieWebCamp Austin](https://indieweb.org/2020/Austin), time to make good on my promise.

Bise expects its log files to be named a certain way, which is not the way mine were named, but that proved relatively easy to overcome with the wonderfully powerful [A Better Finder Rename](https://www.publicspace.net/ABetterFinderRename/version11.html). The latest version has filters that make it possible to rename 1-9 and 10-... , which require slightly different handling, in the same batch, and that makes life super easy.

===

````
# February 09 - February 22
Source                 Uniques Regulars
---------------------------------------
All visitors                82       11
RSS feed                     0        0
Atom feed                    7        1
JSON feed                    1        0
Front page                  79       11
From Twitter                 0        0
From web searches            0        0
````

And there, to cut to the chase, are the results for the past fortnight. However, getting to this point was not without some pain. 

Forking Bise and cloning it to my site was reasonably easy, but as I followed the install instructions, things went bad fast.

````
! Can't write to /Library/Perl/5.18 and /usr/local/bin: Installing modules to /Users/jeremycherfas/perl5
````

A whole lot of other things **did** get installed, so to begin with I wasn't too concerned, but of course Bise didn't know where things had been installed and so immediately threw an error.

Nothing for it, I had to install each module as  Bise called for it, which to be honest was not that difficult: `sudo cpan TheModule` worked every time, and Bise told me exactly which module it needed next. I could almost say it was a doddle, except that, as ever, I was only obeying instructions, rather than understanding fully. Came the moment to run Bise against the first 14 days of logs I had stored.

````
October 07 - October 20
Source                 Uniques Regulars
---------------------------------------
All visitors                 0        0
RSS feed                     0        0
JSON feed                    0        0
Front page                   0        0
From Twitter                 0        0
From web searches            0        0
````

As I feared, and probably the reason it has taken me so long actually to get round to doing this. Actually, only All visitors, Front page and From web searches are relevant, because at this point I had not yet tweaked the targets that Bise searches for in the logs.

Terrified, I renamed 100 days of logs and went at it again.

````
November 05 - February 12
Source                 Uniques Regulars
---------------------------------------
All visitors               361       49
Front page                 352       46
From web searches            6        2
````

It wasn't entirely a disaster, and I had silently promised myself that I would not be defining my success or otherwise by web stats, so I went ahead, fixed the targets, and ran it against the most recent 14 days, which as Jason says is a reasonable compromise between today and forever. The results (up at the top) are OK. I expected more visits to be looking for the RSS feed, and the 0 for Twitter is hardly surprising seeing as I almost never promote a post from here to there. Furthermore, this is about as much detail as I need.

What now? First off, huge thanks and kudos to Jason McIntosh. Next, I'm emboldened to think I could now automate the download from three other sites and in a couple of weeks look and see how those are going. And I suspect it wouldn't be too hard to automate the whole business of moving the log files, renaming them with ABFR-11 and running Bise. But not for a week or two.

!!! <a href="https://news.indieweb.org/en" class="u-syndication">Also posted on IndieNews</a>

