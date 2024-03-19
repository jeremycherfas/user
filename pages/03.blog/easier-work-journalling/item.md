---
title: 'Easier Work Journalling'
published: false
date: '14-03-2024 10:30'
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

Cleaning up old files, I found my long annual diary files, for which I used to have a [teeny script](https://www.jeremycherfas.net/blog/text-file-journalling) that allowed me to make a rapid little note. At the time I said I didn’t want to go back to Day One for that sort of thing, but here we are five years on and that’s exactly what I want to do.

===

So that’s what I did, bashing out a quick and dirty Keyboard Maestro macro. Simplicity itself:

1. Activate `Terminal`
2. Ask for input to `NoteText`
3. Insert `dayone2 -j Worknotes new %Variable%NoteText%` by typing.

All triggered by `hyper-j`. Job done.
