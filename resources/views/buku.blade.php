@extends('layouts.app')
@section('title', 'Halaman Tambah Buku')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/buku/add" class="btn btn-info">Input Buku</a>
        </div>
    </div> 
        <div class="card-body">
         @if (session('alert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('alert') }}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @endif
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Jenis Buku</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bk as $idx => $m)
            <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $m->namabuku }}</td>
                <td>{{ $m->jenis_buku }}</td>
                <td>{{ $m->tahun }}</td>
                <td>
                    <a href="/buku/edit/{{ $m->id }}" class="btn btn-success">Edit</i></a>
                    <a href="/delete/{{ $m->id }}" class="btn btn-danger">Delete</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
        {{--DATATABLES DISINI--}}
         
@endsection