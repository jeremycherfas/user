---
title: 'Found My Way Back to Compass'
published: true
date: '15-03-2026 19:27'
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

I am extremely happy and satisfied to have got [Compass](https://github.com/aaronpk/Compass/) up and running on Hetzner. It was by no means plain sailing, so this is a trail of breadcrumbs for anyone who needs to follow me, like myself at some point in the future when I break it all. I’m going to skip most of the back and forth that got me here, because who needs that?

===

The story so far: my previous host was charging US$5 for the privilege of letting me use PHP7.4, which Compass requires, money that helps to cover the much reduced cost of Hetzner hosting. But while Hetzner allows me to use whichever PHP I want, I still have to get the whole thing working.

## PHP
First off, to get the correct version in the subdomain, put this in `.htaccess` for the subdomain.

`FcgidWrapper "/home/httpd/cgi-bin/php74-fcgi-starter.fcgi" .php` 

You also need to have the right version in the terminal, for which type `export PHPVERSION=7.4`.

## Composer
Compass uses Composer to do the work of installation, but typing `composer install` fails.

`Fatal error: Uncaught Error: Call to undefined function Symfony\Component\Console\str_contains() in /usr/share/php/Symfony/Component/Console/Application.php:860`

Casting around, this seemed to be something to do with polyfills in symfony but it was not obvious how to make those work, so I turned to ChatGPT, which advised updating Composer. 

`Composer update` is not possible from Hetzner’s terminal, but I was able to do so with `wget https://getcomposer.org/composer-stable.phar`

ChatGPT advised me to rename the file `mv composer-stable.phar composer.phar` and make it executable `chmod +x composer.phar`.

Unfortunately, `php composer.phar install` gives a new error.
<pre>
Warning: The lock file is not up to date with the latest
changes in composer.json. You may be getting
outdated dependencies. It is recommended that you
run `composer update` or `composer update <package name>`.
</pre>

Once again, the limits of Hetzner's terminal forbade this and ChatGPT recommended changes to `composer.json` to deal with the specifics and some later error messages to do with security advisories. My updated file is [available here](https://gist.github.com/jeremycherfas/41fec60a8c402a3ab1d6052bfa74a890).

After all that, the command `php composer.phar update -W --no-dev` installs all dependencies while ignoring very old packages. That worked all the way through, noting some problems.

`composer.phar audit` confirmed that there were “14 security vulnerability advisories affecting 9 packages” but ChatGPT reassured me: “That result is expected for a project this old, and for your situation it’s usually acceptable.”

I accepted it and moved on.

## Compass
The various commands in the Compass ReadMe to migrate and create the database tables  went off without a hitch and without any warnings. The ReadMe also warns of the need to route requests to the right endpoints, requiring further additions to `.htaccess`, which now contains:

<pre>
# use PHP 7.4
FcgidWrapper "/home/httpd/cgi-bin/php74-fcgi-starter.fcgi" .php

# Send asset requests to public
RewriteRule ^assets/(.*)$ public/assets/$1 [L]

RewriteRule ^$ public/ [L]

RewriteCond %{REQUEST_URI} !^/public/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ public/index.php [L]

RewriteEngine on
RewriteBase /
RewriteRule !\.well-known|\.(js|ico|gif|jpg|png|css)$ index.php [NC]`
</pre>

Bliss! The URL now shows the Compass logo and a signin field, but nothing in the signin field seemed to work.

I was stumped, and then looked again at `.env` which says “You can add your own domain name to the users table to allow yourself to log in the first time.”

Hetzner makes it very easy to edit the database and after several errors I discovered that the URL in the users table requires a trailing slash. That allowed me to create the main Compass database and to get the details of the endpoint.

## Overland
I added the required endpoint but could see that the data points stored by Overland were not being sent to Compass, with no indication of what the fault might be and, as far as I could tell, no way to see whatever error message was coming back from Compass.

Then I remembered I could use Paw (now RapidAPI) to send a payload directly, without using Overland. That showed that the path for data storage in Compass was wrong. The syntax differs from Dreamhost to Hetzner. 

I edited `.env` to  
`STORAGE_DIR=/usr/www/users/$USER/compass/data/`  
(with the correct value of $USER, obvs).

Now all was good. Overlands points went down as it sent batches to Compass, and the data files at Compass grew accordingly.

Time for a walk, in the name of testing.

## Back to Compass
I could see the route, but not the map behind it. Past me had [the same problem](https://github.com/aaronpk/Compass/issues/53) and the solution worked. After getting a new default API token from MapBox and replacing it in two files, everything worked perfectly.

Yay!

## Why?
OK, so I had proved to myself I could do it, but why did I need to do that? Pragmatically, because over the years I have created a few little scripts that allow me to interrogate my location data, which I have been collecting since 2019. But now I’m wondering. When Compass went off-air, as it were, I started using a different app called Dawarich that did as good a job of displaying routes, though I couldn’t get to grips with analysing the data myself. (I didn’t try that hard, having other more urgent fish to fry.) Since then, I’ve come across other similar programs that do a lot more than Compass. Of course they can import data, although that might mean converting seven years of Compass data. Do I need the extra things those programs can do? Honestly, I don’t think so. Is there more I can do with the data I do have? You bet.

In the end, I think there are a few interlinked reasons I want to stick with Compass (and Overland). One is a kind of loyalty to [aaronpk](https://aaronparecki.com) and the [IndieWeb](https://indieweb.org) more generally, for all that they have done and continue to do. Overland and Compass were a tangible introduction to the real joy of hosting my own data beyond my domains, which I have always owned. The help I’ve received and occasionally been able to give are beyond rubies.