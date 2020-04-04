---
title: 'Work log test'
published: false
date: '04-02-2020 09:30'
taxonomy:
    category:
        - blog
    tag:
        - General
header_image: '0'
summary:
    enabled: '1'
feed:
    limit: 10
subhead: ' '
---
###Hours logged per month

<noscript>
    <style type="text/css">
        .ct-minor-seventh {display:none;}
    </style>
    <div class="noscriptmsg">
If you want to see the graphs, please enable javascript. Thanks.
    </div>
</noscript>

<div class="ct-chart ct-minor-seventh">
<h3>Hours logged per month</h3>
<ul style="list-style-type: none; padding-left:2.4rem;">
<li><span style="color:red;">2020</span></li><li><span style="color:green;">2019</span></li><li><span style="color:blue;">2018</span></li></ul>
</div>

###Percent of logged hours: 2019
<div class="ct-chart-3 ct-minor-seventh">
<ul style="list-style-type: none; padding-left:2.4rem;">
<li><span style="color:blue;">Admin</span></li><li><span style="color:green;">Eat This Podcast</span></li></ul>
</div> 


###Percent of logged hours: 2018
<div class="ct-chart-2 ct-minor-seventh">
<ul style="list-style-type: none; padding-left:2.4rem;">
<li><span style="color:blue;">Admin</span></li><li><span style="color:green;">Eat This Podcast</span></li></ul>
</div> 



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