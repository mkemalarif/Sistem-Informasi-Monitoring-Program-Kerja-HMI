@extends('partial.main')

@section('auth-navbar-items')
    @if(Auth::check())
        @if(Auth::user()->role == 'admin')
            @include('admin-navbar')
        @elseif(Auth::user()->role == 'ketua')
            @include('ketua-navbar')
        @elseif(Auth::user()->role == 'anggota')
            @include('anggota-navbar')
        @endif
    @endif
@endsection

@section('container')
    <!-- Konten dashboard -->
@endsection
