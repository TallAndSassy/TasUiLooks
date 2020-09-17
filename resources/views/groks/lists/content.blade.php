@php
$slug = "lists";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
@include("tas::groks/$slug/sample")
<x-tas::title>UnOrdered</x-tas::title>
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>

@php
$slug = "lists";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample2.blade.php";
@endphp
@include("tas::groks/$slug/sample2")
<x-tas::title>Ordered</x-tas::title>
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>


