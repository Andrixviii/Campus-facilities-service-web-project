<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking_history extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primarykey = "booking_history_id";
    protected $fillable = [
      "booking_order_id",
      "tanggal"
    ];

    public function booking_orders(){
      return $this->belongsTo(booking_orders::class , "booking_order_id" );
    }
}
