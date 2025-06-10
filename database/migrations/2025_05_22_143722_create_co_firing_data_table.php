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
        Schema::create('co_firing_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admin')->onDelete('cascade');
            $table->integer('biomass');
            $table->integer('batubara');
            $table->integer('nk_biomass');
            $table->integer('nk_batubara');
            $table->integer('mwh_brown');
            $table->integer('mwh_green');
            $table->integer('mwh_total');
            $table->integer('sh_bm');
            $table->integer('co2_eq_avoid');
            $table->date('date_input');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('co_firing_data');
    }
};
