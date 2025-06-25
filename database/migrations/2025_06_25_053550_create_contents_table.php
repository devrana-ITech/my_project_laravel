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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('language_id')->nullable();
            $table->text('header')->nullable();
            $table->text('text')->nullable();
            $table->string('pic_1', 100)->nullable();
            $table->string('pic_2', 100)->nullable();
            $table->string('pic_3', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contents');
    }

};
