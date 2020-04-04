---
title: 'Spam almost vanquished'
published: true
date: '13-01-2020 19:30'
taxonomy:
    category:
        - blog
    tag:
        - General
        - IndieWeb
summary:
    enabled: '1'
subhead: "But the fight goes on "
header_image: '0'
--- 

I really wanted to post this 3 days ago, on January 10th. That would have been one year since I started recording the amount of spam I was getting over on my micro-site. I first [noticed the problem](https://www.jeremycherfas.net/blog/a-pox-on-spammers) in November 2018, and in January 2019 [started keeping track](https://www.jeremycherfas.net/blog/tracking-spam).

This graph shows all the data from the previous year[^1]. Spam received is in blue. Spam deleted, which includes older spam unwittingly received, is in green.

<div class="ct-chart ct-minor-seventh"></div>

A couple of observations.

- The game is worth the candle. There has been a definite decline over time. I reckon maybe there actually is some sort of feedback that enables spammers to direct their crap onto sites that accept it.
- This seems also to be true of specific URLs, though the data don't show that. My strong impression is that these days when there is a little burst of activity, it all tends to be aimed at one post. Then, later, a different one.
- I've almost got rid of "old" spam, at least as far as I can tell without plumbing the depths of the actual database.

The biggest remaining mystery is why the green bars are out of sync with the blue bars. You can see this most clearly at the right-hand side of the graph, where the two data series should be in lockstep, but the green is displaced by about 12 data points. I'm guessing it has something to do with the way I'm using [Chartist.js](https://gionkunz.github.io/chartist-js/getting-started.html#as-simple-as-it-can-get), but I haven't got the faintest idea what.

My plan is to keep doing what I'm doing, and to let the sparklines in the sidebar reflect spam since 10 January 2020.

[^1]: Another weird thing. I fully expected there to be 365 entries. I thought I had been assiduous. I have not. But the two data series are, thank heavens, the same length.

<script>
var data = {
series: [
[7,6,3,4,2,23,14,6,2,2,0,5,10,4,2,1,3,1,1,5,3,3,1,1,1,0,0,2,19,1,6,1,5,8,4,0,1,3,5,2,0,11,9,0,5,3,1,1,3,3,6,1,3,5,1,0,6,1,3,12,3,1,0,1,0,0,6,2,3,5,2,5,4,5,3,9,2,2,3,2,1,1,1,3,1,2,6,1,2,1,1,1,2,1,2,0,3,3,4,1,1,1,1,1,4,2,5,5,3,1,3,1,4,2,2,3,1,3,4,0,4,8,2,1,3,1,0,0,0,2,1,2,2,2,3,4,3,1,1,0,1,3,0,0,1,1,0,2,0,0,1,1,3,1,3,0,1,5,1,1,3,2,2,1,1,1,2,0,0,2,1,0,0,2,0,2,1,3,1,1,0,2,0,1,0,0,4,0,0,0,2,0,7,1,2,0,1,3,0,0,2,5,1,2,0,0,0,1,1,0,0,0,1,0,0,2,2,0,0,1,3,1,0,1,0,0,2,0,1,2,0,1,3,1,0,0,0,0,0,0,1,0,0,2,1,0,0,0,1,1,1,0,5,0,0,0,1,1,0,0,1,0,0,0,0,0,0,0,0,0,1,0,0,1,0,1,1,21,0,0,0,0,0,0,0,0,0,0,0,0,1,2,0,1,0,0,0,0,0,2,0,0,0,0,1,0,1,0,5,2,0,2,1,1,5,1,0,2,0,0,0,0,0,1,0,0,0,0,1,1,1,6,0,0,0,1],[14,6,22,11,6,27,29,7,2,3,0,7,32,8,2,1,6,1,1,10,3,1,6,2,1,0,0,2,22,1,6,1,10,10,4,0,1,7,7,5,0,23,15,0,7,6,2,1,13,3,14,1,3,12,1,1,6,1,3,13,6,1,0,1,0,0,6,3,4,8,5,5,7,5,3,9,3,2,3,2,7,1,2,5,1,15,16,1,2,12,2,1,2,1,2,0,3,3,6,1,1,2,1,1,4,2,6,5,11,2,9,1,4,2,2,3,1,4,4,0,10,8,3,1,3,1,0,0,0,2,1,2,2,2,3,4,3,1,1,0,1,4,0,0,1,1,0,2,0,0,1,1,3,1,3,0,1,8,2,1,4,2,2,1,1,1,4,0,0,2,5,0,0,2,0,2,1,3,1,1,0,2,0,1,0,0,4,0,0,0,2,0,7,1,2,0,1,3,0,0,2,6,1,2,0,0,0,1,1,0,0,0,1,0,0,2,2,0,0,1,3,1,0,1,0,0,2,0,1,2,0,1,5,1,0,0,0,0,0,0,1,0,0,2,1,0,0,0,1,1,1,0,5,0,0,0,1,1,0,0,1,0,0,0,0,0,0,0,0,0,1,0,0,1,0,1,1,21,0,0,0,0,0,0,0,0,0,0,0,0,1,2,0,1,0,0,0,0,0,2,0,0,0,0,1,0,1,0,6,2,0,2,1,1,5,1,0,2,0,0,0,0,0,1,0,0,0,0,1,1,1,6,0,0,0,1,0,1]
]
};

var options = {
axisX: {
showGrid: false,
showLabel: false,
}
}

new Chartist.Bar('.ct-chart', data, options);
</script>
