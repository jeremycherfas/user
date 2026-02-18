---
title: 'Still no birds'
published: true
date: '14-02-2026 12:39'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: "But at least it’s looking"
header_image: '0'
---

Got some very good advice about <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/no-birds-yet">my BirdNET-Pi</a> in reply to the issue I raised because the [Analyser cannot keep up with Recorder](https://github.com/Nachtzuster/BirdNET-Pi/issues/567). A `cron` job to delete recordings more than 10 minutes old every five minutes ensures that the Analyzer does not stalls.

<code>
*/5 * * * * find ~/BirdSongs/StreamData/ -name "*.wav" -mmin +10 -delete
</code>

Very neat. Also reduced the length of each recording from 30 to 15 seconds, and implemented the experimental ram drive, which sounds way scarier than it ought.

Everything has now been chugging along smoothly for almost three hours. Mind, it hasn't detected any birds yet. Not surprising given the foul weather this morning.
