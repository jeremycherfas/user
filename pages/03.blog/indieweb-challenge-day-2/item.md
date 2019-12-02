---
title: 'IndieWeb Challenge Day 2'
published: true
date: '02-12-2019 19:05'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
        - Challenge
summary:
    enabled: '1'
subhead: " "
header_image: '0'
--- 

Over the past few months I have developed a new theme for the presentation of this site. A combination of plagiarism and invention, it almost certainly would not suit anyone else who wants an IndieWeb theme for the Grav CMS, expect possibly as a model to plagiarise and improve.[^1] I have a long list of things I need to improve myself, the first of which is to straighten up the display of Reviews.

===

That I did today.

I had been relying on faulty logic to tell Grav which template to use for which kind of post. Listens have an image as part of their content, Reviews may or may not. I had forgotten that, so I had to amend the template. Because Listens are written programatically, I know that the image is always called `artwork-resized.png`. That means that in the `blog-item.html.twig` template I can use the image name to determine which partial template to use, thus:

````
{% if page.header.image == "artwork-resized.png" %}
<a href="{{page.header.theurl}}" class="u-listen-of"><img class="float-left mt-2 mr-4" src="{{ page.url ~ '/' ~ page.header.image }}" alt="Podcast artwork" height="150" width="150"></a>
{% block listen %}
{% include 'partials/listen-item.html.twig' %}
{% endblock listen %}
{% endif %}

{% if page.header.image %}
<a href="{{page.header.theurl}}" class=" "><img class="float-left mt-2 mr-4" src="{{ page.url ~ '/' ~ page.header.image }}" alt="{{ page.header.imagealt }}" height="150" width="150"></a>
{% endif %}

{{ page.content|raw }}
````

And, as far as I have been able to tell, it works.

Next I'll probably tidy up the actual content of a few Reviews that used to use the old template and have not been properly adjusted.[^2]

[^1]: The main reason is that I hard-code things that would almost certainly have different values for other people.

[^2]: Actually, next was emergency work to change the presentation of `<pre>` blocks, but I won't count that.
