@php
$slug = "lists";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
@include("tas-ui-looks::groks/$slug/sample")
<x-tas-ui-looks::title>UnOrdered</x-tas-ui-looks::title>
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>

@php
$slug = "lists";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample2.blade.php";
@endphp
@include("tas-ui-looks::groks/$slug/sample2")
<x-tas-ui-looks::title>Ordered</x-tas-ui-looks::title>
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>


