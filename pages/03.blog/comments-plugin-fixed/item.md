---
title: 'Comments plugin fixed'
published: true
date: '15-01-2019 18:30'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
subhead: 'It works for me'
header_image: '0'
summary:
    enabled: '1'
---

Comments to posts here are sufficiently rare that I get a teeny thrill when an email announces "Incoming". How quickly that turned to dust when I realised that although I had received the notification, of the comment itself there was absolutely no sign in the system. As in so many others CMSs, comments here are handled by a plugin, and when I went to check it was clear that the plugin, although authored by the core team, hadn't had any love in a long time.

===

So I rolled up my metaphorical sleeves and got stuck in. The first task was to read slowly through `comments.php`, trying to work out what was happening and why and adding notes to explain things to my future self. I should add that the plugin crashed **after** sending the email, and on a line of code that involved a variable called `language`. Other people had reported problems with `language`, so after stepping my way gingerly through the code and failing to find any important use for that variable in my setup, I just deleted that line. Somewhat to my surprise, it immediately crashed on the subsequent line.

Aha! The language thing was a red herring.

At this stage I was blocked by an inability to see what was going on in the plugin code because it kept crashing. That was when I discovered that it is possible to see the value of any variable by inserting `dump($variable);` into the code (followed by a `die;`, obvs). You end up with a very pretty display of whatever is there. And that was the breakthrough, because it showed that the code was testing for the existence of a thing that simply never existed.

`$post = isset($_POST['data']) ? $_POST['data'] : [];`

To translate, if the variable `$_POST` contains an element called `data`, make $post an array equal to that element. If it does not exist, make $post an empty array.

But when I looked at `$_POST`, it did not contain anything called `data`. Furthermore, the form that sends `$_POST` doesn't put anything called `data` into it. As soon as I removed that, everything worked exactly as I expected it to. A definite win. After that, it was trivial to reverse the order of the commands in `comments.yaml` to make sure that the notification email goes out **after** the comment has been received by the system. Thinking about that, though, I will probably change it back, because it was only because I received the notification that I knew someone had left a comment. And because I have those emails, I can go in and pretend easily to be the commenter. 

I'm actually quite pleased by this result. I keep saying I'm not a developer, but I did manage to untangle the logic and work out how to fix it. There are gaps, I know; I should be testing in various ways for the wholesomeness of the incoming data, and I'm not sure how (or even whether) to submit my fix to the plugin's repository. But hey, it works for me. And that PHP course definitely helped.

I note, too, that the spammers must have given up at some stage, or I would have noticed much sooner. So, thanks again <a class="u-in-reply-to" href="https://www.zylstra.org/blog/" >Ton</a > and <a class="u-in-reply-to" href="https://ruk.ca/" >Peter</a > for making the effort and thereby alerting me to the problem.
