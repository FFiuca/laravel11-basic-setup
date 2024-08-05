<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Anime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mentioneds', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Anime::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->dateTimeTz('time_watched')->nullable();
            $table->dateTimeTz('time_bookmarked')->nullable();
            $table->dateTimeTz('time_starred')->nullable();
            $table->integer('star')->nullable();
            $table->timestamps();

            $table->primary(['anime_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentioneds');
    }
};
