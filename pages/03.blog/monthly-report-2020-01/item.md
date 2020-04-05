---
title: 'Monthly report: January 2020'
published: true
date: '05-02-2020 16:13'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Monthlies
header_image: '0'
summary:
    enabled: '1'
feed:
    limit: 10
subhead: ' '
---

My intention was to review not only December but the whole of 2019, and like the best of intentions, it went to hell in a handcart down a well-paved road. I have excuses aplenty, most notably that both December and January were short months thanks to a long holiday. This will probably be a bit truncated.

===

Highlights of the month:

- The aforementioned long holiday
- And this:

##Hours logged per month
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

Finally, graphical display of tabular data. But I must come clean. There’s absolutely nothing fancy going on here. I’m indulging in an awful duplication of efforts, adding the data first to the table way down below and then, by hand, to the data series underlying the charts. I’d love to have the time to learn how to use the data from the table to populate the chart, as my friend [Martijn does for his weight](https://vanderven.se/martijn/health/weight/), but I’m still a long way from there, with other things I need to learn first.

The numbers come from Tyme, and are definitely an underestimate because I know that I sometimes forget to log my time. It is interesting, although not in the least bit surprising, that there is a definite dip in midsummer and midwinter. And the crazed number of hours in August 2018 is the result of my publishing a podcast every single day for the Dogs Days of Podcasting challenge. I might be ready to try that again this year.

There are a couple more charts down below, showing how the logged hours are divided between Admin (stuff like email, reading feeds, that sort of thing) and Eat This Podcast (recording, editing, writing). The remainder is occupied by lots of little things, including working for money and working on daft things like learning how to use chartist.js to present these graphs. I suspect that in future I might relegate them to historic pages.

##Exist.io

Holiday interferes with everything, so just noting the bare facts.

##Activities

December:  
* Walking with sticks: 0
* Reading: 20
* Steps (avge): 9646 (up slightly)
* Podcasts: 19 (Seldom listen on holiday)
* 7-minutes: 0
  
January:  
* Walking with sticks: 0
* Reading: 20
* Steps (avge): 10121 (up quite a bit)
* Podcasts: 44 (Serious catching up)
* 7-minutes: 0

##Work

We have graphs!

##Percent of logged hours: 2019
<noscript>
    <style type="text/css">
        .ct-minor-seventh {display:none;}
    </style>
    <div class="notices blue">
<p>If you want to see the graphs, please enable javascript. Thanks.</p>
    </div>
</noscript>
<div class="ct-chart-3 ct-minor-seventh">
<ul style="list-style-type: none; padding-left:2.4rem;">
<li><span style="color:blue;">Admin</span></li><li><span style="color:green;">Eat This Podcast</span></li></ul>
</div> 

##Percent of logged hours: 2018
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

As I noted above, I’ll probably relegate these to an archive page going forward, but here they are now for me to marvel at. I find it fun to see when I took a break from the podcast (I know of course, but still) and to see what I think are rebound or catch-up efforts.

I’m keeping the table on this page for the js;dr brigade, but right at the end.

##Goals

Fifteen new posts in December and eight in January, the December outpouring because I attempted to do some work on this site for as many days straight as I could manage. I did 11. I need to start doing that again; there’s still plenty that isn’t working properly.

##Niggles

I'd like to have a better understanding of what exactly I am doing with chartist.js because at the moment it really is a bit voodoo. For example, I want to control the ticks on the ordinate, but all I have succeeded in doing so far is to throw hours at it without success.

##Final remarks

Politics nothwithstanding, I'm feeling pretty good.

<script>
var data = {
series: [
		{ name: 'Hours logged 2018', data: [0,0,152,159, 151,96,68,185,131,100,0,0] },
		{ name: 'Hours logged 2019', data: [95,121,158,128,145,75,58,110,128,96.5,154.1,96.1] },
		{ name: 'Hours logged 2020', data: [89.25,,,,,,,,,,,] }
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
    [0,0,20,29,36,34,25,14,45,41,0,0],
    [0,0,10,29,20,9,63,85,23,34,0,0]
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

new Chartist.Bar('.ct-chart-3', {
  labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
  series: [
    [39,32,44,37,40,38,22,38,33,37,63,16],
    [13,42,28,28,2,18,21,37,28,19,18,28]
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
<td style="text-align: right;">2020-01</td>
<td style="text-align: center;">89.25</td>
<td style="text-align: center;">5.25</td>
<td style="text-align: center;">48</td>
<td style="text-align: center;">19</td>
<td style="text-align: center;">43</td>
</tr>
<tr>
<td style="text-align: right;">12</td>
<td style="text-align: center;">96.1</td>
<td style="text-align: center;">6.9</td>
<td style="text-align: center;">16</td>
<td style="text-align: center;">28</td>
<td style="text-align: center;">56</td>
</tr>
<tr>
<td style="text-align: right;">11</td>
<td style="text-align: center;">154.1</td>
<td style="text-align: center;">8.1</td>
<td style="text-align: center;">63</td>
<td style="text-align: center;">18</td>
<td style="text-align: center;">19</td>
</tr>
<tr>
<td style="text-align: right;">10</td>
<td style="text-align: center;">96.5</td>
<td style="text-align: center;">4.5</td>
<td style="text-align: center;">37</td>
<td style="text-align: center;">19</td>
<td style="text-align: center;">44</td>
</tr>
<tr>
<td style="text-align: right;">09</td>
<td style="text-align: center;">128</td>
<td style="text-align: center;">6.1</td>
<td style="text-align: center;">33</td>
<td style="text-align: center;">28</td>
<td style="text-align: center;">39</td>
</tr>
<tr>
<td style="text-align: right;">08</td>
<td style="text-align: center;">110</td>
<td style="text-align: center;">3.1</td>
<td style="text-align: center;">38</td>
<td style="text-align: center;">37</td>
<td style="text-align: center;">25</td>
</tr>
<tr>
<td style="text-align: right;">07</td>
<td style="text-align: center;">58</td>
<td style="text-align: center;">2.9</td>
<td style="text-align: center;">22</td>
<td style="text-align: center;">21</td>
<td style="text-align: center;">57</td>
</tr>
<tr>
<td style="text-align: right;">06</td>
<td style="text-align: center;">75</td>
<td style="text-align: center;">3.75</td>
<td style="text-align: center;">38</td>
<td style="text-align: center;">18</td>
<td style="text-align: center;">44</td>
</tr>
<tr>
<td style="text-align: right;">05</td>
<td style="text-align: center;">145</td>
<td style="text-align: center;">7.25</td>
<td style="text-align: center;">40</td>
<td style="text-align: center;">2</td>
<td style="text-align: center;">58</td>
</tr>
<tr>
<td style="text-align: right;">04</td>
<td style="text-align: center;">128</td>
<td style="text-align: center;">6.4</td>
<td style="text-align: center;">37</td>
<td style="text-align: center;">28</td>
<td style="text-align: center;">35</td>
</tr>
<tr>
<td style="text-align: right;">03</td>
<td style="text-align: center;">158</td>
<td style="text-align: center;">7.5</td>
<td style="text-align: center;">44</td>
<td style="text-align: center;">28</td>
<td style="text-align: center;">28</td>
</tr>
<tr>
<td style="text-align: right;">02</td>
<td style="text-align: center;">121</td>
<td style="text-align: center;">6.0</td>
<td style="text-align: center;">32</td>
<td style="text-align: center;">42</td>
<td style="text-align: center;">26</td>
</tr>
<tr>
<td style="text-align: right;">2019-01</td>
<td style="text-align: center;">95</td>
<td style="text-align: center;">5.4</td>
<td style="text-align: center;">39</td>
<td style="text-align: center;">13</td>
<td style="text-align: center;">48</td>
</tr>
<tr>
<td style="text-align: right;">10</td>
<td style="text-align: center;">100</td>
<td style="text-align: center;">4.2</td>
<td style="text-align: center;">41</td>
<td style="text-align: center;">34</td>
<td style="text-align: center;">25</td>
</tr>
<tr>
<td style="text-align: right;">09</td>
<td style="text-align: center;">131</td>
<td style="text-align: center;">6.5</td>
<td style="text-align: center;">45</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">32</td>
</tr>
<tr>
<td style="text-align: right;">08</td>
<td style="text-align: center;">185</td>
<td style="text-align: center;">8.0</td>
<td style="text-align: center;">14</td>
<td style="text-align: center;">85</td>
<td style="text-align: center;">1</td>
</tr>
<tr>
<td style="text-align: right;">07</td>
<td style="text-align: center;">68</td>
<td style="text-align: center;">5.25</td>
<td style="text-align: center;">25</td>
<td style="text-align: center;">63</td>
<td style="text-align: center;">12</td>
</tr>
<tr>
<td style="text-align: right;">06</td>
<td style="text-align: center;">96</td>
<td style="text-align: center;">5.75</td>
<td style="text-align: center;">34</td>
<td style="text-align: center;">9</td>
<td style="text-align: center;">57</td>
</tr>
<tr>
<td style="text-align: right;">05</td>
<td style="text-align: center;">151</td>
<td style="text-align: center;">6.0</td>
<td style="text-align: center;">36</td>
<td style="text-align: center;">20</td>
<td style="text-align: center;">44</td>
</tr>
<tr>
<td style="text-align: right;">04</td>
<td style="text-align: center;">159</td>
<td style="text-align: center;">7.5</td>
<td style="text-align: center;">29</td>
<td style="text-align: center;">29</td>
<td style="text-align: center;">40</td>
</tr>
<tr>
<td style="text-align: right;">2018-03</td>
<td style="text-align: center;">152</td>
<td style="text-align: center;">7.0</td>
<td style="text-align: center;">20</td>
<td style="text-align: center;">10</td>
<td style="text-align: center;">70</td>
</tr>
</tbody>
</table>

