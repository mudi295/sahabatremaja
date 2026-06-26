<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
           $table->id();

            $table->string('title');
            $table->string('subtitle')->nullable();

            $table->longText('description');

            $table->string('image')->nullable();

            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            
            $table->string('impact_total')->nullable();
            $table->string('impact_label')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
