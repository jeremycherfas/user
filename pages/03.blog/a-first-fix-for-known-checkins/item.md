---
title: 'A first fix for Known checkins'
published: true
date: '11-11-2023 11:11'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Hey-la, hey-la, my maps are back"
header_image: '0'
---

I had a little time yesterday afternoon, so I decided to begin the Step Two promised in the roundup of my [exasperating Hack Day](https://www.jeremycherfas.net/blog/indieweb-camp-nu%CC%88rnberg-2023) a couple of weeks ago, digging my way through the check-in code in WithKnown.

Looking at the code for a single check-in, there seemed to be a mismatch between a script and the code.

Code contains `<div id="map_6fe9a186-a0ed-4660-b8c3-e7e0b52d723c" style="height: 250px"></div>`

But the first line of script is `var map6fe9a186-a0ed-4660-b8c3-e7e0b52d723c = L.map('map_6fe9a186-a0ed-4660-b8c3-e7e0b52d723c', {`

Ahah, I thought, could the missing underscore in `map6` in the code be the problem?

No, that is not it. My friend Sven pointed out that the first parameter in L.map does match, and that is what matters.

At this point, I still thought that the problem might be with the map tile provider, so I fiddled a bit with some of the places that is present but couldn't get anywhere. In the end, I mocked up a single `HTML` page to test with, and changed the map tile provider. No details here, because it proved a dead end, but it did point up something else.

Looking in more detail at the console, I discovered what looked like a Very Important Error.

`Uncaught SyntaxError: Unexpected token '-'", filename: 'https://stream.jeremycherfas.net/2023/checked-into-lombra-del-leone', lineno: 301, colno: 28, …}`

The problem seemed to be the hyphen/minus in the first line of the script.

Armed with that, I [raised a github issue](https://github.com/idno/known/issues/3161) to the best of my ability, and again, my friends in the IndieWeb came through. CDN pointed to the specific source of the problem, Sven suggested a filter to replace `-` with `_` or something, and while I was researching that (and sleeping), Zegnat actually implemented a fix and created a Pull Request.

I tested the change, and it works beautifully. I hope it gets merged soon so that other people who use WithKnown can benefit.

## Next ...

Of course, that still leaves me with the problem of the map tile provider not working for much longer; it has already gone 11 days beyond its supposed end of life. It makes the Hack Day even more exasperating, as it seems very likely that the reason our changes to the map tile provider were not working is most likely the result of this upstream error, rather than the changes we were making. At least now there’s a better chance of success.