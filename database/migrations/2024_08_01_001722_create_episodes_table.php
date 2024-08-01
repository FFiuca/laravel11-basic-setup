<?php

use App\Models\Master\Language;
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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Status::class, 'st_id')->nullable()->constrained((new Status())->getTable())->onDelete('set null')->onUpdate('cascade');
            $table->foreignIdFor(Language::class)->nullable()->constrained()->onDelete('set null')->onUpdate('cascade');
            $table->char('title', 200);
            $table->json('meta_info')->nullable();
            $table->text('video_link')->nullable();
            $table->text('thumbnail_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
