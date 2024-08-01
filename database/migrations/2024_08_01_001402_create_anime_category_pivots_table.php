<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Master\Category;
use App\Models\Anime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anime_category_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Anime::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_category_pivots');
    }
};
