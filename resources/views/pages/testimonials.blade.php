@extends('Layouts.master') @section('content')
{{-- testmonial header start --}}
<x-testmonial-header-banner></x-testmonial-header-banner>
{{-- testmonial header end --}}

<hr class="line-vr-section" />

<x-all-testmonials></x-all-testmonials>

@endsection
