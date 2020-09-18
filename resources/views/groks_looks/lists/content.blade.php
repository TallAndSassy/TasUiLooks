@php
$slug = "lists";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
@include("tassy::/groks_looks/$slug/sample")
<x-tassy::title>UnOrdered</x-tassy::title>
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>

@php
$slug = "lists";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample2.blade.php";
@endphp
@include("tassy::/groks_looks/$slug/sample2")
<x-tassy::title>Ordered</x-tassy::title>
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>


