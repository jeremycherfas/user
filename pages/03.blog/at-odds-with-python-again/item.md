---
title: 'At odds with Python, again'
published: true
date: '08-02-2023 13:30'
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

One of the first things the professor told us to do when I began to formally learn a bit of Python was to install Anaconda, which I dutifully did. Looking back, all we ever used there was Spyder. Only later did I discover the joys of Jupyter, but the joy was short-lived. Once I got the point of using virtual environments, I discovered that my entire setup was just too big a tangle for me to understand. So I uninstalled Anaconda, not for the first time. And after a couple of missteps, Jupyter seemeed to work just fine without it. Then I upgraded my os to Ventura, and many, many things stopped working, including Jupyter.

===

I have now spent the better part of a day doing my very level best to fix the problem, which at one point saw me blithely reinstalling Anaconda, only to have to de-install that again when things went awry, again. So, where am I now?

In principle, I like the idea of virtual envionments, not that my feeble efforts require that much distinguishing, but it does keep things a bit tidier. (That may be one to reconsider.) I still cannot get Jupyter to work, anywhere. There is, apparently, a missing module that none, repeat **none**, of my battle-tested rituals seem able to find. With no virtual environment active, my Python version is 3.10.9. But Homebrew shows me that I may well have 3.11 in addition. I resolutely do not need two versions of Python. But while there are a million how-tos out there for installing bits and bobs, I have found it almost impossible to find the kind of guide I need to providing myself with a stahble, working, Python playground.

Back in October last year I bookmarked [How to set up Python in 2022](https://gist.github.com/eyeseast/548fddcfd0df24e589375af6a926ef7e) but probably got scared off by the strongly-worded warning, **DO NOT INSTALL PYTHON WITH HOMEBREW**. Maybe the time has come, finally, to read that properly and see whether I can improve matters.

I expect more nukes will be rained down on my machine from space.
