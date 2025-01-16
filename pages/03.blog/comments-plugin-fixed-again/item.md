---
title: 'Comments plugin fixed again'
published: true
date: '16-01-2025 11:33'
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

For the past couple of months there have been problems with the comments on this website. For the most part I have been happy to solve them manually. There aren’t that many and I’m about to redesign everything (eventually) so no point dealing with it now. Then yesterday, thanks to my on-this-day facility, I noticed [Comments plugin fixed](https://www.jeremycherfas.net/blog/comments-plugin-fixed) from 2019.

===

Reading that, I had left myself enough clues to solve the problem again without great difficulty, even though I have no clue why the solution got lost along the way. That’s just the way of things, although now me is increasingly grateful to past me for this kind of advice.

For the record, around line 200 of `comments.php` I replaced  
`        $post = isset($_POST['data']) ? $_POST['data'] : [];`  
with  
`        $post = $_POST;`

I just have to hope that removing what looks like a bit of error checking doesn’t come back to bite me.

 
