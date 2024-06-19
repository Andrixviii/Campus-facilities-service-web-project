<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Bycrpt;
use Illuminate\Database\Seeder;

class DummyAccounts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Users=[[
            "Full_name" => "ALI",
            "Password" => bcrypt("471471471"),
            "Faculty" => "Sastra",
            "Majoring" => "Sastra Mesin",
            "Angkatan" => "2000",
            "Role" => "User",
            "email" => "ali@gmail.com",
            "Number_phone"=>"111111111111111"
          ],

          [
              "Full_name" => "ULI",
              "Password" => bcrypt("472472472"),
              "Faculty" => "Sastra",
              "Majoring" => "Sastra Mesin",
              "Angkatan" => "2000",
              "Role" => "Admin",
              "email" => "uli@hotmail.com",
              "Number_phone"=>"111111111111112"
            ]
        ];

        foreach($Users as $key => $val){
            Account::create($val);
        }
    }

}
