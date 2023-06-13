@extends('layouts.main')

@section('app')
    @if ($banner != false)
        @include('components.bannerSlug')
    @endif

    @include('components.listProducts')
@endsection
