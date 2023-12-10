@extends('Layouts.master')

@section('content')
{{--about header-banner --}}
<x-about-header-banner></x-about-header-banner>
{{-- about header banner end --}}

 <hr class="line-vr-section" />

 {{-- about sstart --}}
 <x-about></x-about>
 {{-- about end --}}

 <div class="container">
    <div class="row">
        <div
            class="col-md-12 text-center animate-box"
            data-animate-effect="fadeInUp"
        >
            <div class="section-title mt-5 pt-5">Our Team</div>
        </div>
    </div>
</div>

<x-full-team></x-full-team>

<div class="container">
    <div class="row">
        <div
            class="col-md-12 text-center animate-box"
            data-animate-effect="fadeInUp"
        >
            <div class="section-title mt-5 pt-5">Testiominals</div>
        </div>
    </div>
</div>
 {{-- Testiominals section start --}}
    <x-testiominals-slider></x-testiominals-slider>
 {{-- Testiominals section end --}}

 <div class="container">
    <div class="row">
        <div
            class="col-md-12 text-center animate-box"
            data-animate-effect="fadeInUp"
        >
            <div class="section-title mt-5 pt-5">FAQ's</div>
        </div>
    </div>
</div>

<x-all-faqs></x-all-faqs>



<hr class="line-vr-section" />
@endsection