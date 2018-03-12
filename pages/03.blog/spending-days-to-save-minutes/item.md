---
title: 'Spending days to save minutes'
published: true
date: '11-03-2018 17:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "... and to own my content"
header_image: '0'
--- 

There's an XKCD cartoon beloved of geeky nerds and nerdy geeks looking to make things happen automatically. Actually, there are two, [Automation](https://xkcd.com/1319/) and [Is It Worth the Time?](https://xkcd.com/1205/). Both have exercised me all weekend, and now, after only 13.5 hours, I might be able to save myself literally minutes every day. 

Two triggers set me off. One was Chris Aldrich's post <a class="u-in-reply-to" href="http://boffosocko.com/2018/03/08/organizing-my-research-related-reading/" >Organizing my research related reading</a > and the other the release of an update to [Late Night Software's Script Debugger](https://latenightsw.com/). Chris made me realise again that I'm still far too scattershot in my online reading. There are bits and pieces all over the place, and at the very least I ought to be able to bring them back to my own domain. And Script Debugger reminded me that once upon a time, Dearly Beloved, I was able to persuade my computer to do some nifty things, things that currently frustrate me no end.[^1]

[^1]: There's a meta-aspect to XKCD's Atuomatin, especially. You spend time learning a programming language in order to do things, especially routine things, more easily and more quickly. Newer languages might be much better at doing those things even more effectively. But it takes an awful long time to learn those new languages, time that could be spent doing things. This is especially true for me because programming is not much more than an occasional hobby. So I stick with the old ways that I know. Applescript is one I used to know.

One of the bits & pieces I would like to bring home is the passages I have highlighted in things I read in Instapaper.[^2] It is easy enough to get IFTTT to create a new file in, say, DropBox when you highlight something new, but that file cannot contain any useful HTML tags.[^3] It is possible that an email from IFTTT could contain tags, but though I tried a few times, the emails never arrived, so the point is moot. Anyway, playing about with the text in the file to create a new post seemed like something I could actually do with Applescript, and so it proved.

There were a couple of big pitfalls along the way. One was getting from IFTTT's idea of a time to an actual useful timestamp. I'm certain there are easier ways, but it was fun thinking through my own approach and making it work. Another was reading the input file in a format that Applescript wouldn't completely mess up. That had me tearing my hair out for a while until my IndieWeb chum [sknebel](https://indieweb.org/User:Www.svenknebel.de) reminded me of something that I had seen but not paid sufficient attention to.

[^2]: Triggered by [How to set up a robust web reading environment](https://www.instapaper.com/read/1027262214) by Chris Bowler.

[^3]: It occurs to me -- now and belatedly -- that it could contain structured JSON, just one of the new things I'm not learning properly.

A cute problem is that as far as I know, IFTTT creates one file for every highlight. One blog post for every highlight seems awfully silly, so having done the hard work, I added another little script that appends additional highlights to the first post. That has some nice little things I'm proud of too, like keeping the citation at the end of the post and adjusting its wording according to the number of highlights.

All in all, I'm happy with what I've achieved. Sure, I could probably have done it in half the code and a quarter of the time using PHP or Python or whatever. But to do that, I'd have to understand those languages much better than I do. And the great thing about Applescript and, especially Script Debugger, is that you can so easily keep an eye on what is happening. I may even try something else in a little while.

For now, there's still a lot of manual labour, but I know it will be relatively easy to set things up so that when I new file appears I can choose which script to run automatically. I also need to work a little on the tags and styling of the posts, but that's a task for another day. In the meantime you can take a look at the [highlight.scpt](https://gist.github.com/jeremycherfas/6cd462d703137e6f5a48c1481e0eae4a) and [new-highlight.scpt](https://gist.github.com/jeremycherfas/526c0d82dbe5bd8f775e8063a1a0a1ad) and, if you're feeling very charitable, show me how I could have done all that in half the code and a quarter of the time.

<a href="https://news.indieweb.org/en" class="u-syndication">
  Also sent to IndieNews
</a>