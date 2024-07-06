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
        Schema::create('research_contents', function (Blueprint $table) {
            $table->id();
            $table->string('block_title');
            $table->string('block_image');
            $table->string('section_title');
            $table->string('section_image');
            $table->longText('section_description');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_contents');
    }
};
