---
title: 'Setting my marginalia free '
published: true
date: '02-03-2017 09:44'
taxonomy:
    category:
        - blog
    tag:
        - General
subhead: 'How I get my notes out of Kindle'
summary:
    enabled: '1'
---

Close readers of this site will have noticed a new item in the top menu: [Books &c](https://www.jeremycherfas.net/reviews). That's where my book reviews and notes will live, and, in due time, maybe some other kinds of reviews. I promised I'd write up how I got to this point.

===

##Current workflow

I am not going to deal with my particular CMS (Grav) here as the steps will be too different for different CMSs. This is about getting the content fit for purpose. Markdown, which Grav uses, made that much easier.

I never read Kindle books on my iPhone, but I do have the Kindle app there. From the app, it is easy to export an HTML file of the highlights and notes as an email attachment.

The HTML file comes with a built in stylesheet that allows a [pretty fair rendering of the contents][vaviblog 2]. The first thing I did was to put the styles into a new `styles.css` where I could play with them.

The remaining text presents details of the author and title and then the notes and highlights. For highlights, there's no more to do.

I don't actually want to show the citation details for the book, but I want them to be there as markup, so I fiddled with `styles.css` to set `display:none;` on those elements.

The colour of the highlight is of no concern to me (though it may be down the road), so I did a simple search and replace to get rid of that part of the text completely.

The output from the cleaned text file was completely acceptable, as long as there weren't notes attached to any of the highlights, but where there was a note it appeared as a separate heading that was not visually tied to the highlight. Worse, for reasons I don't understand, a note could come either before or after its highlight. I wanted to have them side by side in a table, which is easily done in Markdown, but because the order of note and highlight was unpredictable, I couldn't automate that.

In the end, I'm doing it manually. That has the added bonus of allowing me to proofread and correct, which is absolutely essential given the Kindle's crappy keyboard and my fat fingers. The whole process goes like this:

1. Open book in Kindle on the iPhone and export notes as HTML attachment to email.
2. Open HTML file in BBEdit and remove styles.
3. Edit file with a couple of saved find and replaces to get rid of highlight colour information and ensure that all HTML tags begin in column 1 of the text, otherwise Markdown throws a wobbly.
4. Open a blank template for review pages in Byword.
5. Copy contents from BBEdit to Byword.
6. Using Byword and Marked 2, proofread the file. Where a highlight has a note, manually insert a table and copy the location details, the highlight and its note into their appropriate cells.
7. Publish to Grav.

At the moment, I am also copying my reviews from [Goodreads](https://www.goodreads.com/user/show/808199-jeremy) and editing them. In future, I will go the other way and write the review on my site to copy to Goodreads. 

One thing I really need to do before I go any further is to decide whether I ought to add the additional classes for [microformats h-review](http://microformats.org/wiki/h-review). I don't think it would be too difficult, just a couple of extra find and replaces in the text and a bit of tweaking of the Grav template. There might also be room for a star rating, which microformats supports.

I've got quite a few more books to extract, but now that I have the process down, that doesn't seem too daunting.

##The rest of the story

It all started with an outage at [Instapaper](https://www.instapaper.com/u), which is where I put things that I want to read later. [^1] That made me realise that not just the pages I'd bookmarked there but also the notes I'd made while reading them were [not properly mine][vaviblog 6]. Nor were my notes and highlights on Kindle, nor my bookmarks on [Pinboard](https://pinboard.in/u:JeremyCherfas). I decided to tackle Kindle first.

[^1]: Checking, I realise that the Download option in Instapaper doesn't really do what I might have expected -- download a complete archive. But that's another story.

Thanks to discussions with James Duncan, Daniel Goldsmith and, mostly, Chris Aldrich, I was able to formulate a plan to get my notes out of Kindle, which in its current form is up there.

I need to apply myself to bookmarks next, and things are now even more complicated, as I am saving some bookmarks to two different indieweb sites as well as to Instapaper and Pinboard. Ideally, they would all go to Pinboard once read, and any notes made in Instapaper would come here. That's phase next.

##A couple of oddities

Although the reason I am doing this is all about the indieweb, my chosen CMS for this, the mothership, is not yet easy to indiewebify. Getting it that way is beyond me. I can do markup, but not much more. I don't even have comments enabled here (yet), let alone webmentions. All that will take time.

Odder still, I started my experiments in the indieweb with Known, a CMS designed from the ground up to implement a great deal of indieweb functionality. Difficulties with hosting a secure site led me to have it hosted by IndieHosters, which worked really well until I wanted to take my experiments further and actually play around with some of Known's functionality. That pushed me to create a new installation of Known to keep my microblogging activities in a [sub-domain of this site](https://stream.jeremycherfas.net). That's working really well. The downside is that the latest self-hostable version of Known seems unable to import the data as exported from the latest public version. My data are stuck in an indieweb silo until the version at IndieHosters is compatible with the version here. Weird, or what?

[vaviblog]: https://vaviblog.com/2017/further-adventures-in-extricating-kindle-notes-and-highlights
[vaviblog 2]: https://vaviblog.com/2017/untouched-html-notes-from-kindle-app
[vaviblog 3]: https://vaviblog.com/2017/i-followed-up-on-the-calibre-option-here2017extracting-notes-from-kindle-may-be-easier-than-i-thought-and-it
[vaviblog 4]: https://vaviblog.com/2017/i-hadnt-heard-of-wallabag-although-it-does-look-very
[vaviblog 5]: https://vaviblog.com/2017/extracting-notes-from-kindle-may-be-easier-than-i-thought
[vaviblog 6]: https://vaviblog.com/2017/what-to-do-about-bookmarked-pages