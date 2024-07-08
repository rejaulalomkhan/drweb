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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('SiteName');
            $table->string('SiteLogo');
            $table->string('favicon');
            $table->longText('SiteDescription');
            // $table->string('MetaTitle')->nullable();
            // $table->string('MetaDescription')->nullable();
            // $table->string('MetaKeyword')->nullable();
            // $table->string('MetaImage')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone')->nullable();
            $table->string('2ndPhone')->nullable();
            $table->longText('Address')->nullable();
            // $table->string('Facebook')->nullable();
            // $table->string('Twitter')->nullable();
            // $table->string('Instagram')->nullable();
            // $table->string('Linkedin')->nullable();
            // $table->string('Youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
