---
title: 'A tool to make knowledge gardening easier'
published: true
date: '16-05-2020 14:50'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: " "
header_image: '0'
--- 

It’s so nice when things just happen to come together and move me forward. A teeny thing, but mine, and I hope worth sharing.

A week back I wrote about [tending my zettelkasten garden](https://www.jeremycherfas.net/blog/a-garden-with-a-water-feature), and trying to become more of a curator and less of a hoarder. Two days later someone mentioned readwise.io, which I had a quick look at. That same day, a cyberchum posted something “[from this morning’s Readwise email](https://nomad.wntrmute.net/p/1311)”. So I was well primed.

===

And I thought, if Readwise can surface a quote or a highlight or something, maybe I can surface a random zettel to tend? At first I focussed on PHP, and discovered `glob()`, which looked interesting. Then I looked more closely at The Archive, because that seems the logical place in which to tend the chosen note. The Archive is not yet Applescriptable, but it does have an external URL scheme. I’ve never knowingly used such a thing, but after a bit more reading around, found examples of it in use. On a whim, I opened the Terminal and typed.
 
````
open thearchive://match/201901111413
````

Blow me if it didn’t just work.

So I decided to focus on a bash script, did a bit more searching, and came up with this.

````
cd /path/to/zetelkasten/notes
a=( * )
filename=( "${a[RANDOM%${#a[@]}]"1"}" )

filename=$(basename -- "$filename")
filename="${filename%.*}"

filename=${filename// /%20}

open thearchive://match/$filename
````

Tied that to an Alfred trigger and it does exactly what I need. Any time I need a quick respite from whatever I’m doing, I fire it up and tend that one note. 

Make it easy, and it happens.

!!! I should explain that the script is not entirely cargo cult. I did have to understand and modify bits of it. Picking a random filename [here](https://stackoverflow.com/a/17410878/3227159), with the details explained [here](https://stackoverflow.com/a/38709735/3227159) so that I could understand it well enough to return just a single value. The Archive does not want to see the file extension, which took me [here](https://stackoverflow.com/a/965072/3227159), ensuring that it would deal with almost any silly filename I might throw at it. And finally, The Archive does not want to see spaces in the filename. That one I knew myself.