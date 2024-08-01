<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Master\Tag;
use App\Models\Anime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anime_tag_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Anime::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Tag::class)
                    ->constrained((new Tag)->getTable() )
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate(); // due tag table use custom table name
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_tag_pivots');
    }
};
