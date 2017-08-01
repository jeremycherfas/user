---
title: 'Trying to Tweet directly from WordPress'
published: true
date: '01-08-2017 18:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
subhead: 'It really isn''t easy'
summary:
    enabled: '1'
---

*I have immense respect for all the people involved in the IndieWeb who devote their time and expertise to helping people like me make use of their efforts. I also know that it can be a frustrating experience, and not for me alone. So I decided to reflect on this attempt to get onboard with a set-up that will enable me to tweet more easily about interesting things directly from my website. I'll try to do a walkthough that others can follow when I understand better the things I don't understand now.*

Having got [webmentions and comments working on the Mothership](https://www.jeremycherfas.net/blog/not-giving-up-on-indieweb), I thought it high time I started giving some of the satellite sites more of an identity and more independence. First up, Eat This Podcast.

That runs on WordPress, and some time ago I moved it over to a more [IndieWeb theme](https://independentpublisher.me) and implemented some of the IndieWeb principles. Notably, I POSSE longer articles using a plugin called [All in One SEO](https://wordpress.org/plugins/all-in-one-seo-pack/). That actually does far more than POSSE, and one of the reasons I want to move forward is to use tools that are less of a Swiss army knife and more of a scalpel. I’m still using my @WithKnown stream, which really is part of the Mothership, to Tweet and reply to Tweets. So that seemed like a nice low-hanging fruit.

Not entirely.

===

I began by asking around, whether anyone had shared a good practical workflow for originating Tweets and Replies on a WP site. A few had. There was a recommendation to try a plugin called [Bridgy Publish](https://wordpress.org/plugins/bridgy-publish/), another for [Post Kinds](https://wordpress.org/plugins/indieweb-post-kinds/), and one that suggested the two together. Then there was a pointer to some [bookmarklets for desktop use](https://indieweb.org/WordPress#Bookmarklets_for_Desktop), and, coincidentally, ways to establish my identity on the site. All good stuff, and plenty to be getting on with.

First stop, then, the Bridgy Publish plugin; I already had Post Kinds, and wasn’t using it. Installation is easy enough, as it usually is, but what then? The settings are mostly self-explanatory, but what does Maybe mean as an option for Link Back to Post? In fact, what is Link Back to Post? I’m guessing it means that the Tweet, if that’s what we’re talking about, will contain a link back to the originating post on my WP site. I want that only when I am Tweeting to market a lengthier post, not when I’m just Tweeting or Replying. Maybe Maybe gives me a checkbox.

How about Set Twitter from Post Excerpt? Is that going to be like Maybe, in that if there is a manually crafted Post Excerpt, it will use that, but if there isn’t … What?

Bridgy Registration is tricky too. The advice says “Register for silos through the Bridgy site” but when I click on one of the buttons to, say, Register for Google Plus, I end up on Google immediately, being asked to authorise an app, but is that app the WP plugin or is it Bridgy itself? And as I already had registered at Bridgy, do I need to do it again for the plugin?

I know these may seem very noob niggles, but I’m trying to see this from a noob’s point of view. And even as a not-entirely-noob, I’m finding them confusing. But OK, onwards.

Post Kinds is a lot more straightforward. Check the kinds of posts you can imagine using, set a default, and that’s it. But wait, what does “Embed Sites into your Response” mean? I read [the documentation](https://indieweb.org/Post_Kinds_Plugin). I still don’t know, but I check it anyway.

OK, the acid test. Can I now originate a tweet on my site? Scanning the edit a post page, I can see several changes. There’s a widget for Kinds, allowing me to check one of the options I have made available. Great. There’s a widget for Bridgy Publish To, with a drop down that shows Maybe. Aha! I can change this now to Show or Hide. What happens if I leave it at Maybe? I rush back to the Bridgy Publish settings and set the option to Show. I go back to edit a post, and it still shows Maybe. I’m still confused.

There a big new widget called Post Properties, which is part of Post Kinds. (I missed it to begin with, because it is quite low down on the screen, but that’s easily fixed by dragging the widgets to reorder them.) This widget has four tabs. Main has a slot for the URL I want to Tweet about. Great. I stick it in and click Retrieve. The plugin does its magic and returns with a Name/Title and a Summary/Quote from the page and some other information. That’s impressive, but I’m not yet sure what the plugin is going to do with this information. And after saving the changes, the URL field appears to be empty. What? I try again. Same.

Nothing daunted, I publish the post. Can I see the link to the piece I am trying to tweet about? No! I rush over to Twitter. The link isn’t there either. I quickly delete the Tweet and retire to lick my wounds and consider my options.

This obviously isn’t working, at least not out of the box and not for me. I’m fortunate, in that I can go over to the [IndieWeb chat](https://chat.indieweb.org/) and just ask, and I’ll get answers. A real noob can of course do that too. What will they actually do? Give up? Or persevere?

I persevered to get web mentions working on the Mothership, and I’ll persevere to get the satellite doing what I want too.

Next stop, the [IndieWeb Press This](https://wordpress.org/plugins/indieweb-press-this/) plugin.

But not right now.