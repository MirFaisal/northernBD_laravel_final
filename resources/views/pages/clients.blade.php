@extends('Layouts.master') @section('content')
{{-- clients header banner sstart --}}
<x-clients-header-banner></x-clients-header-banner>
{{-- clients header banner end --}}

<hr class="line-vr-section" />

{{-- all clients --}}
<x-all-clients></x-all-clients>
@endsection
