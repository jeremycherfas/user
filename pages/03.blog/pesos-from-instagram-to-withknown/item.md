---
title: 'PESOS from InstaGram to WithKnown'
published: true
date: '29-07-2020 16:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: “Still fragile, but it works"
header_image: '0'
--- 

Six days ago, I learned about [Bibliogram](https://bibliogram.art). It offers a neat and fast view of public Instagram profiles, and some instances also offer a RSS feed. That <a class="u-in-reply-to" href="https://stream.jeremycherfas.net/2020/pesos-from-instagram#comments" >set me thinking</a >. Could it be a way to automatically post photos from InstaGram to [my stream](https://stream.jeremycherfas.net)?

I’m here to tell you: it could.

===

After a fair bit of tinkering, I created a script that works. I [stuck it on Github](https://github.com/jeremycherfas/pesos-instagram-to-withknown), which still make me feel a lot like an imposter, but hey, maybe someone will find it useful.

I use the Bibliogram feed to build a Micropub request for WithKnown, thus setting my pictures free. The only reason to do this is pure laziness. I’m not worried that InstaGram is going to up and swallow my photos (though it might) because I still have all of them on my devices. I do, however, want to put them somewhere that I can tweak if I wish to. That was happening thanks to the wonderful OwnYourGram, but Instagram is becoming even more of a bully and OYG is having a hard time of it.

The nice thing about OYG was that, thanks to another fine IndieWeb service called [Bridgy](https://brid.gy/), likes and comments and suchlike came back from InstaGram to my site. I’m not sure yet how to make that work under the new regime.

My script has problems, notably occasional error messages from WithKnown even though it has created the post, but it works — and [here’s the proof](https://stream.jeremycherfas.net/2020/a-very-boring-photo-for-a-very-exciting-reason). I’m aware that it isn’t very robust, either. Eventually, I hope to improve that.

There is other stuff to be done too, like figuring out exactly how multiparagraph descriptions in InstaGram come through and maintaining the post order, but those are, for now, minor.

At the moment I am running this once or twice a day by hand to see how things develop. I am not a very frequent poster to InstaGram, so that is no problem. I’m leaning towards running it maybe four times a day as a `cron` job, and would welcome other suggestions.

!!!<a href="https://news.indieweb.org/en" class="u-syndication">Also posted on IndieNews</a>.
