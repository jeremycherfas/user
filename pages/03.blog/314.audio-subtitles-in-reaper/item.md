---
title: 'Audio subtitles in Reaper'
published: true
date: '5-10-2017 15:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Podcasts
summary:
    enabled: '1'
subhead: 'There is alsmost certainly a more efficient way'
header_image: '0'
---

Just back from the [Hearsay International Audio Arts Festival](http://www.hearsayfestival.ie/), which was wonderful in all ways. One topic that seemed to come up a lot was subtitling audio. That may seem weird, but it has definitely become a thing. Maybe [Radio Atlas](http://www.radioatlas.org/about/) is the driving force. They turn audio pieces into videos with words, so that as you listen to the sound you can also read in English what you are hearing in some other language. If you're a little rusty on your Italian dialects, for example, as I definitely am, you can nevertheless enjoy the [lovely piece from Jonathan Zenti](http://www.radioatlas.org/i-am-analog/), which won a previous Hearsay award. 

===

People want to be able to add other languages to their audio productions. More venally, perhaps, they (I) also want to be able to add words to audio snippets so that, just maybe, even people who aren't listening will read something interesting and (please, please, please -- not that I'm desperate or anything) go listen to the whole thing. A few podcasters have been playing with <a class="u-in-reply-to" href="https://medium.com/@WNYC/socialaudio-e648e8a5f2e9" >Audiogram from WNYC</a >, a nifty tool that makes an animated soundwave of an audio clip, handy for sharing on silos that seem to look down on audio. The BBC has made a version of Audiogram that does subtitles, but nobody I know has been able to get it to work consistently. There's demand, clearly, and in the pubs of Kilfinane the topic came up more than once.

I foolishly claimed that subtitling was easy in Reaper, a digital audio editor that many of us use. Reaper happens to be able to edit video as well, and I had found it quite easy to subtitle actual videos in the past. But I had never   tried to add subtitles to pure audio, or even to match subtitles to speech. Having said that it was easy, and discovered that it isn't as easy as I imagined, I decided to document how I did it.

First off, there's an extremely thorough guide to [REAPER v5, Text Items and Scripts: Subtitling, Faster Than Ever!](https://www.extremraym.com/en/reaper-v5-text-items/) by a demon Reaper script called ExtremRaym. Honestly, though, it is very hard to follow. And it is designed to create a text file of the subtitles, which you load with the video player, and that was not what I wanted. But it was a very good starting point. So, here's my version. (I'm assuming you know a bit about video in Reaper; if not, [hurry here](https://www.reaper.fm/videos.php#QHcjUEOfAA0).)

##Start here

Load the video file into Reaper, select it, and duplicate the track. This gives you a kind of scratchpad on which to work.

Select that track and look for an Action called `Dynamic Split Items`. This will split the track, er, dynamically, according to various parameters you can tweak. The most important of these is the `Gate Threshold`; when the volume falls below this level, the item is split. The action is useful for splitting between vocal phrases, which is what we're trying to do, so fiddle with that parameter until it looks as if the splits are mostly falling where they should. Don't sweat it too much, though. For one thing, `Dynamic split items` shows you what it is going to do before it does it; you have to click `Split` to make it so. For another, you're going to have to do some manual work anyway to tidy up. Click `Split`, and marvel.

Now, create a new empty track called, say, Text. At this point, you need to make sure you have one of ExtremRaym's scripts, namely `Script: X-Raym_Create text items on first selected track from selected items notes.lua`. [^1]  To use it, you select all the items you just split, then select the new `Text` track, then run the script. Lo, you have a set of empty text items on the track.

[^1]: I can't cover installing and running scripts here. [HeDa's scripts](https://reaper.hector-corcin.com/) is a good place to start. It isn't difficult, once you get the hang of it.

Now comes the fiddling, as you check to see that the breaks are in more or less the right place and adjust them to match the prosody of the audio. Another script helps with this: `Script: X-Raym_Expand item under mouse to next item end.lua`. Like magic, if you decide the item should be longer, to the end of the next item, or the one after that, you just run this script. If it has to be shorter, you do that by hand.

So now you have a bunch of empty text items that match up with the audio. Next job is to fill those empty text items with the actual words. Where you get those from is up to you. Could be a transcript, could be direct from the audio. [SWS Extension](http://sws-extension.org/) is a massively useful package of goodies from Reaper that includes an item called `Notes`. With that open, you can either type directly or paste from your transcript the words that belong in each text item.

Your text items now contain the words that go with the audio. You'll want to check them, but they're almost unreadable in the normal `Notes` window. The trick here is to use one of HeDa's scripts `Script: HeDa_Notes Reader_3rd.lua` This opens a lovely big window that will show each note (and foreshadow the next) as you play through the video. [^2]

[^2]: Very handy for karaoke, chord changes and notation, I'm told, if you're into that.

At this point, if you **do** want an SRT file, use `Script: HeDa_X-Raym_Export selection as SRT subtitles.lua`. 

##Continue

I wanted something different, to burn the words into the video in a style and at a place of my choosing. For this, we use the FX plugin called `Video processor`. This is yet another Swiss army knife; we're going to use just one blade `Title text overlay`, selected from the dropbox at the top of the FX window. Before that, though, we need to transfer the items in the `Text` track back to the video track. That way, each item can have its own video processor FX to process the words for that item. There's probably a much simpler way to do this, but I did it with the following actions:

1. `Item navigation: Move cursor to start of items`
2. `Select all items/tracks/envelope points (depending on focus)`
3. `Alt`-Click once in the video track to select it, then
3. `Item: Split item under mouse cursor`

Then you put the mouse over the next item and do it all again.[^3] I found it easiest to go through all the items splitting at the start of the item first, then go back to the beginning and use `Item navigation: Move cursor to end of items` to do it all again.

We're getting to the end (and this is taking longer to write up than to do).

##Finish

The thing about `Title text overlay` is that you can fiddle with loads of settings that determine the font, size of the lettering, look of the lettering and where it is on screen.[^4] But you don't want to have to fiddle with each of those individually for each separate subtitle. So I adjusted the look of the subtitle in the first item and then saved the FX as an FX chain. Now I could drag that saved FX chain to each item in turn and copy and paste the text from the `Notes` window to the details in the FX window. 

I was pleasantly surprised that, even with all the manual copying and pasting, finishing a 30-second video took under an hour, from start to finish. And I'm sure an expert in Reaper scripting could automate the heck out of this workflow. 

*p.s.* I made notes as I went along, and I've tried to recreate what I did in straightforward terms, but if anything is unclear or can be improved upon, please let me know and I'll update as necessary.

[^3]: It should be possible to create a macro to do this, but I couldn't get it to work. I'll keep trying.

[^4]: Watch [Kenny Gioia's tutorial](https://www.reaper.fm/videos.php#QHcjUEOfAA0) on video in Reaper often to get an idea of what's possible.