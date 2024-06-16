<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "buku";

    protected $fillable = [
        'namabuku',
        'jenis_buku',
        'tahun',
    ];
}
