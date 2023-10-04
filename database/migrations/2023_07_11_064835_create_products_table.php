<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Measure;
use App\Models\Category;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('name_full', 100)->unique();
//            $table->string('slug', 100)->unique();
            $table->string('slug', 100);
            $table->string('article', 20)->unique();
            $table->decimal('price', 9, 0);
            $table->decimal('price_old', 9, 0);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_in_stock')->default(false);
            $table->foreignIdFor(Measure::class)->unsigned();
            $table->foreignIdFor(Category::class)->unsigned();
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
