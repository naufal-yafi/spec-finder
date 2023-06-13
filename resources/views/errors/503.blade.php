@extends('layouts.err')

@section('title', 'Masih dalam Tahap Pengembangan | SpecFinder')

@section('img')
    <img src="{{ url('/assets/images/503.png') }}" alt="503" class="img-fluid">
@endsection

@section('err', '503 Service Unavailable')
@section('title_desc', 'Maaf Fitur Ini Masih dalam Tahap Pengembangan')
@section('desc',
    'Coba lagi lain waktu, kemungkinan fitur ini masih memiliki bug ataupun masalah lainnya yang memerlukan
    waktu untuk menyelesaikan permasalahan tersebut. Terimakasih.')
