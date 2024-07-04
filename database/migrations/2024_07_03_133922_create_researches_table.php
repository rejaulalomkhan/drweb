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
        Schema::create('researches', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->text('page_description');
            $table->string('icon_class')->nullable();
            $table->string('icon_title')->nullable();
            $table->string('icon_section_id');
            $table->string('section_title');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->longText('section_description');
            $table->string('section_image');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('researches');
    }
};
