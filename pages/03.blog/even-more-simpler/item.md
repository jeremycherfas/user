---
title: 'Even more simpler'
published: true
date: '28-08-2019 15:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
subhead: ' '
header_image: '0'
summary:
    enabled: '1'
feed:
    limit: 10
---

Three weeks on, I'm still too stuck in [reverse engineering mode](https://www.jeremycherfas.net/blog/no-more-reverse-engineering) to have made much progress coming up with a new theme for Grav. 

===

That is, I'm tinkering with the various bits and pieces of the existing default theme, trying to bend it to my will, even though I know that more than half of the delightful tricky stuff it offers I am incredibly unlikely to use.

So, although I actually have a theme that looks halfway decent on a phone, thanks to inserting various bits of Tailwind.css, as I try to adjust things for larger screens the default theme's options and choices are just making life too complicated.

As an example, Grav's theming allows one to build pages up out of several little partial templates. That's great for flexibility and not repeating yourself, but it makes tracing things that aren't working much more complicated. Is it in this partial, or that one? Which conditional choice is making that happen. Etc etc.

Today I am planning to simplify my approach again and build a single template with all the bits in it. When that's working, I'll see about breaking reusable components off and, er, reusing them.
 