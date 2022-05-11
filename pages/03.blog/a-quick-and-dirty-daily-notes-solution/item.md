---
title: 'A quick and dirty Daily Notes solution'
published: true
date: '11-05-2022 09:30'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Prompted by Maggie Appleton’s recent update to her post on [Daily Notes Pages](https://maggieappleton.com/daily-notes), I was fondly remembering a time when I had a [teeny little script](https://www.jeremycherfas.net/blog/text-file-journalling) that appended a single line of text to a kind of log. At the time, I noted that I didn’t want to go back to, say, Day One to do that, and even after I had returned to Day One, which works so well for more reflective journalling, I didn’t want to use it for the kind of fleeting note that might trigger something else but as likely might not. So, in the spirit of automating all the things, I returned to my original thought and repurposed it to work with The Archive, which is where I keep all my various notes.

There have been various discussion of daily notes in the Zettelkasten forum, and I borrowed ideas from [Better Journaling with The Archive (and BitBar)](https://forum.zettelkasten.de/discussion/1559/better-journaling-with-the-archive-and-bitbar). I don’t have Keyboard Maestro and I didn’t want BitBar, but the principles are absolutely sound, so I adapted them to create a single script:

```
#!/bin/sh
# Open a daily journaling note
# Create the note if it does not exist

ZK_PATH="/Users/path/to-your-notes"
DAY=`date +%Y%m%d`

NOTE="${ZK_PATH}/${DAY}${HOUR}.md"

if [[ -f "$NOTE" ]]; then
    open "thearchive://match/${DAY}"
else
	echo "# Journal Note" >"${NOTE}"
	echo "Date: "`date +"%d %B %Y %H:%M"` >>"${NOTE}"
	echo "Tags: #journal" >>"${NOTE}" 
	echo "" >>"${NOTE}"
	open "thearchive://match/${DAY}"
fi
```

The script runs from an Alfred workflow. The first time on any given day it creates the note and opens it. Next time, it just opens the note. And because the note has a specific tag it is easy to find all such notes and see whether there is anything there I need to act on.

I’m pretty sure that this could be more elegant, probably by testing for the absence of the note rather than its existence. Another nicety would be to capture some input and append it to the day’s note without even opening it. The previous little script might offer a start for that. But hey, it works as intended and that’s good enough for me right now.
