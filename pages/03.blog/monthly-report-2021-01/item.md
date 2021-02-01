---
title: 'Monthly report: January 2021'
published: true
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
subhead: 'New year, same old forat'
---

The subhead may make sense to people who were in the UK a good long while ago. They’ll remember too the hassle of travel to “the continent,“ never mind the freedom to move around, work, marry, all of it. All gone now, and for what?

On the plus side, we’re healthy, leading a reasonably good life in a reasonably functional country. And after throwing in the towel on javascript and graphical data, received some really great assistance from [Professor von Explaino](https://vonexplaino.com/) and began to make teeny bits of progress.

===

## Highlights of the month:

- The fireplace still works, although good firewood at a reasonable price is becoming harder to find.
- Much more comfortable at my desk, thanks to an IR heating panel.
- Flattered to be asked to read and comment on a friend’s new novel in draft.
- A1 annual medical checkup.
- Fun excursions to the countryside and to the beach.
- Excellent Christmas food, extended through the week.

### Activities

Third month in a row that I have closed all rings every day. Haven’t missed a day so far, gaining the 100 Move Goals award yesterday. Gotta keep that streak going (but continuing to illustrate it is a pain for all concerned).

#### January: 
* Walking with sticks: 0
* Reading: 15
* Steps (avge): 10,417 
* Podcasts: 51 (46 of them [logged](https://www.jeremycherfas.net/stream/))
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

The frantic push that almost always characterises the end of the year characterised the end of the year again, and most of it got done. Anything that didn’t get done was solidly down to the clients generally taking more time off than mere workers like me.

Probably I won’t do a yearly round-up, but just for fun, in 2020 I logged a total of 1641 hours over 307 days. But not all of that is work work by any stretch of the imagination.

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
</div> 

Previous years are on [an archive page](https://jeremycherfas.net/blog/working-life).

### Goals

Seven new posts, almost all after the December work rush had finished. Seven old posts brought in too, one given a new date because. As usual, giving them some love here:

* [Food News (new series) 10: Neo-artisans](https://www.jeremycherfas.net/blog/food-news-new-series-10-neoartisans)
* [The Fornacalia breads](https://www.jeremycherfas.net/blog/the-fornacalia-breads)
* [Hamelman’s Semolina with a whole-grain soaker](https://www.jeremycherfas.net/blog/hamelmans-semolina-with-a-wholegrain-soaker)
* [In a ferment](https://www.jeremycherfas.net/blog/in-a-ferment)
* [A Swedish Rye with raisins](https://www.jeremycherfas.net/blog/a-swedish-rye-with-raisins)
* [&#128214; The Shangri-La Diet &#x270d;](https://www.jeremycherfas.net/blog/the-shangrila-diet)
* [Trams that pass in the morning](https://www.jeremycherfas.net/blog/trams-that-pass-in-the-morning)

### Niggles

None, if I present my positive side. (I mean, there are some, but I’m not complaining.) I’m going to make the move away from Exist later today, probably to Day One.

### Final remarks

Ad ardua per astra.

<script>

new Chartist.Bar('.ct-chart-hours', {
series: [
        { name: 'Hours logged 2018', data: [0,0,152,159, 151,96,68,185,131,100,0,0] },
        { name: 'Hours logged 2019', data: [95,121,158,128,145,75,58,110,128,96.5,154.1,96.1] },
        { name: 'Hours logged 2020', data: [89.25,129,164.1,175,170,171,83.33,138.5,115.9,133.5,149.5,119.75] }
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
            legendNames: ['2018', '2019', '2020'],
            classNames: ['2018', '2019', '2020'],
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
    [48,45,38,36,40,26,44,45,42,40,40,36],
    [19,17,27,18,22,19,12,15,24,23,23,18]
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
<td style="text-align: right;">12</td>
<td style="text-align: center;">119.75</td>
<td style="text-align: center;">5.21</td>
<td style="text-align: center;">36</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">46</td>
</tr>
<tr>
<td style="text-align: right;">11</td>
<td style="text-align: center;">149.5</td>
<td style="text-align: center;">5.75</td>
<td style="text-align: center;">40</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">37</td>
</tr>
<tr>
<td style="text-align: right;">10</td>
<td style="text-align: center;">133.5</td>
<td style="text-align: center;">4.9</td>
<td style="text-align: center;">40</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">37</td>
</tr>
<tr>
<td style="text-align: right;">09</td>
<td style="text-align: center;">115.9</td>
<td style="text-align: center;">4.6</td>
<td style="text-align: center;">42</td>
<td style="text-align: center;">24</td>
<td style="text-align: center;">34</td>
</tr>
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

