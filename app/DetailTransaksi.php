<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailTransaksi extends Model
{
    use SoftDeletes;
    protected $fillable = 
    [
        'nominal',
        'transaksi_id',
        'kode_akun_id',
        'is_debit',
    ];
    public function kodeakuns(){
        return $this->belongsTo(KodeAkun::class, 'kode_akun_id');
    }
}
