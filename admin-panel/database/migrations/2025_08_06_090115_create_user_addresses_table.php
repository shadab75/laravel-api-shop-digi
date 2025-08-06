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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('address');
            $table->string('cellphone');
            $table->string('postal_code');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('province_id')->constrained()->onDelete('restrict');
            $table->foreignId('city_id')->constrained()->onDelete('restrict');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
