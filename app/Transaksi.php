<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'jenis_transaksi',
        'keterangan_transaksi',
        'tanggal_transaksi',   
    ];

    public function debits(){
        return $this->hasMany(Debit::class);
    }

    public function kredits(){
        return $this->hasMany(Kredit::class);
    }
}