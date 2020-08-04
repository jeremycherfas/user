---
title: 'Monthly report: July 2020'
published: true
date: '01-08-2020 17:20'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Monthlies
header_image: '0'
summary:
    enabled: '1'
subhead: ' '
---

Not a huge amount to report this month, mostly because we were on holiday for a little more than two weeks, and a glorious holiday it was too. We are very fortunate not to be in either of our home countries, so were able to enjoy travelling, for one thing, and great places to travel to, for another. And I promised myself I wouldn’t bang on about the tragic landscape of dead olive trees in Puglia, so I won’t.

===

## Highlights of the month:

- The holiday, obvs., …
- … although the new car played up. It is a hybrid, and the hybrid system stopped working. Fixed, twice, but I am none the wiser.
- Failure of cron jobs on the main machine, and no way to recreate them on the laptop. Manual till it hurts.
- Read *All The Light We Cannot See*, which was divine.
- Visit to Scarascia Cactus; ditto.
- All the plants survived, with a few slightly scathed.
- Bits of work completed.
- Cracked PESOS from Instagram to WithKnown (see below)

### Exist.io

Steps down a bit, sleep down a bit, weight down a bit.

### Activities
July: 
* Walking with sticks 0
* Reading: 13
* Steps (avge): 8349 (down a bit) 
* Podcasts: 27 (If I don’t walk, I don’t listen.)
* 7 Minutes: 4 days and 6 cycles (Not on holiday, and not easy getting back into it.)

June: 
* Walking with sticks 0
* Reading: 7 (Mostly magazines; could not select a novel)
* Steps (avge): 8874 (up a lot)
* Podcasts: 43.
* 7 Minutes: 13 days and 39 cycles (Not doing the single cycles between times any more)

### Work

Mostly a question of tending to minor things while away, and then a couple of decent jobs after our return.

#### Hours logged per month
<noscript>
    <style type="text/css">
        .ct-minor-seventh {display:none;}
    </style>
    <div class="notices blue">
<p>If you want to see the graphs, please enable javascript. Thanks.</p>
    </div>
</noscript>
<div class="ct-chart ct-minor-seventh">
<ul style="list-style-type: none; padding-left:2.4rem;">
<li><span style="color:red;">2020</span></li><li><span style="color:green;">2019</span></li><li><span style="color:blue;">2018</span></li></ul>
</div>

#### Percent of logged hours: 2020
<noscript>
    <style type="text/css">
        .ct-minor-seventh {display:none;}
    </style>
    <div class="notices blue">
<p>If you want to see the graphs, please enable javascript. Thanks.</p>
    </div>
</noscript>
<div class="ct-chart-2 ct-minor-seventh">
<ul style="list-style-type: none; padding-left:2.4rem;">
<li><span style="color:blue;">Admin</span></li><li><span style="color:green;">Eat This Podcast</span></li></ul>
</div> 

Previous years are on [an archive page](https://jeremycherfas.net/blog/working-life).

### Goals

Four new posts, no old ones brought in.

[PESOS](https://indieweb.org/pesos) from Instagram to WithKnown wasn’t even a goal at the start of the month. Then I learned about Bibliogram, which offers a straightforward RSS feed of an Instagram profile. That, I thought, could allow me to suck the information out of Instagram and bung it on my own site. After a couple of false starts and a bit of faffing around, I managed to [get it working](https://www.jeremycherfas.net/blog/pesos-from-instagram-to-withknown).

Noone was more surprised than me.

### Niggles

Automate PESOS to Known, probably with `cron` and try to ensure that I get some kind of notice when any `cron` job fails.

Resume work on Micropub for Grav?

This still remains unlooked at: *It would be good to error check the script that pulls in the podcasts I’ve listened to. Why does it occasionally miss an episode when the data clearly show I listened to it?*

### Final remarks

Very rested.


<script>
var data = {
series: [
		{ name: 'Hours logged 2018', data: [0,0,152,159, 151,96,68,185,131,100,0,0] },
		{ name: 'Hours logged 2019', data: [95,121,158,128,145,75,58,110,128,96.5,154.1,96.1] },
		{ name: 'Hours logged 2020', data: [89.25,129,164.1,175,170,171,83.33,,,,,] }
		]
};

var options = {
	axisY: {
		type: Chartist.FixedScalesAxis,
		high: 200,
		low: 0,
		divisor: 8
	},
	axisX: {
		type: Chartist.StepAxis,
		ticks: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
		stretch: false
	},
}

new Chartist.Bar('.ct-chart', data, options);


new Chartist.Bar('.ct-chart-2', {
  labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
  series: [
    [48,45,38,36,40,26,44,,,,,],
    [19,17,27,18,22,19,12,,,,,]
  ]
}, 
{
  stackBars: true,
	axisY: {
		type: Chartist.FixedScalesAxis,
		high: 100,
		low: 0,
		ticks: [20, 40, 60, 80]
	},

}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 30px'
    });
  }
});

</script>

----

## Here's the table
<details>
<summary style="font-size: smaller;">Click the triangle to see or hide the table</summary>
<table class="worktable">
<thead>
<tr>
<th style="text-align: right;" class="bigrow">Month</th>
<th style="text-align: center;" class="bigrow">Total</th>
<th style="text-align: center;" class="smallrow">Daily</th>
<th style="text-align: center;"class="smallrow">Admin %</th>
<th style="text-align: center;"class="smallrow">ETP %</th>
<th style="text-align: center;"class="smallrow">Other %</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align: right;">07</td>
<td style="text-align: center;">83.33</td>
<td style="text-align: center;">4.17</td>
<td style="text-align: center;">44</td>
<td style="text-align: center;">12</td>
<td style="text-align: center;">44</td>
</tr>
<tr>
<td style="text-align: right;">06</td>
<td style="text-align: center;">171</td>
<td style="text-align: center;">5.70</td>
<td style="text-align: center;">26</td>
<td style="text-align: center;">19</td>
<td style="text-align: center;">55</td>
</tr>
<tr>
<td style="text-align: right;">05</td>
<td style="text-align: center;">170</td>
<td style="text-align: center;">5.67</td>
<td style="text-align: center;">40</td>
<td style="text-align: center;">22</td>
<td style="text-align: center;">38</td>
</tr>
<tr>
<td style="text-align: right;">04</td>
<td style="text-align: center;">175</td>
<td style="text-align: center;">6.03</td>
<td style="text-align: center;">36</td>
<td style="text-align: center;">18</td>
<td style="text-align: center;">46</td>
</tr>
<tr>
<td style="text-align: right;">03</td>
<td style="text-align: center;">164</td>
<td style="text-align: center;">7.50</td>
<td style="text-align: center;">38</td>
<td style="text-align: center;">27</td>
<td style="text-align: center;">35</td>
</tr>
<tr>
<td style="text-align: right;">02</td>
<td style="text-align: center;">129.0</td>
<td style="text-align: center;">6.50</td>
<td style="text-align: center;">45</td>
<td style="text-align: center;">17</td>
<td style="text-align: center;">38</td>
</tr>
<tr>
<td style="text-align: right;">2020-01</td>
<td style="text-align: center;">89.25</td>
<td style="text-align: center;">5.25</td>
<td style="text-align: center;">48</td>
<td style="text-align: center;">19</td>
<td style="text-align: center;">43</td>
</tr>
</tbody>
</table>
</details>

