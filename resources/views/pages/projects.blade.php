@extends('Layouts.master') @section('content')
{{-- projects header start --}}
<x-projects-header-banner></x-projects-header-banner>
{{-- projects header end --}}

<hr class="line-vr-section" />

{{-- all projects start --}}
<x-all-projects :projects="$projects" :categories='$categories'></x-all-projects>
{{-- all projects end --}}
@endsection
