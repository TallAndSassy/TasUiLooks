@php
$slug = "icons";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
@include("tassy::/groks_looks/$slug/sample")
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>


<x-tassy::title>Usage</x-tassy::title>
<x-grok::tas-sample-from-file language="html" path="resources/views/tas_sample/icons/home.blade.php"/>

<x-tassy::title>Installation</x-tassy::title>
<pre>
You can show a 'home' icon by doing 'x-heroicon-o-home'
Src: https://github.com/blade-ui-kit/blade-icons
But, instructions are unclear.
1)  composer require blade-ui-kit/blade-heroicons #https://github.com/blade-ui-kit/blade-heroicons
    composer require blade-ui-kit/blade-zondicons #https://github.com/blade-ui-kit/blade-zondicons

2) Edit config/blade-icons.php/sets/default/path to....
    'path' => 'vendor/blade-ui-kit/blade-heroicons/resources/svg',
</pre>

<x-tassy::title>Find icons</x-tassy::title>
Looking for an icon? Try this
<x-tassy::link-to href="https://blade-ui-kit.com/blade-icons#search" enum-location="outside" enum-sandbox="tab">https://blade-ui-kit.com/blade-icons#search</x-tassy::link-to>

