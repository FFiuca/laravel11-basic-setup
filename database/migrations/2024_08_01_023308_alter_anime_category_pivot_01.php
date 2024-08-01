<?php

use App\Models\AnimeCategoryPivot;
use App\Models\Master\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table((new AnimeCategoryPivot())->getTable(), function(Blueprint $table){
            DB::beginTransaction();

            if(Schema::hasIndex((new Category())->getTable(), ['category_id']))
                $table->dropForeignIdFor(Category::class);

            $table->unsignedBigInteger('category_id')->nullable()->change();

            $table->foreign('category_id')->references('id')->on((new Category())->getTable())->constrained()->onDelete('set null')->onUpdate('cascade');

            DB::commit();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table((new AnimeCategoryPivot())->getTable(), function(Blueprint $table){
            $table->dropForeignIdFor(Category::class);

            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
