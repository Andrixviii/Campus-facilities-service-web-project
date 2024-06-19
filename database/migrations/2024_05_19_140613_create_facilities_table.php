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
        //
        Schema::create('Facilities', function(Blueprint $table){
          $table->id("Facility_id");
          $table->String('nama_fasilitas');
          $table->String('Lokasi');
          $table->boolean('Ketersediaan')->default(1);
          $table->text("Deskripsi")->nullable();
          $table->text("photo")->nullable();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Facilities');
    }
};
