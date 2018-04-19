---
title: 'Improving the h-card in Grav'
published: true
date: '19-04-2018 13:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Indieweb
summary:
    enabled: '1'
subhead: " "
header_image: '0'
--- 

I spent a little time fixing up the way this site presents my h-card on the summary of blog posts. In case you're wondering, an h-card is a way of presenting information about yourself or your organisation on your website that makes it easy for other websites to identify you with your work, for example in webmentions. 

===

The problem was that although the about-me plugin gives me a working h-card on my home page and the pages that present individual posts, the page that shows the most recent posts did not have an h-card, only a link to the home page, which does, and following that link is a step too far from some.

It wasn't that difficult. First I built the simplest possible h-card.

````
<div class="hcard" style="display:none;">
<a class="h-card" href="https://jeremycherfas.net/"><img src="https://www.jeremycherfas.net/user/plugins/aboutme/assets/avatars/zoot.jpg" alt="Jeremy Cherfas" class="photo"/></a>
</div>
````

Display is set to `none` because it doesn't actually need to show on the page, just as long as it is there for other computers to read. I stuck that in `partials/hcard.html.twig` and also created `partials/footer.html.twig` cutting the relevant bit out of `partials/base.html.twig`.  Finally, I edited `partials/base.html.twig` to include the h-card only when I am showing the summary of recent blog posts:

```
{% if page.header.title == "Jeremy Cherfas: Posts" %}
	{% include 'partials/hcard.html.twig' %}
{% endif %}
```

All this, of course, reflects the values for my site. Yours will vary, should you choose to go the same route. If you have other ideas, I'd love to hear about them.
