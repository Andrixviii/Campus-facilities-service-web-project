<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class booking_orders extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey ="booking_order_id";
    protected $fillable = [
        'account_id',
        'booking_date',
        'facility_id',
        "Agenda"
    ];

    public function facility(){
      return $this->belongsTo(facility::class , "facility_id","Facility_id");
    }

    public function Account(){
       return $this->belongsTo(Account::class , "account_id");
    }

    public function booking_history(){
       return $this->belongsTo(booking_history::class ,"booking_order_id");
    }
}
