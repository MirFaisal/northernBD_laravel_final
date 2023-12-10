@extends('Layouts.master') @section('content')
<x-single-project-header></x-single-project-header>
<hr class="line-vr-section" />
<x-single-project-item :project="$project"></x-single-project-item>


{{-- images gallerys start --}}
@if(count($firstSlot) > 0)
{{-- <hr class="line-vr-section" /> --}}
     <div class="container">
        <div class="row">
            <div class="col-md-12 text-center caption mt-90">
                <h1 style="font-size: 32px">All Images</h1>
            </div>
        </div>
    </div>
    {{-- Render firstSlot data --}}
    <x-images-gallery-images
    :firstSlot="$firstSlot"
    :secondSlot="$secondSlot"
    :lastedSlot="$lastedSlot"
></x-images-gallery-images>
@else
    {{-- Render project data --}}
@endif


{{-- images gallerys end --}}
@endsection