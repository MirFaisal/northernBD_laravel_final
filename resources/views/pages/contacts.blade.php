@extends('Layouts.master') @section('content')
{{-- contacts header banner start --}}
<x-contacts-header-banner></x-contacts-header-banner>
{{-- contacts header banner end --}}

<hr class="line-vr-section" />

{{-- contacts start --}}
<x-contacts-form></x-contacts-form>
{{-- contacts end --}}
@endsection
