---
title: 'Lost in GIS … Again'
published: true
date: '04-10-2021 16:01'
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

Struggling still to understand geographical information and learn how to do things with it, I had high hopes for [this tutorial](https://www.twilio.com/blog/2017/08/geospatial-analysis-python-geojson-geopandas.html), even though it dates from 2017. Reading through it a couple of times, before trying to do anything, it seemed to contain the sort of information I wanted to be able to use. So I carved out a few hours and started to work through it. There were plenty of errors to begin with of a sort I have become familiar with, that various bits and pieces could not be found. One proved absolutely insoluble, and I reasoned that perhaps I was using too modern a version of Python. So I went back to square one and installed Python 3.6.

===

That got me over that obstacle, but quickly landed me in front of another. This time I seem unable to do anything.

````
---------------------------------------------------------------------------
ModuleNotFoundError                       Traceback (most recent call last)
<ipython-input-9-4c50f0c278a2> in <module>
----> 1 import geojsonio
      2 geojsonio.display(states)

ModuleNotFoundError: No module named 'geojsonio’
````

But I know `geojsonio` is in there somewhere. I can see it at `~/opt/anaconda3/pkgs/` But for some reason, the Notebook I am working from cannot find it. Which is, y'know, infuriating.

So, as ever, I turned to my friends on [IndieWeb chat](https://chat.indieweb.org) for help, and they did, by pointing me in the right direction.

I was shown how to use

````
import sys
sys.path
````

to see what was going on, and then I could check and discover that the module was **not** present in the specific environment I had set up. This page — [Installing Python Packages from a Jupyter Notebook](https://jakevdp.github.io/blog/2017/12/05/installing-python-packages-from-jupyter/) — showed me in detail what to do and offered explanations that went mostly over my head.

In the end, from Jupyter, I created a new Notebook and used it to install the module.

````
import sys
!conda install --yes --prefix {sys.prefix} -c conda-forge geojsonio
````

And it worked. In that Notebook. And in the tutorial Notebook, all was well. I zipped through to the end, saw what was possible, and will return to think more deeply another time.
