<?php

use App\Models\Enums\EventBudgetStatus;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained();
            $table->string('location');
            $table->integer('attendees_limit')->nullable();
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date')->default(null)->nullable();
            $table->string('image_url')->nullable();
            $table->string('event_status')->default('NONE');
            $table->string('budget_status')->default('NONE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
