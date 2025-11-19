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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')
                ->constrained('jobs')
                ->cascadeOnDelete();
            $table->foreignId('candidate_profile_id')
                ->constrained('candidate_profiles')
                ->cascadeOnDelete();
            $table->string('status')->nullable();
            $table->text('mensagem')->nullable();
            $table->dateTime('schedule')->nullable();
            $table->timestamps();
            $table->unique(['job_id', 'candidate_profile_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
