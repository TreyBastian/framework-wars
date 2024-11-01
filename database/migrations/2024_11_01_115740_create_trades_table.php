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
        Schema::create('trades', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignUuid('location_id')->nullable()->constrained()->nullOnDelete();
            $table->bigInteger('unit_price');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::create('framework_unit_trade', function (Blueprint $table) {
            $table->foreignUuid('framework_unit_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('trade_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trades');
        Schema::dropIfExists('framework_units_trades');
    }
};
