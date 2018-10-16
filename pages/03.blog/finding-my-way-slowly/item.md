---
title: 'Finding my way, slowly'
published: true
date: '17-09-2018 13:30'
taxonomy:
    category:
        - blog
    tag:
        - General
        - IndieWeb
subhead: 'The puns are too easy'
header_image: '0'
summary:
    enabled: '1'
---

Observant readers may notice a new menu item over on the top right: Walks. This is the story of how that came to be. And how much further I have to go.

===

Almost every day, I go for exactly the same morning stroll. I know it pretty well. I certainly have no need to map it or count my steps. But I do. And for a little while now I have wanted to bring the details back here to my website. There are plenty of apps that will do the job, but they hang onto the data. Even when they allow export, it can be a cumbersome business and, if you let a paid option lapse, impossible without paying up again. So I was pleased when <a class="u-in-reply-to" href="http://johnjohnston.info/blog/" >@johnjohnston</a >  on micro.blog introduced me to [Trails](https://trails.io), an iPhone app that seems to do a good job of mapping and recording and also makes it easy to own your data.

Getting hold of the data, then, was child's play. The app shares them over WiFi to a desktop if you're connected to the same network. Displaying them, much harder. I read my way around the documentation for leaflet.js and it kinda sorta made sense, but seemed just out of reach.

I cast around for a while, thinking someone else who uses the Grav CMS must have wanted to do the same thing, and there were a couple of plugins, but nothing very flexible. Then, just last week, a new plugin to allow the use of leaflet.js to display maps appeared. That seemed a bit more promising, so with a day clear yesterday I dove in. It quickly became clear that this wasn't going to work for me. I tried squinting at the code, but while it seemed relatively clear, I could see that there were some things that leaflet.js said ought to be happening that weren't, at least as far as I could tell. So I just gave up on it and took to the search engine instead.

Trails offers two data export formats, a straight gpx file and a more detailed format called geoJSON. And so I began my normal cargo-cultish development process; copy, paste, fiddle, load, fiddle, reload, fiddle, reload. One immediate gotcha: gpx stores latitude and longitude, geoJSON longitude and latitude. It probably isn't even worth asking why.

Anyway, I got a map to display, then a map around my house, then a map of where I walk, then a map of where I walk with the route on it, at least for the first 10 records in the file. When you're fiddling, less is definitely more. There was a lot of tearing of hair etc. as I hunted down missing closing brackets, semi-colons and various other things that I always seem to forget. Eventually, there was the map, on a stripped down, purely local web site.

Then came the challenge of making it work with the entire file instead of a filleted tiny subset. That was when I discovered Lyzi Diamond's <a class="u-in-reply-to" href="http://lyzidiamond.com/posts/external-geojson-and-leaflet-the-other-way" >guide to using an external geoJSON file with leaflet</a >. To start I tried to use the leaflet.ajax plugin but I just couldn't get anything to work. After more hair pulling, I read that ajax isn't crazy good at fetching the JSON from the same domain. But the first method Lyzi described, which in my eagerness I had skipped, has as a "drawback" that it works only if the HTML file and the JSON are in the same domain. Well, mine always will be, so back to that first method.

I copied Lyzi's code, substituted my filename and hit reload. Blow me down if the whole route didn't suddenly appear in the map. In the right place, so leaflet had accounted for geoJSON's idiosyncracies. Time to move it over into Grav.

That wasn't too difficult either, setting up a couple of new templates to display each individual walk and a summary of recent walks. At this stage I know that the whole thing is just barely lashed together with tarpaper and string. But it works. And it gives me a clear sense of what I need to do next.

- Move the heart of the code out of the individual page and into a template file. That really ought not to be too difficult, especially if I can read some variables from the geoJSON file into the frontmatter YAML of the page. I think I saw that mentioned in the Grav documentation while I was looking for something else. The template could then make use of those variables to load the correct file, for example.
- If I can read variables from the geoJSON file into the frontmatter, I could also use the template to display those variables, mostly the summary statistics for the walk.
- Lyzi's solution uses JQuery to read the file. People I respect have told me that's not such a great idea, and even pointed me to <a class="u-in-reply-to" href="http://youmightnotneedjquery.com" >You Might Not Need JQuery</a >. When I tried to just drop in the replacement code for my JQuery, however, things didn't work. This one ought to be relatively easy too.
- Further off, when I am tracking more interesting excursions, it would be cool (though by no means essential) to tie photographs to their specific locations.

I'm sure there will be other things too, but those will do to be getting on with. Time for a walk.
