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
        Schema::create('reaction_types', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'type');
            $table->boolean('Like');
            $table->boolean('Heart');
            $table->boolean('Care');
            $table->boolean('Angry');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reaction_types');
    }
};
