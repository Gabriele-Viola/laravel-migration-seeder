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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('corporate', 255);
            $table->string('code', 4)->unique();
            $table->string('coach', 255);
            $table->string('departures', 255);
            $table->time('departures_time', precision: 0);
            $table->string('arrives', 255);
            $table->time('arrives_time', precision: 0);
            $table->boolean('on_time');
            $table->boolean('delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
