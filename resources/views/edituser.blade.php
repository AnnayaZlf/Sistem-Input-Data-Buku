@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                @if (session('info'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     <strong>{{ session('info') }}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                @endif
                <form action="/updateuser" method="post">
                    @csrf
                    <label>Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" required>
            </div>
                <div class="form-group">
                    <label>Konfirmasi password Baru</label>
                    <input type="password" name=" konfirmasi_password" class="form-control" required>
                </div>
            <div class="form-group">
               <button type="submit" class="btn btn-info">Update Password</button>
            </div>    
        </div>
    </div>
@endsection