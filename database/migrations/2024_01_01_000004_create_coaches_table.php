<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->longText('bio')->nullable();
            $table->string('image_url')->nullable();
            $table->json('expertise')->nullable();
            $table->json('certifications')->nullable();
            $table->integer('clients_transformed')->default(0);
            $table->string('coaching_type')->default('1:1');
            $table->integer('customizable_percentage')->default(100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
