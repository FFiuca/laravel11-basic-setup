<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Anime;
use App\Models\Master\Language;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anime_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Anime::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Language::class)->nullable()->constrained()->onDelete('set null')->onUpdate('cascade'); // not use on delete cascade due universal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_languages');
    }
};
