---
title: 'Monthly report: August 2020'
published: true
date: '02-09-2020 17:20'
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

A very quiet month at home, although with a fair bit of paid work to do. Got it done, mostly, a little bit late. The great treat was to see the plants on the terrace do better than ever because we were here to give them a bit of attention, even though it is impossible to keep on top of the various sap-sucking insects.

===

## Highlights of the month:

- Coldest riverine dip ever in Rieti
- New activity monitor, fiddly but fun
- Preserved zucchini sott’olio and pickled cucumbers
- A slightly warmer dip at the Mole di Narni
- Car playing up again/still; been at the dealer’s for 10 days but at least I have a loaner
- Some enjoyable day trips to visit friends

### Exist.io

Steps down a bit, sleep down a bit, weight down.

### Activities

The new activity monitor is definitely different from the old, so this could be considered a reset for sleep and activity.

August: 
* Walking with sticks 6
* Reading: 11 (One non-fiction and magazines)
* Steps (avge): 8320
* Podcasts: 43 (But only 30 [logged](https://www.jeremycherfas.net/stream/); I do wonder why, and whether I should investigate)
* 7 Minutes: 13 days and 39 cycles

July: 
* Walking with sticks 0
* Reading: 13
* Steps (avge): 8349 (down a bit) 
* Podcasts: 27 (If I don’t walk, I don’t listen.)
* 7 Minutes: 4 days and 6 cycles (Not on holiday, and not easy getting back into it.)

### Work

While procrastinating, I did a silly online quiz about my productivity style or needs or some such. It said I should [Eat the Frog](https://todoist.com/productivity-methods/eat-the-frog), _i.e._ just do one thing first thing in the morning, before even thinking about anything else.

The strange part is, this is what I have always done when I have been really under pressure, and it generally worked. I didn’t really think of that as a technique, though, and I certainly had no idea it had a name. Since getting such strong online validation, natch, I have tried to eat the frog habitually each day. In fact I’m doing that right now. And it works, for me.

In other news, I adopted a new format for the data about books I report on, and I like it. Just a few more to update.

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

Seven new posts, no old ones brought in.

Managed to automate PESOS to Known, thrice-daily with `cron`. Getting notices of `cron` failures, but only in the terminal.

### Niggles

Resume work on Micropub for Grav?

Suck data directly out of Exist with the API?

### Final remarks

I’ve enjoyed doing Eat This Newsletter weekly for the past couple of months, although I am also looking forward to resuming podcast episodes.


<script>
var data = {
series: [
		{ name: 'Hours logged 2018', data: [0,0,152,159, 151,96,68,185,131,100,0,0] },
		{ name: 'Hours logged 2019', data: [95,121,158,128,145,75,58,110,128,96.5,154.1,96.1] },
		{ name: 'Hours logged 2020', data: [89.25,129,164.1,175,170,171,83.33,138.5,,,,] }
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
    [48,45,38,36,40,26,44,45,,,,],
    [19,17,27,18,22,19,12,15,,,,]
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
<td style="text-align: right;">08</td>
<td style="text-align: center;">138.5</td>
<td style="text-align: center;">5.33</td>
<td style="text-align: center;">45</td>
<td style="text-align: center;">15</td>
<td style="text-align: center;">40</td>
</tr>
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

