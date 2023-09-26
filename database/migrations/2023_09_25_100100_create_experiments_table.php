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
        Schema::create('experiments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('tracker_id');
            $table->boolean('enable')->default(false);
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('url');
            $table->string('ga4_id');
            $table->string('type')->default('redirect');
            $table->string('weight_type')->default('evenly_split');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiments');
    }
};
