<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kredit extends Model
{
    use SoftDeletes;
    protected $fillable = 
    [
        // 'akun_kredit',
        'nominal_kredit',
        'transaksi_id',
        'kode_akun_id'
    ];
    public function kodeakuns(){
        return $this->belongsTo(KodeAkun::class,'kode_akun_id');
    }
}
