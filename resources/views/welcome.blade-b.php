@extends('Layouts.master') @section('content')
{{-- slider start--}}
<x-slider :firstBanner="$firstBanner"></x-slider>
{{-- sslider end --}}

{{-- project start --}}
<x-project :projects="$projects"></x-project>
{{-- project end --}}

{{-- parallax start --}}
<x-parallax :secondBanner="$secondBanner"></x-parallax>
{{-- parallax end --}}

{{-- blog start --}}
<x-blog :posts='$posts'></x-blog>
{{-- blog end --}}

@endsection
