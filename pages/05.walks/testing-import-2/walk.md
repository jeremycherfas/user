---
title: 'Testing import function'
process:
    markdown: true
    twig: true
twig_first: true
template: item
imports: early.json
---

<div id="mapid" style="width: 100%; height: 400px;">Where the map would be</div>

{{ example() }}

{% set data = page.header.imports %}

{{ mymap(data) }}






