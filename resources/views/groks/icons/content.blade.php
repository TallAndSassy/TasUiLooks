@php
$slug = "icons";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
@include("tas-ui-looks::groks/$slug/sample")
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>


<x-tas-ui-looks::title>Usage</x-tas-ui-looks::title>
<x-grok::tas-sample-from-file language="html" path="resources/views/tas_sample/icons/home.blade.php"/>

<x-tas-ui-looks::title>Installation</x-tas-ui-looks::title>
<pre>
You can show a 'home' icon by doing 'x-heroicon-o-home'
Src: https://github.com/blade-ui-kit/blade-icons
But, instructions are unclear.
1)  composer require blade-ui-kit/blade-heroicons #https://github.com/blade-ui-kit/blade-heroicons
    composer require blade-ui-kit/blade-zondicons #https://github.com/blade-ui-kit/blade-zondicons

2) Edit config/blade-icons.php/sets/default/path to....
    'path' => 'vendor/blade-ui-kit/blade-heroicons/resources/svg',
</pre>

<x-tas-ui-looks::title>Find icons</x-tas-ui-looks::title>
Looking for an icon? Try this
<x-tas-ui-looks::link-to href="https://blade-ui-kit.com/blade-icons#search" enum-location="outside" enum-sandbox="tab">https://blade-ui-kit.com/blade-icons#search</x-tas-ui-looks::link-to>

