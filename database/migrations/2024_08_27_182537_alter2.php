<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('usersheet', function (Blueprint $table) {
        // Make the column nullable and default to null
        $table->text('additional_info')->nullable()->default(null)->change();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usersheet', function (Blueprint $table) {
            $table->text('additional_info')->change();
        });    }
};
