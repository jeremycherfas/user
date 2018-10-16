---
title: 'Using Reading.am with Grav'
published: true
date: '19-08-2017 12:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
subhead: ' '
header_image: '0'
summary:
    enabled: '0'
---

*Just a quick follow up on <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/reading-coding-and-commenting" >Reading, coding and commenting</a >.*

I used the twigfeeds plugin to bring in a feed of my links on [Reading.am](https://www.reading.am/everybody) to the sidebar here. Chris Aldrich <a class="u-in-reply-to" href="http://stream.boffosocko.com/2017/jeremy-congrats-on-owning-your-reading-id-recently-seen-your" >pointed out</a > that when I use Reading.am as a way to read something again, it helpfully inserts *because of Jeremy Cherfas* at the end of the RSS entry. And if I can filter one piece of fluff out with a regex, I can do it for two. Here, then, is the code snippet for `sidebar.html.twig` with the final filter. Obviously, you would change it to suit your own needs.

````
<div class="sidebar-content">
<h4>Reading</h4>

{% for name, feed in twig_feeds if name == 'Reading' %}
    {% for item in feed.items %}
        <p>
            <a href="{{ item.url }}">{{ item.title | regex_replace(['/Jeremy Cherfas is reading /', '/ because of Jeremy Cherfas/'],['','']) }}</a>
        </p>
              <time>{{ item.date.date|nicetime(false) }}</time>

    {% endfor %}
{% endfor %}

</div>
````

Maybe someone will find this useful.