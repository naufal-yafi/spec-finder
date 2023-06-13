@extends('layouts.err')

@section('title', 'Terjadi Kesalahan Fatal | SpecFinder')

@section('img')
    <img src="{{ url('/assets/images/500.png') }}" alt="500" class="img-fluid">
@endsection

@section('err', '500 Internal Server Error')
@section('title_desc', 'Tenang Kami Sedang Memperbaikinya. Tunggu Ya!')
@section('desc', 'Kamu dapat menanyakan masalah yang terjadi dengan menekan tombol Laporkan Bug')
