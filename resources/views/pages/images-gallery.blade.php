@extends('Layouts.master')

@section('content')
{{-- images gallery header start --}}
<x-images-gallery-header-banner></x-images-gallery-header-banner>
{{-- images gallery header end --}}

<hr class="line-vr-section" />

{{-- images gallerys start --}}
<x-images-gallery-images :firstSlot='$firstSlot' :secondSlot='$secondSlot' :lastedSlot='$lastedSlot'></x-images-gallery-images>
{{-- images gallerys end --}}
    
@endsection