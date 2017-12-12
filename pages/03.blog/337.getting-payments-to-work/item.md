---
title: 'Getting payments to work'
published: true
date: '12-12-2017 08:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Podcasts
summary:
    enabled: '1'
subhead: ' '
header_image: '0'
---

Patreon's recent debacle[^1] kicked me out of my shy and retiring mode and prompted me to offer listeners alternative ways to <a class="u-in-reply-to" href="https:/eatthispodcst.com/supporters" >support my podcast</a >. In a sense I am lucky, because the podcast lives on a WordPress-powered website, which means that there are many different options to do that. And in an sense I am unlucky, because *ditto*.

===

[^1]: Not going to bother with details here; it's all over the internet. Long story short:  it penalises people who give a little support to a lot of creators, a situation I find myself in as both a patron and a creator.

So I spent most of Saturday researching how to receive payments and how to enable WP to make that happen. Because WP is so popular there is a plethora of pages telling you about 23 great ways to receive payments on your site, but not many that say this is the one best way to do it. In the end I decided on <a class="u-in-reply-to" href="https://stripe.com" >Stripe</a > to process the payments, because it has no standing charges at my level of business, only fairly standard processing charges (the kind Patreon is passing on to patrons, and that I will be absorbing). It proved remarkably easy to set up an account and to tie it to my bank for when the money comes rolling in.

Not so easy were the details of how to interact with Stripe. Fortunately, there are plugins that aim to do that part for you. Each probably has merits, but in the end, after trying a couple, I decided to pay up and buy a subscription to <a class="u-in-reply-to" href="https://formcraft-wp.com" >Formcraft</a >. Two reasons. First, they have a specific Stripe template (which costs extra) that looks really sharp. Secondly, they offer lots of other forms, thus replacing at least two other plugins I currently use.

Sunday I spent tying it all together. The Stripe part, as I said, is easy. The forms, not so much, mostly because there are lots and lots of options to fiddle with. Some would have allowed me easily to emulate behaviour I find disgusting[^2] but for the most part it was just a rabbit hole of trying to get things to look the way I wanted them to.[^3] Stripe thoughtfully offers a whole suite of test data that you can use to check that everything is working as you expect, and I put some of that to work. 

[^3]: In the end, though, I had to give up on that, so if you see something that looks bad, please blame me. It's remarkable how one little decision can have so many repercussions on the rest of the website.

[^2]: Nagging pop-ups that obscure your view of the page, anyone?

The hardest decisions were what, actually, to offer. I could not see a way to easily use Stripe to collect a payment per episode, although I bet it could be done. That was one of the great benefits of Patreon. Instead, I decided to offer a six-month season ticket at three different levels of support. My expectation is that this will keep transaction fees low and income somewhat predictable. In some sense, it's an experiment, to be tweaked as we go along. And once I was on a roll, I added two more options to send one-off payments, *via* PayPal or with a credit card, again with three levels of support.[^4] Also, I'm not about to deny anyone who wants to use Patreon the opportunity, so that remains an option too.

[^4]: I wanted to have the middle one of those a default option, because nudges, but to do so would require another payment to Formcraft, and the goal of the exercise is to receive money, not pay it out. Maybe later.

So that's it. I now have the ability to accept donations on my podcast site. I'd meant to do this ages ago, and the Patreon changes were a good goad. I feel pretty good about this, not technically, because other people are doing all the behind-the-scenes magic, but because it does make me a bit more independent. Sure, I still depend on third parties, but I have a bit more control and the chance to engage even more directly with my supporters.