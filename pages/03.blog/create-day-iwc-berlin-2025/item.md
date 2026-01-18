---
title: 'Create Day IWC Berlin 2025'
published: true
date: '08-11-2025 15:37'
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

Both of the tasks I set myself for the second day of IndieWeb Camp Berlin came good, though the easier one was hard because I made it so and the hard one was easy because I spent too much time on the easy one. Confused? So was I.

===

The tasks I wanted to accomplish were to bring my Instagram photos home, which I thought would be easy, and to make a start on a static site for a portfolio of some other maybe more deserving images, which I thought would be hard.

The IG page I had prepared in advance, using Greg Randall’s [Memento Mori](https://github.com/greg-randall/memento-mori). This is magic to me, a service for anyone who wants to do the same. Three basic steps: ask IG for all your stuff; download Memento Mori and set it to work on your stuff; host the resulting files somewhere.

Bingo!

![Screenshot of the top of my Instagram Memento Mori](memento-mori.jpeg?loading=lazy){.img-fullwidth .u-photo}

Of course there are a few gotchas. You need to tell IG that you want your stuff as `JSON`, not `HTML`.[^1] Then you need actually to get Memento Mori to work. The Quick Start advice is to run a Docker command. Not me! I’m scared by developery things like Docker. So I went the Python route, which failed several times in various ways. I bit the bullet, downloaded Docker for my desktop, followed a few cargo cultish rituals and tried the incantation for the “easiest” implementation and blow me if it didn’t chug for a few seconds and then deliver a perfect set of files.

[^1]: Though clever people, like Jo, showed the previous day that they can [make use even of the HTML export](https://dead.garden/photos/instagram/).

Gobsmacked doesn’t begin to describe it.

I stuck the folder in the laptop confident that publishing it live on my site on Create Day would be a piece of cake. And it was, after I had done a bit of updating to the laptop itself.[^2] The basic issue was that the built-in server for this site wasn’t working because various components were out of date or plain missing. With those fixed, I could create a page to point to my Memento Mori and see what it looked like. I made a few little changes to the content, including a back button that may or may not work reliably. I needed that because of my decision not to embark on redesigning the navigation menu, which would have been necessary had I added another item. Instead, I hooked the page into the IG logo that is among the social links on the bottom of each page. But here, [I’ve made it easy to take a look](https://www.jeremycherfas.net/ig/index.html), though I don’t guarantee that the Back link will bring you back here.

[^2]: This is becoming a repetitive refrain. I use the laptop so seldom, and only when away from home, that it gets out of sync and out of sorts far too often. I’ve resolved to try and do more work with it at home to try and keep on top of that sort of thing.

As I said, my futzing around the edges was as nothing compared to the work that Greg Randall put into the his tool, so all thanks to him. There remain a couple of things I want to improve, which will require another dump from IG, and now I am confident it will be a breeze to make the page anew. A secondary benefit is that I am less scared of Docker and may dip my toes in it for a future project.

## The Portfolio

As with IG, I had done a bit of preliminary research for a static image portfolio and landed on [Hugo](https://gohugo.io) as the static site generator and [Nico Kaiser’s Hugo Gallery](https://nicokaiser.github.io/hugo-theme-gallery/) to display it. The laptop had a folder of images ready to play with, but nothing else. Downloading Hugo and the theme was perfectly easy and with my experience of `YAML` front matter on this site, it was reasonably easy to understand how Gallery worked. However, all the time it took me to implement the easy IG task meant I didn’t have time to do much more than bung up a couple of albums with somewhat different characteristics that I could show from the laptop.

In a way, I’m glad that I didn’t try more with the portfolio, because so many more decisions await. Where to host, how to update, whether to have a feed and any interactivity. All those are exercises for the future.

For now, I was happy to have done what I did, and even happier to see everybody else’s accomplishments. Create Days are so energising. I hope to tackle more of my portfolio and go live on [IndieWeb Black Friday Create Day](https://events.indieweb.org/2025/11/indieweb-black-friday-create-day-build-don-t-buy-C044CcYllKyt).

! <a href="https://news.indieweb.org/en" class="u-syndication">Also posted on IndieNews</a>.