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
        Schema::create('Booking_orders', function(Blueprint $table){
          $table->id('booking_order_id');
          $table->timestamp('tanggal_booking');
          $table->unsignedBigInteger('facility_id');
          $table->unsignedBigInteger('account_id');
          $table->foreign('facility_id')->references('Facility_id')->on('Facilities')->cascadeOnDelete();
          $table->foreign('account_id')->references('id')->on('Accounts')->cascadeOnDelete();
          $table->enum('status',["Approved" , "Rejected" , "Waiting for approval"])->default("Waiting for approval");
          $table->String("Agenda")->default("Acara tertentu");

        });



        Schema::create('Booking_Histories', function(Blueprint $table){
          $table->id('Booking_history_id');
          $table->timestamp('tanggal_ACC');
          $table->unsignedBigInteger('booking_order_id');
          $table->foreign('booking_order_id')->references('booking_order_id')->on('Booking_orders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("Booking_orders");
        Schema::dropIfExists("Booking_Histories");
    }
};
