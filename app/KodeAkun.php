<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodeAkun extends Model
{
    protected $fillable = [
        'kode_akun',
        'nama_akun',
        'deleteable',
        'user_id'
    ];

    public function debits(){
        return $this->hasMany(Debit::class);
    }

    public function kredits(){
        return $this->hasMany(Kredit::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
