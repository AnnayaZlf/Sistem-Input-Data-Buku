@extends('layouts.app')
@section('title', 'Tambah Buku')
@section('content')

    <div class="card">
        <div class="card-header"></div>
            <div class ="card-body">
                <form action="/update/{{ $em->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Buku</label>
                        <input type="text" name="title" class="form-control" value="{{ $em->title }}" required>
                    </div>
                <div class="form-group">
                    <label>Jenis Buku</label>
                    <select name="type" class="form-control">
                        <option value="0">--Pilih Jenis Buku--</option>
                        <option value="Novel" {{ $em->type = "Novel" ? "Selected":"" }}>Novel</option>
                        <option value="Komik" {{ $em->type = "Komik" ? "Selected":"" }}>Dongeng</option>
                        <option value="Majalah" {{ $em->type = "Majalah" ? "Selected":"" }}>Majalah</option>
                        <option value="Karya Ilmiah" {{ $em->type = "Karya Ilmiah" ? "Selected":"" }}>?Karya Ilmiah</option>
                        <option value="Biografi"{{ $em->type = "Biografi" ? "Selected":"" }}>Biografi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" name="tahun" min="1900" max="2100" value="{{ $em->tahun }}" class="form-control" placeholder="Masukan Tahun" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-info">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
