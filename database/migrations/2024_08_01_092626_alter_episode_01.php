<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Episode;
use App\Models\Anime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table((new Episode())->getTable(), function(Blueprint $tb){
            $tb->foreignIdFor(Anime::class)->nullable()->after('id')->constrained()->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table((new Episode())->getTable(), function(Blueprint $tb){
            $tb->dropForeignIdFor(Anime::class);
            $tb->dropColumn('anime_id');
        });
    }
};
