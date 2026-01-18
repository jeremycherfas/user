---
title: 'How to reset a password'
published: true
date: '26-12-2025 13:08'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: "When email is not working"
header_image: '0'
---

I often say that I know enough about computing to be a danger to myself, and that was amply borne out a couple of days ago. Recently I had installed [dawarich](https://dawarich.app) on my Raspberry Pi to keep track of where I have been.[^1] Unfortunately, in all the excitement of getting it working and being able to access it from afar, I forgot to make a note of the password I had assigned myself and now it required me to login again.

===

No problem; dawarich’s dashboard offers to email details for a password reset. Great, but the email failed to arrive. It struck me that my Pi has never sent an email anywhere (Signal messages, yes; but that’s [another story](https://www.jeremycherfas.net/blog/signal-alerts-from-uptimekuma)). And so began a very lengthy session with ChatGPT, in which we played around with all sorts of things, from establishing whether the Pi could send email (it could not) to diving deep into dawarich’s innards and attempting to persuade it to send an email, all of which, many hours and many docker downs and ups later, amounted to a big fat waste of time.

Along the way, I had asked ChatGPT to show me how to get into the SQL database inside dawarich’s docker container, which it duly did. And so finally, frustrated and exhausted, I asked whether I could use SQL to grant a new password. Oh yes, and pretty easy too.

<code>
# Open Rails console inside the app container
docker exec -it dawarich_app bin/rails console

# Then, in the Rails console, run:
user = User.find_by(email: “user@example.com”); user.password = “NewTempPassword123!”; user.password_confirmation = “NewTempPassword123!”; user.save!
</code>

Done and dusted, and it worked.

Why I thought attempting to get email to work was a good idea I have no idea.

[^1]: Because Compass requires a PHP version that was costing me $5 a month, and because dawarich accepts input from Overland, even though it isn’t nearly as easy to play with it’s data.
