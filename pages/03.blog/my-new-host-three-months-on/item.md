---
title: 'My new host, three months on'
published: true
date: '09-03-2026 19:35'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Admin tax is expensive "
header_image: '0'
---

It’s now been a bit more than three months since I first opened an account on Hetzner and a week since almost everything (not the DNS for this domain) switched over, so I thought it was a good time to recap.

===

## Pros & Cons
The main points in favour are:  
- Price is favourable and will be even after the increase
- Backups and Snapshots are included (though I don't yet know how to use Snapshots)
- WebFTP works well and reliably
- Checking sites with a private URL before going live is **very** handy
- Located in Europe
- Storage buckets are **much** simpler

On the debit side, specifically for the web hosting package:  
- SFTP only access, so no `rsync`
- Connection can be flaky at times
- Documentation assumes a lot of prior knowledge
- Dashboard is confusing at first (and still)

## Additional thoughts
For sure, my not-altogether-great experience was the result of rushing forward with too little, er, experience. It made me realise that for as long as I have been online and dabbling, I have never really understood how servers work. 

My first effort, for example, was to host my photo portfolio on a naked server. There are plenty of tutorials, but I failed to find any that explained why I should prefer nginx over Caddy, or _vice versa_, and those that favoured Apache (the only one I know) often omitted the details of actually installing Apache. Of course I could have spent a lot more time doing the research and pulling together my own instructions from here and there, and maybe that’s something I ought to do, but in the end I slavishly followed one person’s instructions and ended up with something that worked, though not without some hair-tearing frustrations.

The great thing about a server on Hetzner is that you can have `SSH` access, which allows you to do maximum damage with minimum effort and also enables reasonably simple day-to-day maintenance when required. It is also very easy to create S3 compatible buckets, so I could move my backups and podcast audio files away from Amazon S3. Without `SSH`, however, things like updating a file or creating an off-site backup or deleting a directory are much more tedious.

When it came to moving dynamic sites, I tangled myself in knots. The tutorial for multiple sites (sub-domains or actually different domains?) was for an OS I knew nothing about. The one for the OS I did know said nothing about either sub-domains or separate domains. Could I translate the instructions successfully? Don’t I have better things to do with my time? Finally, however, my confusion got the better of me and I went for the web hosting package instead, with the drawbacks I listed above, and despite the drawbacks, I am very happy to have made the transition.

## Where is the information?
The biggest problem I have is that searching online very seldom turns up the kind of extra information I need. People seem to have absorbed their background knowledge by osmosis or in other ways unavailable to me. And when I have finally got to where I want to be, I find I have failed to make a note of all the steps it took, so I cannot easily recreate the path for my future self or anyone who wants to follow my path.

One final example of the difficulties I created for myself. In creating a server, you get various options for passwords and key pairs, and you’re expected to know exactly what to choose. I didn’t, and spent far too many hours trying to figure out why logging on was so temperamental. Then I read this brilliant guide:  [Setting up an IRC server](https://www.neatnik.net/setting-up-an-irc-server/). Alas, it was published after I had thrown in the towel, but I am now armed with the information I need to have another go at the server thing. Eventually.
