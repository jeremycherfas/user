---
title: 'Monthly report: October 2021'
published: true
date: '01-11-2021 19:04'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Monthlies
header_image: '0'
summary:
    enabled: '1'
subhead: ''
---

Everyone is keen to spend their budget before the end of the year, and who am I to argue. It has bitten into my fun time, but not completely. I fixed my podcast scrobbling script, and ordered a new computer.

===

## Highlights of the month:

- Started the month with a frozen computer, ended it by ordering a new one and hoping that I can hold out till it arrives.
- Not a good computer month at all; the Pi also went on the fritz and took the best part of a day to restore.
- Excellent visit to Ostia Antica to record a podcast in the ancient bakery.
- Established a separate mailing list for podcast supporters and sent them the first issue.
- Another good friend visited and we had some good meals and conversations.
- Terrific exhibit of Margaret Bourke-White photos in Trastevere.
- Saw a movie! In a cinema! (No Time to Die)

### Activities

Not much new. A friend asked me to bake her a loaf of soda bread, which uses kefir as the liquid. On a whim I started making my own, just like old times, but there is no sign of the grains emerging or clumping. Still, it is delicious and a lot easier than yoghurt, though I won't neglect that. Next up, viilli?

#### October: 
* Walking with sticks: 0
* Reading: 13
* Steps (avge): 9400
* Podcasts: 43 (All of them [logged](https://www.jeremycherfas.net/stream/)!)
* In bed/asleep 8:17/7:19
* 7 Minutes: 13
* Weight (avge): 86.9
* Naps 1

#### September: 
* Walking with sticks: 0
* Reading: 11
* Steps (avge): 9968
* Podcasts: 38 (33 of them [logged](https://www.jeremycherfas.net/stream/).)
* In bed/asleep 8:15/7:02
* 7 Minutes: 11
* Weight (avge): 86.3
* Naps 6

### Work

The same client work that was giving me grief last month is still giving me grief, and I think that the main reason is that I have not had any feedback on the first piece I sent in. That makes me tentative, and that makes me procrastinate. Tomorrow!

Podcasting for others is OK, although there are real drawbacks to not being in the same place. Perhaps a bigger drawback is that the person nominally in charge doesn't have any experience of how long audio editing takes, which can result in a bit of a scramble.

#### Hours logged per month

<noscript>
    <style type="text/css">
        .ct-minor-seventh {display:none;}
    </style>
    <div class="notices blue">
<p>If you want to see the graphs, please enable javascript. Thanks.</p>
    </div>
</noscript>

<div class="ct-chart-hours ct-minor-seventh">
</div>

#### Percent of logged hours: 2021
<noscript>
    <style type="text/css">
        .ct-minor-seventh {display:none;}
    </style>
    <div class="notices blue">
<p>If you want to see the graphs, please enable javascript. Thanks.</p>
    </div>
</noscript>

<div class="ct-chart-2 ct-minor-seventh">
</div> 

Previous years are on [an archive page](https://jeremycherfas.net/blog/working-life).

### Goals

Brought in 85 on-this-day posts, which continues to be interesting. Thinking a bit about it, I've sort of decided to build some kind of index to longer posts that might be of continuing interest. I haven't yet thought about how to present or surface these topics, but at least I will be able to find them going forward. Eight new posts, again, which is nice.

I kept a closer watch on time this month, and it averages 90 minutes a day, but that is very skew. The majority of days it takes well under an hour.

Looking forward to a new computer; this one is mid-2011. Not looking forward to setting it up.

### Niggles

None, really. I found time to play with the computer, and the result was a resumption of improved podcast scrobbling. Need to get back to playing with GIS in Python.

### Final remarks

I need to get on top of my weight again, and maybe up my HIIT game. Or is that foolish age denialism?

<script>

new Chartist.Bar('.ct-chart-hours', {
series: [
        { name: 'Hours logged 2018', data: [0,0,152,159, 151,96,68,185,131,100,0,0] },
        { name: 'Hours logged 2019', data: [95,121,158,128,145,75,58,110,128,96.5,154.1,96.1] },
        { name: 'Hours logged 2020', data: [89.25,129,164.1,175,170,171,83.33,138.5,115.9,133.5,149.5,119.75] },
        { name: 'Hours logged 2021', data: [168.5,155.7,173.3,166.1,159.1,110.0,80.1,67.8,157.5,170.75,,] }
        ]
},
{
    axisY: {
        type: Chartist.FixedScalesAxis,
        high: 200,
        low: 0,
        divisor: 8,
        ticks: [20,40,60,80,100,120,140,160,180,200]
    },
    axisX: {
        type: Chartist.StepAxis,
        ticks: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        stretch: false
    },
    plugins: [
        Chartist.plugins.legend({
            legendNames: ['2018', '2019', '2020', '2021'],
            classNames: ['2018', '2019', '2020', '2021'],
        })
    ]
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 5px'
    });
  }
});


new Chartist.Bar('.ct-chart-2', {
  labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
  series: [
    [43,32,38,39,29,38,39,29,31,31,,],
    [17,25,19,16,22,26,17,08,25,16,,]
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
    plugins: [
        Chartist.plugins.legend({
            legendNames: ['Admin', 'Podcast'],
            classNames: ['Administration', 'Podcast'],
        })
    ]

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
<td style="text-align: right;">10</td>
<td style="text-align: center;">170.75</td>
<td style="text-align: center;">5.50</td>
<td style="text-align: center;">31</td>
<td style="text-align: center;">16</td>
<td style="text-align: center;">53</td>
</tr>
<tr>
<td style="text-align: right;">09</td>
<td style="text-align: center;">157.5</td>
<td style="text-align: center;">5.25</td>
<td style="text-align: center;">31</td>
<td style="text-align: center;">25</td>
<td style="text-align: center;">44</td>
</tr>
<tr>
<td style="text-align: right;">08</td>
<td style="text-align: center;">67.8</td>
<td style="text-align: center;">2.19</td>
<td style="text-align: center;">29</td>
<td style="text-align: center;">08</td>
<td style="text-align: center;">63</td>
</tr>
<tr>
<td style="text-align: right;">07</td>
<td style="text-align: center;">80.1</td>
<td style="text-align: center;">2.58</td>
<td style="text-align: center;">39</td>
<td style="text-align: center;">17</td>
<td style="text-align: center;">44</td>
</tr>
<tr>
<td style="text-align: right;">06</td>
<td style="text-align: center;">110.0</td>
<td style="text-align: center;">3.67</td>
<td style="text-align: center;">38</td>
<td style="text-align: center;">26</td>
<td style="text-align: center;">36</td>
</tr>
<tr>
<td style="text-align: right;">05</td>
<td style="text-align: center;">159.1</td>
<td style="text-align: center;">5.13</td>
<td style="text-align: center;">29</td>
<td style="text-align: center;">22</td>
<td style="text-align: center;">49</td>
</tr>
<tr>
<td style="text-align: right;">04</td>
<td style="text-align: center;">166.1</td>
<td style="text-align: center;">5.75</td>
<td style="text-align: center;">39</td>
<td style="text-align: center;">16</td>
<td style="text-align: center;">45</td>
</tr>
<tr>
<td style="text-align: right;">03</td>
<td style="text-align: center;">173.3</td>
<td style="text-align: center;">5.59</td>
<td style="text-align: center;">38</td>
<td style="text-align: center;">19</td>
<td style="text-align: center;">43</td>
</tr>
<tr>
<td style="text-align: right;">02</td>
<td style="text-align: center;">155.7</td>
<td style="text-align: center;">5.59</td>
<td style="text-align: center;">32</td>
<td style="text-align: center;">25</td>
<td style="text-align: center;">43</td>
</tr>
<tr>
<td style="text-align: right;">2021-01</td>
<td style="text-align: center;">168.5</td>
<td style="text-align: center;">5.62</td>
<td style="text-align: center;">43</td>
<td style="text-align: center;">17</td>
<td style="text-align: center;">40</td>
</tr>
</tbody>
</table>
</details>

