---
title: 'Tracking an illegal byte sequence'
published: true
date: '17-03-2023 12:30'
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

In a spirit of exploration, and because he mentioned it again in a recent [20-year roundup](https://www.tbray.org/ongoing/When/202x/2023/02/27/Twenty-ongoing-Years) I decided to see what I could do with Tim Bray’s [Topfew](https://www.tbray.org/ongoing/When/202x/2020/05/18/TopFew). Not the actual Topfew, because that’s beyond me, but the original incantation:

`awk '{print $1}' access_log | sort | uniq -c | sort -rn | head -12`

The idea was to see in a vague kind of way what visitors to my site(s) are looking for, beyond the usual soft targets.[^1] I’m already downloading daily logfiles to look at with Bise; Topfew offered a way to get a bit more granular still without caring about anything personal. It proved simple to whip up a quick little script that concatenates all the logfiles, does the needful and writes out the results:

```
cat access.* > totals
awk '{print $7}' totals | sort | uniq -c | sort -rn | head -50 > top50.txt
rm totals
```

A problem arose when I tried to do the same for all the logfiles I have, being a glob cleverclogs. The resulting file was huge (>6GB) and the problem was that the script spluttered to a halt complaining about an “illegal byte sequence”. Fair enough, but how to find it?

[One tip](https://gist.github.com/cjolly/a6e42c817936d5b4fb2d) said try `nl file.txt | sort` because nl adds line numbers and then when `sort` blows up it will tell you where the error is. That did not work.

Another said try `iconv file.txt`. That did work, blowing up on the required line.

Of course, loading the 6GB file into BBEdit and looking for line 15049548 posed its own set of problems. But sure enough, there they were! The dreaded red upside down question marks in BBEdit. Sorting that out will take a bit longer.

[^1]: I’ll write more about that later, when I have actually looked.
