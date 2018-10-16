---
title: 'Down the rabbit hole'
published: true
date: '15 May 2017 9:23'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: 'How I spent my weekend coding'
---

Excited to be going to the [IndieWebCamp in Nürnberg](https://indieweb.org/2017/Nürnberg) this coming weekend, and also very conscious that I want to be able to do more than just listen and learn. I want to have something specific to work on, so I can get assistance from people and learn even more. As a result, I spent most of Saturday and Sunday deep down the coding rabbit hole.[^1]

===

[^1]: The Main Squeeze is entertaining friends and colleagues from out of town, here to take part in a great shindig. Freedom to obsess.

The goal was to display [webmentions](https://indieweb.org/webmentions) on my [Grav](http://getgrav.org/) site. I really like Grav, as I've said here before, often, but because it isn't hugely popular, there aren't zillions of plugins to do every little thing. Maybe also because it isn't very popular, there is often very good help available on Slack.

Thinking I might want to document what I did, I kept a bunch of notes, but looking back at them they are mostly a catalogue of mistakes and frustrations, almost all of which are down to my ignorance, and I really don't see the point of sharing all those wrong turns and blind alleys. Well, maybe one or two.

First off, I can't seem to get the webmentions plugin to work on my local development set-up. It definitely works on the live site, so I just downloaded the data files from there. And then, because the main `data_received.yaml` file was pretty huge, I cut it down to a more manageable two entries. Then I went way down into the warren trying to figure out how to read those entries into variables I could use in my Grav template. All afternoon, futzing around and getting more or less nowhere. It seemed unthinkable to me that the templating engine (Twig) apparently had no way of reading the contents of a file, but everyone seemed to agree that this was so. I gave up for the day, imagining that I might have to do something very complicated (eek -- a plugin) just to enable this simple feature.

##The next day

I cannot possibly be the only person who wanted to read some data from a file, can I? Back to the list of Grav plugins and voila, there was a plugin specifically to import the contents of a file and make it available to the rest of the system. Moreover, it was written by the same chap who wrote the [webmentions plugin](https://github.com/Perlkonig/grav-plugin-webmention). Obviously he had faced the exact same problem as me.

A happy few hours later I was getting there, when this self-same chap popped up in Slack (where I don't think I'd ever seen him before) to tell me that I didn't need the plugin, and that there was a setting to make the data in the file automatically available to Grav.[^2] All true, right there in the documentation, but I had missed it or, more likely, failed to appreciate its meaning. 

[^2]: So he hadn't faced the same problem as me. Or rather, he had, and he had solved it in a much cleverer way.

Bingo!

All I had to do then was to sit down laboriously with coloured pencils and paper to work out the actual structure of the lovely data file -- which array was nested in which array and all that -- in order to know which bits of the data I needed. By the end of the day, I had figured out the logic and the pseudocode to do the needful.

The rabbit hole beckons again, but first I have to go to the Post Office to pay a speeding ticket. Not for coding, obviously.

BRB.
