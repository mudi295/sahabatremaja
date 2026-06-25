<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->string('thumbnail')->nullable();

            $table->enum('type', [
                'module',
                'video'
            ]);

            $table->string('file')->nullable();

            $table->string('video_url')->nullable();

            $table->boolean('is_active')
                  ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};