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
        Schema::create('mentees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim', 8)->unique();
            $table->string('angkatan', 4);
            $table->boolean('active')->default(true);
            $table->integer('mentor_id');
            $table->float('score')->nullable();
            $table->integer('scores_id');
            $table->timestamps();

            $table->foreign('mentor_id')->references('id')->on('mentors');
            $table->foreign('scores_id')->references('id')->on('scores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentees');
    }
};
