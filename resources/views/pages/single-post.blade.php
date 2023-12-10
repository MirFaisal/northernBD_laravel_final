@extends('Layouts.master')
@section('content')

<x-post-header></x-post-header>

<x-main-post :post='$post'></x-main-post>

@endsection
