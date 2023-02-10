<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('unitNumber');
            $table->enum('unitType', ['Studio','Loft', 'Bedroom Unit', 'Penthouse Unit', 'Bi-Level Unit']);
            $table->enum('unitStatus', ['Sold','Rented', 'For Sale', 'For Rent']);
            $table->float('floorArea')->nullable();
            $table->float('unitPrice');
            $table->integer('numBed')->nullable();
            $table->integer('numBaths')->nullable();
            $table->string('imagePath')->nullable()->default(null);
            $table->enum('hasParking' , ['none', '1', '2']);
            $table->enum('isApproved', ['Approved','Denied','Pending'])->default('pending');
            $table->foreignId('user_id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
