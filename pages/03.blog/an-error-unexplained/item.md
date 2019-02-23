---
title: 'An error unexplained'
published: true
date: '23-02-2019 12:42'
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

Well, that was weird.

Something had gone wrong with my little PHP script for adding items from my list at reading.am to my WithKnown-powered stream. It ran, reported no errors, and yet produced nothing at the other end. Gorgeous Saturday morning, blue skies and sunshine; what better way to spend it than indoors debugging?

===

Anyway, after reading part of the way through the `cURL` manual, my friend [Sven](https://www.svenknebel.de/posts/) pointed me in the right direction and I was able to see the responses that the script was receiving from my site. The weird part is that the very act of inserting a couple of extra lines of code seems to have fixed whatever wasn't working. I haven't the faintest idea why.

Anyway, having got this far, I decided to add a little snippet that checks whether there were any errors and, if not, tells me how long the request took.

````
if (!curl_errno($ch)) {
  $info = curl_getinfo($ch);
  echo "\n", 'Took ', $info['total_time'], ' seconds', "\n";
}
````

This goes inside the loop that creates each item, just before `curl_close ($ch);` and gives me an indication that all is well.

Unfortunately, testing this out cluttered up the timeline at micro.blog, because I was too lazy to adjust exactly what syndicates there, for which I apologise. It also still doesn't pick up any comments I may have made at Reading.am. Still useful, to me, but if I really want to add a comment I'll continue to use either Omnibear or Quill. And I still want to build something similar that will update from the Pinboard and Paperback combo.
