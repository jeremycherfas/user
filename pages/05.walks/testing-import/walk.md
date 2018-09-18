---
title: 'Testing import'
imports: 'early.json'
twig_first: true
process:
    twig: true
template: item
---

Nothing much to see here; just want the data import details.

===


### Output

Via `page.header.imports.early|json_encode(constant('JSON_PRETTY_PRINT'))`:

<pre>
{{ page.header.imports.early|json_encode(constant('JSON_PRETTY_PRINT')) }}
</pre>

<div id="mapid" style="width: 100%; height: 400px;">Where the map would be</div>



