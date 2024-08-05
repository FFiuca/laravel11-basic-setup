<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Anime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table((new Anime())->getTable(), function (Blueprint $table) {
            $table->integer('avg_star')->after('count_star')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table((new Anime())->getTable(), function (Blueprint $table) {
            $table->dropColumn('avg_star');
        });
    }
};
