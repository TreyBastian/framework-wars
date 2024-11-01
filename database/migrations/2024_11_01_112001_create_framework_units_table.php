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
        Schema::create('framework_units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('framework_id')->constrained()->cascadeOnDelete();
            $table->uuidMorphs('ownable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('framework_units');
    }
};
