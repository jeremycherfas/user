---
title: 'Not lost, but not found either'
published: false
date: '23-10-2022 10:30'
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

All the introspection in the world has failed to disclose why exactly I want to be able to display maps of where I have been. It isn't as if I have been anywhere terribly exotic. I have a kind of text journal that could remind me where I've been. So, there's no need, really. Just a want.

<img src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/static/path-2(wus~Fmy%60kASyA%5Cg%40f%40wKeBq%40gGcGTRhA%7D%40_C%7DBbDfAv%40mAfAWzE%60CpA%40%60%40_%40tAaFo%40iB_FeEhCkGsFaFQ_%40%60%40SMb%40fA%60AGXb%40Cp%40n%40_CcAiJeIqCyA%3Fo%40%7BEwDqIcBaKe%40wEsCkCiCFa%40cADaAc%40cAoYPk%40%7CCq%40l%40yBqA%7B%40cDOg%40%5B%5BcBsEn%40W%7BB%40l%40o%40DV%7BCe%40_FgAy%40Id%40r%40Lk%40O%3FX%40e%40t%40h%40%5BAxACmAUAa%40ZRs%40o%40Fz%40Pa%40Ph%40e%40JRy%40Pp%40aBHxBh%40kBc%40~A%5ECi%40WEh%40lABbC%3FaAYj%40XZByAD%7CAw%40Kx%40c%40c%40nAZmAa%40Cb%40%40g%40k%40h%40zAGaAm%40vAn%40j%40s%40MJaCKXh%5Bjw%40bFdBrE%5CrCxA%5DO%7CAIxAV%7C%40%5DtA~%40jGbHhDxAzD%60E%7B%40Rw%40lBWFVi%40IvBlBjAFzAz%40b%40Fn%40~FrEPlCkBzDuAImCyBmAEuAt%40eB%60EFd%40hHhHg%40%7CNdAZs%40BM%60%40OpEcB%40Z%40s%40r%40j%40L%5B%5B%5CIKd%40OOJZQ%5Bh%40BIn%40Hm%40w%40Mj%40p%40Og%40B%60AZJGiAQJROcm%40ghCSj%40LMcCmCk%40XeCu%40sBVa%40n%40b%40rBjCVtCwDlExFrEdBxGoBRXrBcB~Cy%40SNpD%5CMnA_BR_%40r%40L%7CAu%40tCm%40REtAh%40b%40Ec%40zBIRw%40%5ChAdEnBlCdHlErBdClCZ%7CFl%40pBMxByC%7CEc%40rCq%40QMz%40%5B%40%5DdFtLpKj%40%60C_AjDoAr%40iEeCqBJaDfG~H~Ha%40fOfAFm%40MWVAdEM%60%40cBEN~AUERPFy%40HXy%40Tf%40CYQ%60%40KMd%40%40Uj%40Ri%40B%60%40%3FUk%40Kh%40Ji%40i%40%5C%5COYERN)/auto/700x467?access_token=pk.eyJ1IjoiamVyZW15Y2hlcmZhcyIsImEiOiJjanc5aG80enkwYmM2M3pzY2hjNDAwb2czIn0.qk_6jVHsFJ5We-QyLQ0x4g" alt="Static map of my path yesterday">

===

Over the years I've attempted to do the needful a few times, starting in earnest [just over five years ago]((https://jeremycherfas.net/blog/finding-my-way-slowly). I always give up though, because whatever I come up with is just too complicated. Too many steps. And too complicated a result. I don't need the map to be interactive; I just need an image. And to be honest, that shouldn't be difficult. Aaron Parecki, who built the apps that track where I've been and store the data, has also shared an API that gets a static image map that can include a path. But sometimes it doesn't, and I have no idea why not. I shouldn't be relying on Aaron's goodwill either, so I started exploring other options.

Not many of them actually offer a static map. Most want you to offer all that interactive goodness.

Reduce the accuracy of the points and the number of points. MapBox does the clever business of encoding a google polyine for me. Could download and save the map as a PNG. Next I want to try and get a time slice, not the whole day. Maybe add photos like John Johnston.

Another approach, use [flopp/py-staticmaps: A python module to create static map images with markers, geodesic lines, etc.](https://github.com/flopp/py-staticmaps). That may require GPX rather than geoJSON (have asked). There are conversion tools, as 
* [python - Conversion of GeoJSON to GPX? - Geographic Information Systems Stack Exchange](https://gis.stackexchange.com/questions/415375/conversion-of-geojson-to-gpx)
* [python - how to convert google-maps GeoJSON to GPX, retaining location names - Stack Overflow](https://stackoverflow.com/questions/64558458/how-to-convert-google-maps-geojson-to-gpx-retaining-location-names)

https://github.com/chrieke/prettymapp

[Finding my way, slowly | Jeremy Cherfas](http://127.0.0.1:8000/blog/finding-my-way-slowly)