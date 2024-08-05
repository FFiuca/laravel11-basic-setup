<?php

use App\Models\Anime;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Comment;
use App\Models\Episode;

return new class extends Migration
{
    static $table;

    function __construct(){
        self::$table =  (new Comment())->getTable();
    }
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(static::$table, function($table){

            if(Schema::hasColumn(static::$table, 'anime_id')){
                $table->dropForeignIdFor(Anime::class);
                $table->dropColumn('anime_id');
            }

            $table->foreignIdFor(Episode::class)->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(static::$table, function($table){
            $table->dropForeignIdFor(Episode::class);
            $table->dropColumn('episode_id');

            $table->foreignIdFor(Anime::class)->nullable()->constrained()->nullOnDelete()->cascadeOnUpdate();
        });
    }
};
