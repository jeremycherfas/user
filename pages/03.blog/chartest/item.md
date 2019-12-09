---
title: 'IndieWeb Challenge Day 10'
published: true
date: '10-12-2019 09:30'
taxonomy:
    category:
        - blog
    tag:
        - General
summary:
    enabled: '1'
subhead: "In with a bullet "
header_image: '0'
--- 

I've wanted for ages to be able to do visual representations of some of the data I collect, and as I had a bit more time than usual yesterday I finally made the effort to understand [chartist.js](https://gionkunz.github.io/chartist-js/getting-started.html) and put it to work.

===

First, though, I got rid of a few things that my new theme was loading and that were leftovers from a previous life. That made it easier to see what was going on. Following the very clear instructions made it relatively easy to get a test chart visible, and with that done, I stuck in some of my own data, and _voilá_!

<div class="ct-chart ct-minor-seventh"></div>

This is actually a daily plot of the number of spam comments I get over on the stream. It was the biggest set of data I could easily lay my hands on. To get it to display intelligibly I had to meddle with the styling of the bars on the chart in my `custom.css`, and I am hoping I may be able to do that on the fly in future. I also suppressed labels on the abscissa, because I don't have the actual dates.[^1]

[^1]: Well, I have the start date, so I could reconstruct the series, but life is too short. 

For now, the data are actually in the script here in the source. Next I want to see whether I can read the data in from a separate file. And ultimately, store the script elsewhere too.

For now, I am very content.

<script>
var data = {
  // A labels array that can contain any sort of values
  // labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
  // Our series array that contains series objects or in this case series data arrays
  series: [[7,6,3,4,2,23,14,6,2,2,0,5,10,4,2,1,3,1,1,5,3,3,1,1,1,0,0,2,19,1,6,1,5,8,4,0,1,3,5,2,0,11,9,0,5,3,1,1,3,3,6,1,3,5,1,6,1,3,12,3,1,0,1,0,0,6,2,3,5,2,5,4,5,3,9,2,2,3,2,1,1,1,3,1,2,6,1,2,1,1,1,2,1,2,0,3,3,4,1,1,1,1,1,4,2,5,5,3,1,3,1,4,2,2,3,1,3,4,0,4,8,2,1,3,1,0,0,0,2,1,2,2,2,3,4,3,1,1,0,1,3,0,0,1,1,0,2,0,0,1,1,3,1,3,0,1,5,1,1,3,2,2,1,1,1,2,0,0,2,1,0,0,2,0,2,1,3,1,1,0,2,0,1,0,0,4,0,0,0,2,0,7,1,2,0,1,3,0,0,2,5,1,2,0,0,0,1,1,0,0,0,1,0,0,2,2,0,0,1,3,1,0,1,0,0,2,0,1,2,0,1,3,1,0,0,0,0,0,0,1,0,0,2,1,0,0,0,1,1,1,0,5,0,0,0,1,1,0,0,1,0,0,0,0,0,0,0,0,0,1,0,0,1,0,1,1,21,0,0,0,0,0,0,0,0,0,0,0,0,1,2,0,1,0,0,0,0,0,2,0,0,0,0,1]]
};

var options = {
axisX: {
showGrid: false,
showLabel: false,
}
}

// Create a new line chart object where as first parameter we pass in a selector
// that is resolving to our chart container element. The Second parameter
// is the actual data object.
new Chartist.Bar('.ct-chart', data, options);
</script>