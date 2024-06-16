@extends('layouts.app')
@section ('title', 'Halaman Menu')
@section('content')
    <h1>Hallo, Pilih Buku Kesukaanmu!</h1>
    {{Auth::user()->name}}
@endsection