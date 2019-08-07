---
title: 'No more reverse engineering'
published: true
date: '07-08-2019 15:40'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Sometimes starting over is simpler"
header_image: '0'
--- 

For quite a while now I have been wrestling with the new default theme for Grav, which runs this site, in order to benefit from all the wonderful possibilities going forward. Unfortunately, I am belatedly coming to the realisation that reverse engineering a theme is just more trouble than it is worth, at least for me. In trying to be all things for all people, a lot of themes are just very, very complicated. I don't need all the possibilities on offer. I just need the kind of layout I like, which would essentially mirror the layout you see right now, especially if you are not looking at it on a phone.

===

The problem, and it is what has kept me tinkering at the edges rather than diving in, is that I stopped doing my own website presentation long ago, and haven't kept up. I have never built a responsive site from scratch, and I really don't understand how to ensure that, for example, people get the images that best suit the device they are using.

Then, just this morning, I happened upon Julia Evans' website, and in particular this post: <a class="u-in-reply-to" href="https://jvns.ca/blog/2018/11/01/tailwind--write-css-without-the-css/" >Tailwind: style your site without writing any CSS!</a >.

Julia was quite clearly in exactly the same position as I am in (though lots smarter). And her write-up ticks a lot of boxes for me. I took a cursory look at Tailwind this morning, thought "hmm, that's interesting", did some paid work and then treated myself by returning to the torture of trying to understand the complexities of the Grav default theme. And after about two hours of that, I had a different thought.

I know the kind of site architecture I want. I know enough Twig, and have enough examples to hand, to build the various template modules. I want to mark everything up correctly with microformats. But I don't understand modern CSS, responsive layouts etc.

Time to give Tailwinds (or something else; I'm open to suggestions) more than a cursory look.
