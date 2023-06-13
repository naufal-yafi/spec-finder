@extends('layouts.err')

@section('title', 'Akses Ditolak | SpecFinder')

@section('img')
    <img src="{{ url('/assets/images/403.png') }}" alt="403" class="img-fluid">
@endsection

@section('err', '403 Forbidden')
@section('title_desc', 'Maaf Terjadi Kesalahan, Kamu Tidak Memiliki Akses Sumber Daya Di Halaman Ini')
@section('desc', 'Kamu dapat menanyakan masalah yang terjadi dengan menekan tombol Laporkan Bug')
