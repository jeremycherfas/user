---
title: 'Text file journalling'
published: true
date: '29-01-2018 18:00'
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

*The story so far:* Yesterday, I discovered <a class="u-in-reply-to" href="https://www.jeremycherfas.net/blog/no-need-for-a-journalling-app">the idea of using 1Writer on my phone to create daily journal entries</a >. Today, pursuing that, I gave up on the idea, sort of, because a folder full of short journal entries poses its own problems, like being able to preview and search the entries really easily.

===

Instead, I went back to one of my jumping-off points. I had no intention of going as far as Daniel Lucraft's <a class="u-in-reply-to" href="http://danlucraft.com/blog/2008/04/plain-text-organizer/" >A Plain Text Personal Organizer</a > but could quite see my way to implementing something more along the lines of George Coghill's <a class="u-in-reply-to" href="https://georgecoghill.wordpress.com/plain-text/" >Plain Text Journaling System</a >. Step one was to make it as easy as possible to add entries to a single plain text file of daily jottings. And of course I want the newest entries at the top, where I am most likely to see them. Turns out prepending to a file is actually a really difficult task to accomplish flawlessly. Not so hard to do badly, so I'm relying on automated backups to save my bacon, should the need arise. 

I plundered George Coghill's experience with <a class="u-in-reply-to" href="https://georgecoghill.wordpress.com/2013/03/22/append-text-file-with-hazel-automator-shell-scripts/" >appending</a > and <a class="u-in-reply-to" href="https://georgecoghill.wordpress.com/2017/12/30/prepend-text-file-with-automator-shell-scripts/" >prepending</a > to text files to build a little `bash` script that I stuck in Automator and saved as a Service.

````
DATE_PREPEND=$(date +"%Y-%m-%d %H:%M")
FILE_CONTENT=$(pbpaste)
echo -e "$DATE_PREPEND: - $FILE_CONTENT\n\n" | cat - /Users/jeremycherfas/Dropbox/notational-data/diary.txt > /tmp/tempfile && mv /tmp/tempfile /Users/jeremycherfas/Dropbox/notational-data/diary.txt
````

Give the Service a keyboard shortcut and up pops a text entry box where I can bang out a quick something that results in a nicely formatted entry in my `diary.txt` file. [^1]

The biggest drawback to all this is that I can't seem to find a keyboard shortcut to click the `OK` button in the text entry box. That's a search for another day. Which reminds me; if I had another file for, say, things to do, it would be trivial to adapt the very same script to add tasks to a different file.

[^1]: If you're following along at home, you'll obviously want to change the filename and path in that little snippet, and of course you can fiddle with the timestamp and other bits of presentation too.

Originally I thought I wanted all the bells and whistles that Day One offers, but I don't really. At least, not yet. If the habit grows on me, I can quite see changing things up and maybe breaking months out into other files or folders. I might even be able to edit the 1Writer action to prepend text to the diary file. At the very least, it'll be easy enough to add entries *via* the phone.