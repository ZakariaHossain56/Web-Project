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
        Schema::dropIfExists('enrolls');
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseid');
            $table->string('title');
            $table->string('category');
            $table->string('icon')->nullable();
            $table->text('overview');
            $table->text('outcome');
            $table->string('ytid');
            $table->string('duration');
            $table->string('price');
            $table->text('titles');
            $table->float('rating')->default(0.0);
            $table->integer('enrolled')->default(0);
            $table->unsignedBigInteger('author_id')->nullable();
            $table->string('author')->nullable();
            $table->string('userid');
            $table->foreign('author_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
