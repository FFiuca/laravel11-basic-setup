<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Master\Status;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('animes');

        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Status::class)->constrained();
            $table->char('name', 150);
            $table->char('slug', 200);
            $table->text('description')->nullable();
            $table->integer('count_episode')->nullable();
            $table->integer('count_bookmark')->nullable();
            $table->integer('count_star')->nullable();
            $table->integer('count_comment')->nullable();
            $table->integer('count_watched')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
