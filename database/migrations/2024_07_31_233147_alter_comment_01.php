<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

use App\Models\Comment;
use App\Models\Anime;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // dd(DB::select('SHOW COLUMNS FROM comments'));
        // DB::
        Schema::table((new Comment())->getTable(), function(Blueprint $table){
            $table->dropColumn('post_id');

            $table->foreignIdFor(Anime::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on((new User)->getTable())->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table((new Comment())->getTable(), function(Blueprint $tb){
            $tb->dropForeignIdFor(Anime::class);
            $tb->dropConstrainedForeignId('user_id'); // drop for foreign key belonging with this column
        });
    }
};
