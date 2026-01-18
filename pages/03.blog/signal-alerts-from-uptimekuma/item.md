---
title: 'Signal Alerts from Uptime-Kuma'
published: true
date: '22-11-2025 11:14'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - IndieWeb
summary:
    enabled: '1'
subhead: " "
header_image: '0'
---

Uptime-Kuma, a [self-hosted internet monitor](https://github.com/louislam/uptime-kuma), will now send alerts to me using Signal. This is roughly how I did it, more as an _aide-memoire_ for my future self, but perhaps it can help you.

===

The first thing is to install the [Signal REST API](https://github.com/bbernhard/signal-cli-rest-api) and send a test message, as per the excellent instructions, which included an easy way to link my Pi to my phone.

The Notifications screen on Uptime-Kuma is faily straightforward, but there are definite gotchas. If you use any version of the URLs that the Signal REST API suggests, you get an error: `ECONNREFUSED`

Spelunking in Uptime-Kuma's Github Issues took me [where I needed to be](https://github.com/bbernhard/signal-cli-rest-api). The solution is to enable the two Docker containers to talk to one another, which I had vaguely remembered from my first run through the Docker documentation. The steps as given, however, would not work for me.

The Docker documentation gave me the correct formula:  
`sudo docker network create -d bridge kuma-network`

Then you have to add the two containers to the network, which means you need their hashes or names. Get them with:  
`sudo docker ps`

Now add the containers to the network; I used their hashes:

```
sudo docker network connect kuma-network f356eabddee1
sudo docker network connect kuma-network e2275c9c6d3c
```

Nearly there. Now restart the containers:  
`sudo docker container restart e2275c9c6d3c f356eabddee1`

But still testing the notification fails, because you need the correct URL for the Signal REST API, which you find with:  
`sudo docker inspect kuma-network`. 

`http://172.19.0.3:8080/v2/send` in the Kuma Notification panel successfully sends a test. Save the details, and away I go hoping, of course, never actually to get an alert.

Next up, ensure all the Docker bits restart after a reboot.

<div class="notices yellow">
<p>Syndicated to <a href="https://news.indieweb.org/" class="u-syndication">IndieNews</a></p>
</div>