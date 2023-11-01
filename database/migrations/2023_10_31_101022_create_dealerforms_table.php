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
        Schema::create('dealerforms', function (Blueprint $table) {
            $table->id();
            $table->string('conpany_name');
            $table->string('name');
            $table->string('husband_father')->nullable();
            $table->string('company_address')->nullable();
            $table->string('dealer_address')->nullable();
            $table->string('nid_birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('visiting_area')->nullable();
            $table->integer('agree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealerforms');
    }
};
