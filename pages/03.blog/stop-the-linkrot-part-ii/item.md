---
title: 'Stop the Linkrot Part II'
published: true
date: '06-12-2023 10:44'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "A gift received "
header_image: '0'
---

I was intrigued to see that Remy Sharp had converted his [“No More 404”](https://front-end.social/@rem/111527749630154982) script into a service, and promptly asked if I could use it. Remy obliged, and I just installed it which means, I hope, even fewer broken links on this site.

===

This nifty approach to link rot first came to my attention at IndieWebCamp Nürnberg, where [Jeremy Keith implemented it](https://adactio.com/journal/20589) on his site as a hack day project. One of my projects was to [improve my site](https://www.jeremycherfas.net/blog/stop-the-linkrot) so that it delivered fewer 404s, but as I said at the time, “Now I need to think about regular applications of rot protection”. Remy’s gift gives me that opportunity.

The instructions are very clear.  I had to add a one-line script to my site’s `HEAD` and place `redirect.js` where the script could find it. Done! Testing it on a variety of my posts, it seems to do the job.

Thank you Remy.
