@extends('Layouts.master') @section('content')
{{-- faqs header start --}}
<x-faq-header-banner></x-faq-header-banner>
{{-- faqs header end --}}

<hr class="line-vr-section" />

{{-- faqs start --}}
<x-all-faqs></x-all-faqs>
{{-- faqs end --}}

@endsection
