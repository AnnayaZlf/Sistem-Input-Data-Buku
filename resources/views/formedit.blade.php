@extends('layouts.app')
@section('title', 'Edit Buku')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('books.update', $em->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Buku</label>
                    <input type="text" name="namabuku" class="form-control" value="{{ $em->namabuku }}" required>
                </div>
                <div class="form-group">
                    <label>Jenis Buku</label>
                    <select name="jenis_buku" class="form-control">
                        <option value="Novel" {{ $em->jenis_buku == "Novel" ? "selected" : "" }}>Novel</option>
                        <option value="Dongeng" {{ $em->jenis_buku == "Dongeng" ? "selected" : "" }}>Dongeng</option>
                        <option value="Majalah" {{ $em->jenis_buku == "Majalah" ? "selected" : "" }}>Majalah</option>
                        <option value="Karya Ilmiah" {{ $em->jenis_buku == "Karya Ilmiah" ? "selected" : "" }}>Karya Ilmiah</option>
                        <option value="Biografi" {{ $em->jenis_buku == "Biografi" ? "selected" : "" }}>Biografi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" name="tahun" min="1900" max="2100" class="form-control" value="{{ $em->tahun }}" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection