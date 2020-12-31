---
title: 'Beginning to understand javascript, a bit'
published: true
date: '31-12-2020 10:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "Cast your bread upon the waters"
header_image: '0'
---

Blimey, what a great end-of-year gift I have received. Professor Von Explaino heard <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/100-format-11hhello-world">my sad cry for help</a> and gave me almost exactly what I was hoping for in his post <a class="u-in-reply-to" href="https://vonexplaino.com/blog/posts/article/2020/12/chartist-js-data-from-table.html">Chartist.js data from table</a>.

===

What’s so great about it, is that he actually explains in detail what each part of his code does, which means that rather than slavishly copy and paste, I can try to understand. My main takeaway from this is that javascript is what I would call terse, by which I mean that a single command does an awful lot of things. This may well be hinted at in a very long name, and the very long name makes a bit more sense now that the Prof. has explained what it is actually doing. 

He calls that “the fun part“. I call it the essential part, which to be honest I wasn’t able to find anywhere else.

I can now begin to see a way forward to my holy grail, which is to keep all the data in a single file that then gets inserted into the page before being processed by chartist.js.

A remaining big question, though, is this: the Prof. draws the chart inside the function he created. I got stuck because I thought I had to create the data objects in a function and then return them to the chart. So what exactly does the `return true;` do that is different from the `return: false;` that happens if the script cannot find the table?

I’m guessing it could be used to display an error message for false, but why does it need to return anything if it has worked?
