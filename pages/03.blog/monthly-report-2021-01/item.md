---
title: 'Monthly report: January 2021'
published: false
date: '01-02-2021 19:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Monthlies
header_image: '0'
summary:
    enabled: '1'
subhead: 'New year, same old format'
feed:
    limit: 10
---

I had high hopes for a little tinkering here and there, mostly under the hood, but not much happened. That was mostly the result of a gross oversight in the paid work department, where the lovely extended holiday season ended with a realisation that I had screwed myself royally. Clawed my way back to sanity, but almost everything else got left behind.

Still healthy, but no sign yet of a call from The Great Vaccinator.

===

## Highlights of the month:

- Returned to Day One, and after and extended argy-bargy, managed to import all old entries from everywhere. Very preferable.
- Built a Shortcut to replace one of my previous journalling functions, and it works.
- Read *Corduroy*, a glorious memoir of English farming life in the 1920s.
- Struggled to find a way to prepare chestnuts. Hope I don't forget before next season.
- Reinserted myself into the Italian health system.
- Homemade ravioli, just because.
- Had a great phone call with a very dear friend.
- Bird feeder bought for Christmas is a massive hit, although they are eating me bankrupt.
- Finding time to learn some more fundamentals about coding. A Pytrhon course from MIT, no less.

### Activities

Failed to close all three rings on one day. Having processed my feelings, it deserves a longer blog post.

#### January: 
* Walking with sticks: 0
* Reading: 15
* Steps (avge): 10,417 
* Podcasts: 40 (33 of them [logged](https://www.jeremycherfas.net/stream/))
* In bed/asleep 8:30/7:46
* 7 Minutes: 13 days; alternating 2 cycles moderate and 3 cycles easy.
* Weight (avge): 86.3 

#### December: 
* Walking with sticks: 0
* Reading: 17
* Steps (avge): 10,920 
* Podcasts: 51 (46 of them [logged](https://www.jeremycherfas.net/stream/))
* In bed/asleep 8:40/7:53
* 7 Minutes: 12 days; alternating 2 cycles moderate and 3 cycles easy.
* Weight (avge): 85.8 


### Work

Lovely break, ghastly return.

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

Two whole new posts, and no old ones.

### Niggles

Discipline must improve!

### Final remarks

See above.

<script>

new Chartist.Bar('.ct-chart-hours', {
series: [
        { name: 'Hours logged 2018', data: [0,0,152,159, 151,96,68,185,131,100,0,0] },
        { name: 'Hours logged 2019', data: [95,121,158,128,145,75,58,110,128,96.5,154.1,96.1] },
        { name: 'Hours logged 2020', data: [89.25,129,164.1,175,170,171,83.33,138.5,115.9,133.5,149.5,119.75] }
        { name: 'Hours logged 2021', data: [168.5,,,,,,,,,,,] }
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
      style: 'stroke-width: 10px'
    });
  }
});


new Chartist.Bar('.ct-chart-2', {
  labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
  series: [
    [43,,,,,,,,,,,],
    [17,,,,,,,,,,,]
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

