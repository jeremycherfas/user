---
title: 'Perl before Swine'
published: true
date: '11-11-2022 09:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Truly, the life of the amateur, cargo-cult coder, can be a vale of tears.

There’s a little program I use to keep a vague eye on how many people are looking at my websites. It is called [Bise](https://fogknife.com/2018-01-03-announcing-bise-a-blog-readership-reporter.html) and is actually rather lovely because it gives a bird’s eye view without going into useless detail and without tracking anything. The big drawback is that it is written in Perl, a language I know little about. Still, by assiduous use of magic incantations, I have had it working nicely for a couple of years. Occasionally, however, something somewhere gets updated and error messages appear. 

===

In the past, these have generally told me that such-and-such module cannot be found, which I quickly learned could be solved by `cpan install Missing::Module`. This time, the incantation failed to work sometimes. This time, although the log whizzes by at inhuman speed, I paid attention. There were, it seemed two kinds of fault. One couldn’t find the module, so I learned to let it look elsewhere. The other proved trickier; something hidden under `~/.cpan/sources/authors/id/` could not be written to because I lacked permissions.  I was a little hesitant at first, because messing with permissions can be scary, but I figured that because this was all on my desktop machine, why not give it a try.

And so it went. Try to install a missing module. Change permissions if necessary. Try to run Bise. Install the next missing module, try Bise again, until suddenly, there was the program output I expected, rather than another error message.

From all of which I take away a few things. I still have no idea which update of what broke everything. Paying attention to error messages usually helps in the end. And maybe I should make an effort to translate Bise into something I understand very slightly better.
