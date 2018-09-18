---
title: 'Improving my Grav templates'
published: true
date: '18-09-2018 16:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
subhead: 'Taking DRY to heart, a little'
header_image: '0'
summary:
    enabled: '1'
---

![](zoltan-tasi-666863-unsplash.jpg){.center} 

A couple of back-burner projects are simmering nicely. Mapping I wrote about recently.[^2] Today I turned back to working on micropub to add posts to this site. I have now worked out how to send two different kinds of post to two different places in the file system. Both are what you might call notes (indeed I call them Notes) but some are little status update notes and others are bookmarks.[^1] The way Grav works is that each file lives in a folder and Grav uses a specific template to display the contents of the file. I wanted a way to visually distinguish the two kinds of note; I chose different icons in the title.

===

To get it all working, I started off with different templates for the notes and the bookmarks, with the icon for each specified. That's very wasteful though, because literally the only difference between them is the icon. I was repeating myself. Bad. Worse, the page that displays a list of all the recent Notes had the same icon for each of them, because it uses a single template, and that specified a single icon.

I started casting around for a solution that would depend on discovering which template a child note was using and then calling the appropriate template. I made some progres with that, and then realised that if I could find out which template a page was using (because I tell it which template to use) then I can also tell it which icon to use, and have one single template.

And it works, although you can't see it yet because this is all still taking place only in my local sandpit.

While I was about it, I noticed that the listing page of all recent notes wasn't showing any content beyond the title. I did not, however, want all the content. The first paragraph will do. StackOverflow to the rescue. This worked perfectly for my purposes:

````
{% set paragraphs = page.content | split('</p>') %}
{% set firstParagraph = paragraphs[0] ~ '</p>' %}
{{  firstParagraph }}
````

That's all very heartening. 

Photo by Zoltan Tasi on Unsplash

[^2]: And I will get back to it next, although there's a problem that is currently still a bit beyond me, even though I know in theory how to solve it.

[^1]: There will be others to come, slowly. 