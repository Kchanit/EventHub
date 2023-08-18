<?php

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
        Schema::create('all_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('brief')->nullable();
            $table->string('status');
            $table->integer('progress');
            $table->date('date');
            $table->foreignId('event_id')->constrained();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_tasks');
    }
};
