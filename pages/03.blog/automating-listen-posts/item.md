---
title: 'Automating listen posts'
published: true
date: '12-05-2019 11:45'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "Not as hard as I expected"
header_image: '0'
--- 

Getting my podcast listening history out of Overcast and into this site has been going swimmingly since I started a couple of months ago. I had to do everything manually, but that was OK as it gave me the chance to check that it was indeed all going swimmingly. While my friends have been sharing all their great ideas for the hack day at this weekend's [IndieWebCamp in Düsseldorf](https://indieweb.org/2019/Düsseldorf/Schedule#Sunday), earlier this week I decided that the time was right to start automating my listen s posts. This was prompted by the podcast [Automators #22: Text Expansion](https://www.relay.fm/automators/22), co-hosted by one of those friends.

===

TextExpander is one of those apps that does so much more than merely expand text even if, like me, you refuse to upgrade to the subscription model.[^2] I've never quite got to grips with "proper" scripting languages, but I've dabbled enough in Applescript to be able to run other scripts, and the podcast reminded me that Text Expander can run Applescripts easy peasy. So I began hacking something together.

The first step was simply running the `listen s-2.php` script. That worked fine once my friends pointed out to me the importance of the magic constant `__DIR__` if you are going to run scripts from outside the directory they are in.

Then I wanted to be able to check the results, so I hacked together another little bit to open the folder where all those listen posts live. That doesn't quite work as I would like, because I can only open the folder that contains the folder I want. But hey, at this stage, the need for another keystroke doesn't detract from this being another small win.

Finally, in the manual phase leading up to this, I had to push the new posts from my computer up to github, from which they were automatically sent to this site. That proved not too difficult either, thanks to a [handy Stack Overflow answer](https://stackoverflow.com/questions/36891360/update-git-repository-with-apple-script).[^1]

Here is the final script.[^3] The rigmarole to set `thescript` allows me to use a slightly different script for some testing without too much trouble.

````
set thepath to "/Applications/MAMP/htdocs/listen s/"set thefile to "listen s-2.php"set thescript to thepath & thefiletell application "Terminal"	activate	set shell to do script "php " & quoted form of POSIX path of thescript in window 1end telldo shell script "cd Applications/MAMP/htdocs/grav-admin/user/pages/06.stream/ && git add -A && git commit -m listen sfromApplescript && git push"tell application "ForkLift"	activate	reveal path "Applications/MAMP/htdocs/grav-admin/user/pages/06.stream/"end tell
````

It worked, this morning. I don't really want to test too often as it might overuse the Overcast data and requires me to clean up after each test. But I have every expectation that it will work again tomorrow, when I have listen ed to some new podcasts. Maybe after a couple of weeks with this version I will have the confidence to turn it all into a `cron` job.

[^2]: I do also use Alfred to expand text and to run snippets of code, but I find Text Expander a lot more intuitive. I might need to re-examine my decision and see what additional benefits a subscription would bring.

[^1]: That also provided a good explanation of why it is better to chain the commands with `&&` rather than use `;` to separate them:  
"Chaining commands with the `&&` operator has the benefit that if the first command fails, the second command is skipped too. Semi-colons just act as command separators, as do line feeds; they don't affect execution, so even if a vital command like the `cd` fails the subsequent commands are still applied, but now in the wrong directory."

[^3]: Improvements gratefully accepted.
