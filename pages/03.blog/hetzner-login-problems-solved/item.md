---
title: 'Hetzner login problems, solved'
published: true
date: '09-01-2026 11:47'
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

! This post is for future frustrated me, though if it can help someone else, that's wonderful.

Somehow when I tried to access my new Hetzner service from my laptop I got myself in a terrible muddle. Despite a lot of song and dance with `ssh-keygen` and all that that entails, Hetzner kept asking for a password and none of the passwords that I had accumulated seemed to work. I spent a stupidly long time being fiercely independent and trying to find a solution using publicly available information, but something always went wrong. Finally, in desperation, I turned to Hetzner customer support, and they came good.

<pre>
1. Go to the Rescue section of your server, but click on the "Enable rescue & power cycle" instead of the (reset root password) button.
After that, your server will boot into the rescue system.
2. Connect to your server via SSH with the rescue login data.
3. execute the following commands in Rescue:
mount /dev/sda1 /mnt
chroot-prepare /mnt
chroot /mnt
From this point you can now navigate through the file structure of your Cloud Servers primary partition. SSH keys for the root user are stored under "/root/.ssh/authorised_keys".
4. Restart your server and log in with the new SSH key.
</pre>

I did not know about `chroot`. I had a quick read and it made sense as a place to fix some things without breaking others. I could not find any information about `chroot-prepare` and I guess it is a possibly proprietary set of instructions that, er, prepares the protected root directory for me to mess about in.

Fortunately I had been through the rest of step 3. up down and sideways, so I knew what was expected of me there. I did take the precaution of creating a new key-pair just in case there was something funky with the old pair. I used copy and paste like a savage to copy the new public key to `authorized_keys` and restarted the server.

First attempts at logging in revealed that my local `known_hosts` still contained bad information.

`Offending ED25519 key in /Users/jeremycherfas/.ssh/known_hosts:11`

I deleted those, again by hand, until I was given the all clear, and when the login was working correctly I added the information to `~/.ssh/config`.

<pre>
Host hetzner
    HostName XXX.XXX.XXX.XXX
    User root
    IdentityFile ~/.ssh/xxxx
</pre>

As a result, `ssh hetzner` now logs me in from the laptop.

That's a minor win, although problems remain. For one, both `rsync` and `scp` ask me for a password, and that is not supposed to happen now. I also don't know whether access from my other machines is still effective. And I still have no clue what I did wrong to cause this mess.
