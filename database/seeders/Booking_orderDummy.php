<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\booking_orders;

class Booking_orderDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Datas = [

          
          [
            "Facility_id" => 4 ,
            "account_id" => 2
          ],
          [
            "Facility_id" => 4 ,
            "account_id" => 2
          ]

        ];

        foreach($Datas as $data){
          booking_orders::create($data);
        }
    }
}
