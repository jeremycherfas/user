---
title: 'Unable to login to Monocle'
published: true
date: '26-01-2024 10:25'
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

Monocle would not allow me to login using WithKnown, saying there was no microsub endpoint. This was because in upgrading Known, I had forgotten that I had added the link to microsub before. I had also forgotten which of the hundreds of template files I had to edit in order to do that. In the end I found it with a brute-force search for all files ending in `.tpl.php` The file in question lives at `./IdnoPlugins/IndiePub/templates/default/indiepub/shell/head.tpl.php`.

Having found the correct file to edit, the rest was straightforward thanks to [excellent instructions](https://indieweb.org/Microsub#Setting_up_Microsub).