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

    Schema::table('infinites', function (Blueprint $table) {
        $table->foreignId('dojo_id')->constrained()->onDelete('cascade');
});
}

public function down(): void
{
    Schema::table('infinites', function (Blueprint $table) {
        $table->dropForeign(['dojo_id']);
        $table->dropColumn('dojo_id');
    });
}

};
