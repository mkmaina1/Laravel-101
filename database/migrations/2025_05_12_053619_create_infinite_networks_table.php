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
        Schema::create('infinite_networks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table ->string('company_name');
            $table ->char('company_code');
            $table ->integer('location');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infinite_networks');
    }
};
