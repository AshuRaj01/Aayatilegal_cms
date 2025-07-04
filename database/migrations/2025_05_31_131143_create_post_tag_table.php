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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('post_id')->constrained()->onDelete('cascade');
            // $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->bigInteger('tag_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
