---
title: 'Making link posts in WP work for me'
published: true
date: '04-08-2017 10:36'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
---

As I [mentioned](https://www.jeremycherfas.net/blog/trying-to-tweet-directly-from-wordpress), one of the reasons for trying to tweet from WordPress is to  consolidate my various web presences. For Eat This Podcast, I want to be able to do the social stuff on the website and then send it out into the wide-open, tightly closed world of social media. So far that has been a frustrating experience, but I did accomplish something worth sharing.

===

I see a lot of interesting things on the internet that I enjoy sharing. The best of those end up in [Eat This Newsletter][campaign-archive1]. Some, however, are either more timely or, perhaps, merit just a few words of comment. I'd like to share those links as and when from the site.

Lots of people share links, of course; that's one of the joys of the internet, and how I find many interesting things. But I don't like the way my WP theme presents link posts. Ideally, I want the title of the post to link to the interesting thing I'm linking to, not back to the permalink of the post itself. [^1]

OK. The WP theme I use does not offer any special formatting for link posts. But [a user of that theme][friedrich] wanted the same styling as I do, and submitted changes to do that. The theme developer very reasonably said that this was probably not something that most people would want, as it may be counterintuitive to have the title of a post behave in different ways under different circumstances. Counterintuitive or not, it's what I wanted, so I reached out and got permission to make use of the changes.

There are two components, a new template part, `content-link.php`, and an addition to the template tags, [both of them here on GitHub][github].

As I have a child theme, it was easy to add the new template part and the modified template tags to my theme, but when I went to look at the result, it was odd. On the home page, where there is a river of posts, a link post looked and acted as I hoped it would. As an isolated post, however, it did not. Eventually I realised that the theme had a unit that created a single post, and it used one template part to do it all, with a bit of jiggery-pokery to make different kinds of post format look good.

I poked around for a good long while trying to understand how everything worked, and after a few false starts came up with a very simple solution.

The original theme has this on [line 16 of single.php][github 2]:

`<?php get_template_part( 'content', 'single' ); ?>`

I replaced that with

````
<?php $format = get_post_format( $post_id ); ?>
<?php get_template_part( 'content', $format ); ?>
````

Which I'm sure is most inelegant, but it works for me. And it opens up the possibility of styling other types of posts differently too. 

[^1]: Phew, this is getting complex, and is probably of little general interest. I'm after a presentation generally known as "Daring Fireball style links" because they were invented by John Gruber on his website of that name. I did that here a while ago.

[campaign-archive1]: http://us5.campaign-archive1.com/home/?u=59668693936c91dcc968461d9&id=811e6eeb0e
[friedrich]: http://friedrich.uk
[github]: https://github.com/raamdev/independent-publisher/pull/280/files
[github 2]: https://github.com/raamdev/independent-publisher/blob/master/single.php#L16