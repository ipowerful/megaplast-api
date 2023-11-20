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
        Schema::table('products', function ($table) {
            $table->string('slug', 100)->default(0)->change();
            $table->decimal('price', 9, 0)->default(0)->change();
            $table->decimal('price_old', 9, 0)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function ($table) {
            $table->string('slug', 100)->change();
            $table->decimal('price', 9, 0)->change();
            $table->decimal('price_old', 9, 0)->change();
        });
    }


};
