@extends('layouts.err')

@section('title', 'Halaman Tidak Ditemukan | SpecFinder')

@section('img')
    <img src="{{ url('/assets/images/404.png') }}" alt="404" class="img-fluid">
@endsection

@section('err', '404 Not Found')
@section('title_desc', 'Maaf Halaman yang Kamu Cari Tidak Ditemukan')
@section('desc', 'Tolong untuk tidak mengubah URL secara paksa dan pastikan bahwa URL tersebut sudah benar.')
