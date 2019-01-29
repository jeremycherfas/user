---
title: 'A little bit about me'
menu: About
form:
    name: my-nice-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Please enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Your email address'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            size: long
            placeholder: 'Your message'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
            type: reset
            value: Reset
            classes: 'button'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

I work as a freelance communicator. 

In essence, I see myself as a translator. I speak Science, and I speak English, and I work hard to make the two understand one another. 

It's possible I can help you. Why not <a href="#form">contact me</a> and let's see if we can come to some sort of arrangement?

Mostly, I like to help people tell their stories. I'm a biologist by training and by inclination, and my main joy is applying that to food and the agriculture and industries that supply it. I also have side interests in economics and many other things.

I don't currently have a portfolio, as such, but here are some of the things I've done:

* Quite a lot of my **written journalism** these days is for NPR'S The Salt, [most recently this piece](http://www.npr.org/sections/thesalt/2016/08/25/491370926/food-world-rallies-for-quake-hit-amatrice-home-of-famous-pasta-dish). I'm more than happy to consider any commissions.
* I make [Eat This Podcast](http://eatthispodcast.com), which was nominated for a James Beard Foundation award In 2015 and 2016. (Always the bridesmaid ...) I also make **podcasts** for clients and would be delighted to do the same for you.
* Several clients have asked me to work with them to develop a **communications strategy**. I can't say who they are, but they've generally been pretty pleased with the results and I'd be happy to talk privately.
* I've done a lot of **training on communications** and, especially, science writing. Again, more details on request.
* I'm proud of what Luigi and I have done at [The Agricultural Biodiversity Weblog](http://agro.biodiver.se/) speaking truth to power and generally snarking it up.
* I built this **website**, whatever its faults, and others.        