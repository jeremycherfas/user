---
title: 'Transport summary 2022-Q1'
published: true
date: '08-04-2022 16:15'
taxonomy:
 category:
  - blog
 tag:
  - General
summary:
 enabled: '1'
subhead: " "
header_image: '0'
---

Returning, after too long an absence, to some of my transport data, I discovered that the data analysis I was doing before was a bit fragile. Very short trips brought everything crashing down, and were always the result of me tapping an Overland icon in error. Today I finally found time to exclude any trip less than 1 minute in duration. That is enough.

So what did Q1 reveal?

- Boat and plane trips took place, but only two of each
- Top four modes of transport by frequency: car, bus, train, metro
- Train is fastest and furthest
- Car is faster than bus only because I tend to use it only for longer journeys out of town
- No idea how to visualise trends in subsequent quarters

![Four graphs of descriptive statistics for trips by metro, bus, car and train in Q1 2022](transport-summary-2022-q1.svg){.center}

This post is a prelude to two things. One would be to include this information in the Monthly Summaries at the end of each quarter. More interesting, and challenging, would be to convert my current copy of Compass into a proper clone of the repo and then learn how to use the API, as a learning exercise.

#### Here's the table
<details>
<summary style="font-size: smaller;">Click the triangle to see or hide the table</summary>
<table class="worktable">
<thead>
<th "text-align: left;">Mode</th>
<th "text-align: left;">Distance(m)</th>
<th "text-align: left;">count</th>
<th "text-align: left;">median-kph</th>
<th "text-align: left;">median-distance</th>
<th "text-align: left;">Time(h)</th>
</thead>
<tbody>
<tr>
<th>train</th>
<td>774511</td>
<td>6</td>
<td>136.116</td>
<td>141104.0</td>
<td>6.008056</td>
</tr>
<tr>
<th>car</th>
<td>579551</td>
<td>23</td>
<td>21.636</td>
<td>13601.0</td>
<td>16.024167</td>
</tr>
<tr>
<th>bus</th>
<td>85367</td>
<td>22</td>
<td>14.688</td>
<td>3737.5</td>
<td>6.448056</td>
</tr>
<tr>
<th>metro</th>
<td>3221</td>
<td>4</td>
<td>5.364</td>
<td>903.0</td>
<td>0.760278</td>
</tr>
</tbody>
</table>
</details>