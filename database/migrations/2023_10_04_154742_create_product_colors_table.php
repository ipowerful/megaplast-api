<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Models\Color;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 9, 0);
            $table->decimal('price_old', 9, 0);
            $table->boolean('is_in_stock')->default(false);
            $table->foreignIdFor(Product::class)->unsigned();
            $table->foreignIdFor(Color::class)->unsigned();
            $table->timestamps();

            $table->unique(['product_id', 'color_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_colors');
    }
};
