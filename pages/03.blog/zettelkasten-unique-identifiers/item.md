---
title: 'Zettelkasten Unique Identifiers'
published: true
date: '18-04-2020 18:07'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: ' '
header_image: '0'
---

There has been a flurry of activity on the Zettelkasten Forum around [higher level notes](https://forum.zettelkasten.de/search?Search=folgezettel), which I’ve been doing my best to understand. In the course of that, though, some older discussions about the different approaches to unique identifiers have also bubbled up. Those have made me rethink my approach.

===

When I first began to think of my notes as a Zettelkasten rather than a bunch of random notes, I read a few forum posts and quickly adopted the idea of each note having a title that consisted of a UID and a brief word or phrase, so:  

```
201811241024 zettelkasten
```

Easy enough to see, if I ever needed to, that the note was made on 24 November 2018; the time hardly matters. With that decision, I also adopted a structure for the top of the note, based again on discussion in the forums.

```
# 201811241024 zettelkasten
Tags: #zettelkasten #tag2
```

I made a simple little snippet to do that.

The tags are not always as redundant as this example, but what this recent discussion made me realise is that the UID is doing me very little good there in the Title of the note. Because I have it in a heading, it cannot act as a link, even if I surround it with the requisite `[[]]`. An obvious solution would then be to remove the heading and make it a link, and that certainly works. But I think I would prefer to leave the title as a heading, because it improves legibility, and create the link on the next line, so:

```
# zettelkasten
[[201811241024]]
Tags: #zettelkasten #tag2
```

The main benefit of having the UID as a link is that it provides a very simple way of seeing all the other notes that link to this note, a facility that I have not been making nearly enough use of as I build connections between notes. As I used a macro to create the front matter on all new notes, they all have an identical structure, and so I ought to be able to work out a `grep` search and replace to make the changes I want to see. And for the time being, I don’t actually need to change the filename of each note, though that would be easy too. 

I think I am going to just do it.

