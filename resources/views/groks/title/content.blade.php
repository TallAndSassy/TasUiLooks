@php
$slug = "title";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
@include("tas::groks/$slug/sample")
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>

