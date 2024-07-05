---
title: 'Fixing Karabiner-Elements'
published: true
date: '05-07-2024 12:50'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
summary:
    enabled: '1'
subhead: "So many gotchas "
header_image: '0'
---

The saga of synchronised futzing continues with a couple of days of hair-pulling finally resolved to my satisfaction. This time it was Karabiner-Elements, which I use almost exclusively to enable the hyper-key (⌘⌥⇧^). Just not working on the laptop after upgrading here to Sonoma. I vaguely remembered a problem on the desktop, but not whether the solution was anything complex. After untold attempts at deleting, re-installing, upgrading to the beta, restarting, re-restarting etc etc etc, I finally knuckled down to read the various issues.

There was a lot there that I did not fully understand, but at last came a clue that the use of symbolic links, *via* Mackup, might be the problem. I dug around a bit more and finally [found a clear answer](https://github.com/pqrs-org/Karabiner-Elements/issues/3051#issuecomment-1355253877) I could use:

>> My issue was that karabiner_grabber needed full disk access

> For clarity, what this means is to make sure "karabiner_grabber" checkbox is ticked in the System Preferences -> Privacy and Security -> Full Disk Access. By default the item is there, but is not ticked.

Done, and it worked. Maybe this will help someone else, not just future me. And now I’m thinking, maybe I could do more with Karabiner.