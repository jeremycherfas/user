---
title: 'An even better h-card'
published: true
date: '26-04-2018 18:40'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Indieweb
summary:
    enabled: '0'
---

After patting myself on the back for [adding an h-card to my page of latest posts](/blog/improving-the-h-card-in-grav), friends pointed out that I could use the `<data>` element rather than choosing not to display the h-card information. One good reason to do this is that screen readers ignore this information, which must be a bonus for anyone who accesses my stuff that way.

The Partial template now reads:

````
<div class="h-card">
<data class="u-url" value="https://jeremycherfas.net"></data>
<data class="p-name" value="Jeremy Cherfas"></data>
<data class="u-photo" value ="https://www.jeremycherfas.net/user/plugins/aboutme/assets/avatars/zoot.jpg"></data> 
</div>
````
And all the other logic remains exactly the same as before.

Another little tweak: because all my bookmarks from reading.am are now automatically brought back to my stream, I am removing them from the sidebar here.
