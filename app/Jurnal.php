<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use SoftDeletes;

    protected $fillabel = [
        'jenis_transaksi',
        'akun_debet',
        'akun_kredit',
        'nominal_debet',
        'nominal_kredit',      
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
