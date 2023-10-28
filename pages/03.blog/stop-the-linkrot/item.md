---
title: 'Stop the Linkrot'
published: true
date: '28-10-2023 22:04'
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

We had a session at [IndieWebCamp Nürnberg](https://indieweb.org/2023/Nuremberg) on linkrot in its many guises. As time goes by, URLs you link to and things that link to your URLs almost inevitably break in different ways. Perhaps a whole domain vanishes or becomes a sleaze-hub. Perhaps someone changes the structure of their website, breaking previous URLs.

We discussed various approaches to fixing the problems. Some are highly dynamic, intercepting each outbound link and deciding where that should go, for example to a snapshot in the Internet Archive. Some are completely static and, probably, already broken once again. 

That's my own story. On 18 July 2021 I decided to be [thorough about importing old posts](https://www.jeremycherfas.net/blog/reading-a-day-at-a-time) into my new CMS, which involved hand checking every link. If the domain was correct but the link not found, I tried to search for it. If that failed, or if the domain failed, I searched the Wayback Machine, trying to find a snapshot from around the date of my original post. If that failed I gave up and recorded the link as dead and sometimes also marked it struck through.

## A Treadmill

The big problem, of course, is that although you may have confirmed that an outbound link is not broken, all you are really doing is resetting the decay clock to zero. The link could break tomorrow, or the day after, or ... 

An external link checker would help with that, and I remembered one from long ago and far away: [ahrefs broken link checker](https://ahrefs.com/broken-link-checker). This is now fiendishly expensive to use on a regular basis, but as a one-off it showed me almost 10,000 broken outbound links, two of which had definitely rotted in the past couple of years.[^1] More worrying, there were 2300 broken incoming links, links that were trying to find something I had written and couldn't.

This was worrying because one of the first things I did when moving over to this CMS was to ensure that the last bit of the URL, the slug, as it is known, which distinguishes this post from all other posts, would be the same as it had been when the CMS was WordPress. This required a bit of magic in the `.htaccess` file to remove all the information associated with WordPress and replace it with the information needed by this CMS. I thought it worked, but that was because I had failed to test it thoroughly. The broken link checker showed me the exact problem. Time for new `RewriteRules`

[Tom Anypuppies](https://webrocker.de) helped me to devise two new rules that are more elegant than my previous effort and that coped with a greater variety of options. For the record, they are:

```
RewriteEngine On

# Redirect from old WP format to new Grav format
# First one captures all wp URLs with a slug
# Second one captures links to old Home page

RewriteRule wp(?:\/Archive)?(?:.*)\/(.*)\/$ blog/$1 [R=301,L]
RewriteRule (wp\/?)$ \/ [R=301,L]
``` 

Very satisfying. Now I need to think about regular applications of rot protection.

[^1]: I **will** get to them, and the others that need it, eventually, and I **will** institute a regular, scheduled cleanup.
