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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->float('thickness');
            $table->float('length');
            $table->float('width');
            $table->unsignedBigInteger('species_id');
            $table->foreign('species_id')->references('id')->on('species');
            $table->unsignedBigInteger('treatment_id')->nullable();
            $table->foreign('treatment_id')->references('id')->on('treatments')->nullable();
            $table->unsignedBigInteger('drying_method_id');
            $table->foreign('drying_method_id')->references('id')->on('drying_methods');
            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->unsignedBigInteger('grading_system_id');
            $table->foreign('grading_system_id')->references('id')->on('grading_systems');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
