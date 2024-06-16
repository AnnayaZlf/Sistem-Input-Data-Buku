@extends('layouts.app')
@section('title', 'Halaman Input Buku')
@section('content')

<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/save" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="namabuku" class="form-control" placeholder="Masukan Judul" required>
            </div>
            <div class="form-group">
                <label>Jenis Buku</label>
                <select name="jenis_buku" class="form-control">
                    <option value="">--Pilih Jenis Buku--</option>
                    <option value="Novel">Novel</option>
                    <option value="Dongeng">Dongeng</option>
                    <option value="Majalah">Majalah</option>
                    <option value="Karya Ilmiah">Karya Ilmiah</option>
                    <option value="Biografi">Biografi</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" name="tahun" min="1900" max="2100" class="form-control" placeholder="Masukan Tahun" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection
