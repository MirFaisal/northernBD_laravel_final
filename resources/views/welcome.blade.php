@extends('Layouts.master') @section('content')
{{-- slider start--}}
<x-slider :firstBanner="$firstBanner"></x-slider>
{{-- sslider end --}}

<!-- {{-- project start --}}
<x-project :projects="$projects"></x-project>
{{-- project end --}} -->
{{-- all projects start --}}
<div class="container">
    <div class="row">
        <div
            class="col-md-12 text-center animate-box"
            data-animate-effect="fadeInUp"
        >
            <div class="section-title mt-5 pt-5">Our Projects</div>
        </div>
    </div>
</div>
<x-all-projects
    :projects="$projects"
    :categories="$categories"
></x-all-projects>
{{-- all projects end --}}

{{-- parallax start --}}
<x-parallax :secondBanner="$secondBanner"></x-parallax>
{{-- parallax end --}}

{{-- blog start --}}
<x-blog :posts="$posts"></x-blog>
{{-- blog end --}}

@endsection