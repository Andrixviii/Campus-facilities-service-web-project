<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\booking_history;

class Booking_historyDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Datas = [

          ["booking_order_id" => 3 ],
          ["booking_order_id" => 2 ],
          ["booking_order_id" => 1 ],

        ];

        foreach($Datas as $data){
          booking_history::create($data);
        }
    }
}
