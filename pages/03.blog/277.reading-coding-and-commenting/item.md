---
title: 'Reading, coding and commenting'
published: true
date: '16-08-2017 16:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: 'More little tweaks'
header_image: '0'
---

*Notes, as much for my own memory as for anyone following along, on a couple of recent tweaks*

##Reading

I read a lot, on and offline, and forget almost as much, so I have various places where I try to save bookmarks, notes and what have you. Then I noticed that <a class="u-in-reply-to" href="http://boffosocko.com/2016/11/20/owning-my-online-reading-status-updates/" >someone whose footsteps I have been dogging</a > uses a thing called [Reading](https://www.reading.am/everybody). The premise is "Not what you like. Not what you find interesting. Just what you're reading," with an emphasis on not censoring yourself. I confess I'm not fully on board with that. There are some things that I start reading and then discover that they just are not what I am looking for. No point marking those. There's a social element, in that you can build up a little community and comment on what you're reading. It is also super-easy to read what you and your community are Reading, IYSWIM, because there are RSS feeds for it all. Also, it is easy to share to other places like Instapaper and Pinboard -- which has a handy "reading.am" tag. I haven't yet tried the other sharing options.

At this point, I am consuming my community's RSS and using my own RSS to feed the sidebar here. So no permanent storage yet. It would be an interesting project to see whether I could automate something from my RSS feed to, say, my stream on Known.

###Coding 1

Sticking stuff from reading.am into the sidebar was easy enough, thanks to the superb Twigfeeds plugin for Grav, but through no fault of the plugin, there was an awful lot of guff, to whit *Jeremy Cherfas is reading* in front of every entry. To begin with I thought of going through a few loops to get rid of that, but then I had a little eureka moment. You can use filters to do all sorts of things to Twig variables in Grav. A few minutes later, I stuck this  
`{{ item.title | regex_replace(['/Jeremy Cherfas is reading /'],['']) }}`  
in the Feeds section of `sidebar.html.twig` and all was good. I was quite happy with that.

##Coding and commenting

Having managed to get webmentions and comments working here a couple of things needed fixing. One is the ability to moderate comments. If a human being is taking the trouble to make a comment, I don't want to bother them with having to prove that they're a human being, so there are things in place to deter bots (I hope) but not people. Alas, this means that anyone who can be bothered is free to spam me, and as yet the plugin that does comments in Grav has no way to deal with individual comments. I have to go to the web server, find a particular file and edit it. Not, so far, a huge problem, but it seems to me that automating this process could be another useful learning exercise.

More generally, there's been <a class="u-in-reply-to" href="https://colinwalker.blog/2017/08/13/" >a renewed discussion</a > of the value or otherwise of comments. In general, I'm all for civilised discussion. ADN had that, but not integration with other sites. [10C](https://10centuries.org) has it, and is integrated with its own blogging platform, but not much else. Micro.blog seems to be making it easier and easier. Responding on your own site almost certainly promotes civilised discussion, and webmentions make it relatively easy to ensure that the other members of the conversation are aware of the whole discussion. But there was one piece missing in my own implementation: a way for people without webmentions to let me know that they had mentioned a post of mine.

At first I thought it would be really difficult and involve a script on my web pages, something entirely new to me. However, chums in the [IndieWeb IRC](https://chat.indieweb.org) assured me that it gould be done with a simple POST form. That I almost understand. So I went off, plagiarised a couple of forms that I saw on other people's sites, tweaked sources and targets to suit my own, and ended up with something that, to my amazement, actually works. And it really wasn't that difficult.

If you're running a blog on Grav and want to let people ping you with their responses, this is the snippet you need.

````
<form id="webmention-form" action="https://webmention.herokuapp.com/api/webmention" method="post">
	<p>
		<label for="webmention-source">If you write something on your own site that links to this post, send me a <a href="http://indieweb.org/webmention">Webmention</a> by putting your post's URL in here:</label>
		<input id="webmention-source" type="url" name="source" placeholder="URL/Permalink of your article">
	</p>
	<p>
		<input  style="background-color: #22ff9b; text-align: center; width: 6rem;" id="webmention-submit" type="submit" name="submit" value="Do it!">
	</p>
	<input id="webmention-target" type="hidden" name="target" value="{{ page.permalink }}" >
</form>
````

If I were to be hypercritical I'd complain that the styling is clunky and not the same as the other form, but it is definitely good enough.