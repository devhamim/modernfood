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
        Schema::create('visitingareas', function (Blueprint $table) {
            $table->id();
            $table->string('dealerform_id');
            $table->string('sl')->nullable();
            $table->string('visiting_company_name')->nullable();
            $table->string('visiting_product')->nullable();
            $table->string('monthly_sell')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitingareas');
    }
};
