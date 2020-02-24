<?php
namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasApiTokens;

    
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'company_name',
        'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transaksis(){
        return $this->hasMany(Transaksi::class);
    }

    public function kodeakuns(){
        return $this->hasMany(KodeAkun::class);
    }

}
