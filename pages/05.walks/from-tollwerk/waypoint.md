---
title: 'What is a waypoint?'
published: true
publish_date: '09-11-2018 17:36'
process:
    markdown: true
    twig: true
twig_first: true
routable: true
visible: true
template: walk
imports: track.json
datafilename: track.json
---

Finally getting back to working on presentation of these tracks. Here's one I recorded on the way back from Tollwerk after the successful IndieWebCamp. This time, I recorded a waypoint in order to see whether it would be displayed without my doing anything extra.

===

<div id="mapid" style="width: 100%; height: 400px;"></div>

And the answer is that it **does** display the waypoint as a marker. It ought to be clickable -- certainly the cursor changes -- but there is no information to tell that click where to go. I need to take a look at the data and see what is available there and how I might be able to make use of it.

_Later_ ... Seems like creating a waypoint adds an entirely new object to the end of the datafile. It looks like this:

````
{
  "type": "Feature",
  "geometry": {
    "type": "Point",
    "coordinates": [
      11.099569444444445,
      49.473307500000004
    ]
  },
  "properties": {
    "dateCreated": "2018-10-21T16:02:02Z",
    "title": "Georg-Buchner-Straße 48, Nuremberg",
    "type": "waypoint",
    "waypointType": "Pin, Green"
  }
}
````

And that's interesting because in addition to the coordinates, it also includes a reverse lookup of an address, which is useful and could be handy. Then again, it also suggests the pin ought to be green, which it clearly isn't.

Still, a little more digging into the presentation format ought to be enough to let me do more. And that might be a step on the way to adding images and other information.




 