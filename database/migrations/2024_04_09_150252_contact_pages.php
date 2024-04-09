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
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->string('contact_title_1')->nullable();
            $table->text('contact_description_1')->nullable();
            $table->string('contact_title_2')->nullable();
            $table->text('contact_description_2')->nullable();
            $table->string('contact_title_3')->nullable();
            $table->string('contact_description_3')->nullable();
            $table->string('contact_title_4')->nullable();
            $table->string('contact_description_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_pages');
    }
};
