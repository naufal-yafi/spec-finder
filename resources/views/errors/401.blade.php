@extends('layouts.err')

@section('title', 'Pengguna Tidak Dikenali | SpecFinder')

@section('img')
    <img src="{{ url('/assets/images/401.png') }}" alt="401" class="img-fluid">
@endsection

@section('err', '401 Unauthorized')
@section('title_desc', 'Kamu Tidak Dikenali Oleh Sistem!')
@section('desc', 'Tolong ikuti alur atau prosedur dari sistem yang dibuat dari login hingga melakukan hal lainnya.')
