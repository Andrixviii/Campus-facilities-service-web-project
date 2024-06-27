<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Create Users table
        Schema::create('Accounts', function(Blueprint $table){
          $table->id("account_id");
          $table->String('Full_name');
          $table->String('Majoring');
          $table->String('Faculty');
          $table->String('Angkatan');
          $table->enum('Role',["Admin" , "User"])->default("User");
          $table->String('password')->bycrpt();
          $table->String('email')->unique();
          $table->String('Number_phone');
          $table->text('photo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Drop Users table
        Schema::dropIfExists('Accounts');
    }
};
