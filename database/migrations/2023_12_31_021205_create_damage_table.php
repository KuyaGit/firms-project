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
        Schema::create('damages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('farmersID');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('extensionName')->nullable();
            $table->string('barangayAddress')->nullable();
            $table->string('cityAddress')->nullable();
            $table->string('provinceAddress')->nullable();
            $table->string('regionAddress')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('email');
            $table->unsignedBigInteger('cropInsuranceID');
            $table->foreign('cropInsuranceID')->references('id')->on('insurances')->onDelete('cascade');
            $table->string('cropName');
            $table->string('insuranceType');
            $table->string('policyNumber')->nullable();
            $table->string('sitio')->nullable();
            $table->string('barangayFarm');
            $table->string('cityFarm');
            $table->string('provinceFarm');
            $table->string('regionFarm');
            $table->string('damageCause');
            $table->string('extentDamage');
            $table->date('dateLoss');
            $table->date('dateHarvest');
            $table->date('dateSubmitted');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damages');
    }
};