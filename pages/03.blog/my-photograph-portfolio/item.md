---
title: 'My Photograph Portfolio'
published: true
date: '29-11-2025 10:57'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Photo
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Yesterday was the IndieWeb’s [Black Friday Create Day](https://indieweb.org/Black_Friday_Create_Day), an excuse, as if one were needed, to spend the day making rather than buying something. I had set myself the Create Day goal of finishing the first stage of the task I set myself in [Berlin](https://www.jeremycherfas.net/blog/create-day-iwc-berlin-2025) three weeks ago; to publish a static site of some of my better photographs, using Hugo to create the site. And I did it.

===

Much of the past week I spent preparing, first by creating a server at Hetzner and then trying to understand a bit more about Hugo. As usual, the lure of customisation waylaid me and I spent far too much time trying to tinker with the look of the site without actually getting anywhere, so yesterday I resolved to focus on what it showed more than what it looked like.

One important decision related to image size. Hugo gallery downsamples each image to produce two or three alternatives, depending on orientation. Three for portrait, two for landscape, as far as I could tell. That is very efficient. But it also uploads the original which at least on my screen, and probably most screens, would never be displayed. So I did a little test, reducing the original image by 50% to a quarter of the size. The difference was huge, 28MB _versus_ 4.2 MB for one album.

Then there’s the question of the information alongside the image. Lots of photographers display all sorts of technical details, which is easy enough given all the data embedded in digital images when they are taken. To me, that is overkill. All I want is a title, but even that becomes very complicated. Hugo Gallery displays the title of the image if it has one and the embedded Description if it does not. Eventually I could probably display both a title and a description, but for now, just the description is fine. However, some images have hugely complicated technical information in their Description, rather than, I dunno, a description of the image. So I needed to check each one.

Again, I’m sure I could probably automate that process in some fashion but for now it would just be a delay. Easier to use my image processing app, Acorn, to open each image, inspect the embedded information and fix if necessary, reduce the size by 50% and save everything as a `jpeg` file.

Hugo’s method of putting all the extra information in the front matter of each gallery and album was familiar because this site uses the same approach. The details differ, and I will need to get to grips with them, but for now, it’s fine.

Uploading the static site to the server was a doddle, and [there it was](https://photos.jeremycherfas.net).

There’s a lot more to do, of course, and my plan is to do that, slowly, while at the same time trying to deal methodically with past images before grappling with the day-to-day. I can imagine an overall staging area of Latest Images which would then be sorted off into specific albums every month or so. I also need to think about the complete lack of interactivity and whether to do something about that. (I’ve just noticed that although there is an RSS feed, all the links point back to the `localhost` which is no good at all.) And finally, I need to make some slight changes here to link to the portfolio in the navigation.

Overall, though, a good day’s creating.

! <a href="https://news.indieweb.org/en" class="u-syndication">Also posted on IndieNews</a>.

