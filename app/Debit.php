<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Debit extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
        // 'akun_debit',
        'nominal_debit',
        'kode_akun_id',
        'transaksi_id'
    ];
    public function kodeakuns(){
        return $this->belongsTo(KodeAkun::class);
    }
}
