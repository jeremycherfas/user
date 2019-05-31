---
title: 'Test of Compass data'
published: true
publish_date: '31-05-2019 16:00'
process:
    markdown: true
    twig: true
twig_first: true
routable: true
visible: true
template: walk
imports: linestring-query.json
datafilename: linestring-query.json
---

After a long hiatus, during which I discovered that all previous work on mapping had become very broken, I am back at it. First, I had to fix that which was broken. Now, I am trying to see whether I can display the raw file simply downloaded from Compass. Here goes nothing.

===

<div id="mapid" style="width: 100%; height: 400px;"></div>

Did it work?

Kinda, sorta. The actual file straight from Compass is apparently not valid geoJSON. A couple of editing tweaks are needed, to remove the first `{` and then tidy up the end of the file. This time, I did that by hand, but I think I can automate the cleanup.
