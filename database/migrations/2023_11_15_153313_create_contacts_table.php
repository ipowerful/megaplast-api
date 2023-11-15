<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('telegram', 100)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('time_from', 50)->nullable();
            $table->string('days_from', 50)->nullable();
            $table->string('time_to', 50)->nullable();
            $table->string('days_to', 50)->nullable();
            $table->double('map_lat')->nullable();
            $table->double('map_long')->nullable();
            $table->tinyInteger('map_zoom')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
