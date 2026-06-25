<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evacuation_routes', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->enum('disaster_type', [
                'tsunami',
                'gempa',
                'banjir',
                'longsor'
            ]);

            $table->string('start_location');

            $table->decimal('start_lat',10,7);
            $table->decimal('start_lng',10,7);

            $table->string('safe_location');

            $table->decimal('safe_lat',10,7);
            $table->decimal('safe_lng',10,7);

            $table->integer('estimated_time')->nullable();

            $table->text('description')->nullable();

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evacuation_routes');
    }
};