<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Episode;
use App\Models\Master\Language;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('episode_language_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Episode::class)->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Language::class)->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
            $table->text('video_link')->nullable();
            $table->text('audio_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episode_language_pivots');
    }
};
