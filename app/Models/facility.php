<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facility extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "Facility_id";
    protected $fillable = [
        "nama_fasilitas",
        "Lokasi",
        "Deskripsi",
        "photo"

    ];

    public function booking_orders(){
        return $this->hasMany(booking_orders::class , "facility_id","Facility_id");
    }

}
