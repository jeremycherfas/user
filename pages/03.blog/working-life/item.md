---
title: 'Working life'
published: true
date: '03-02-2025 17:00'
taxonomy:
    category:
        - blog
    tag:
        - Geeky
        - Monthlies
summary:
    enabled: '1'
subhead: "A picture is worth something"
header_image: '0'
--- 

An archive of some of the data I have recorded about how I spend some of my time.

===

## Total hours worked per month

### 2024
![Histogram of total hours worked per month for 2020 to 2024](hours-logged-2020-2024.svg){.center}

### 2023
![Histogram of total hours worked per month for 2019 to 2023](hours-logged-2019-2023.svg){.center}

### 2022 
![Histogram of total hours worked per month for 2018 to 2022](hours-logged-2018-2022.svg){.center}

## Percent of logged hours

## 2024
![Stacked bar chart of percentage of work hours each month dedicated to Administration, Podcasting and Writing](percents-2024.svg){.center}

## 2023
![Stacked bar chart of percentage of work hours each month dedicated to Administration, Podcasting and Writing](percents-2023.svg){.center}

## 2022

![Stacked bar chart of percentage of work hours each month dedicated to Administration and Podcasting](percents-2022.svg){.center}

## 2021

![Stacked bar chart of percentage of work hours each month dedicated to Administration and Podcasting](percents-2021.svg){.center}

## 2020

![Stacked bar chart of percentage of work hours each month dedicated to Administration and Podcasting](percents-2020.svg){.center}

## 2019
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

## 2018
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

<script>
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

