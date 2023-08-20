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
            $table->string('title');
            $table->string('brief')->nullable();
            $table->string('status');
            $table->date('date')->nullable();
            $table->foreignId('assignee_id')->constrained('users');
            $table->foreignId('event_id')->constrained();
            $table->foreignId('created_by')->constrained('users');
            $table->string('priority')->default('Low');
            $table->string('task_status')->default('To do');
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
