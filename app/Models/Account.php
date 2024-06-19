<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = "account_id";
    protected $fillable = [
        "Full_name",
        "Faculty",
        "Password",
        "Role",
        "Majoring",
        "Angkatan",
        "email",
        "Number_phone",
        "NIM"

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function booking_orders(){
        return $this->hasMany(booking_orders::class , "account_id");
    }


}
