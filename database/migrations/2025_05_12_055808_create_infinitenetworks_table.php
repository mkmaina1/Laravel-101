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
        Schema::create('infinitenetworks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table ->string('name');
            $table ->integer('location');
            $table ->text('bio');
            $table->foreignId('dojo_id')->constrained()->onDelete('cascade');
            $table->string('role')->default('user'); // roles: admin, user

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infinitenetworks');
    }
};
