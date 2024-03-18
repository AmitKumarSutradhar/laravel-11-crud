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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // 'content' column to store the main content of the task
            $table->string('content');

            // 'info_file' column to store information about attached files (nullable)
            $table->string('info_file')->nullable();

            // 'is_completed' column to track whether the task is completed or not (default: 0)
            $table->unsignedTinyInteger('is_completed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
