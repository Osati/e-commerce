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
        Schema::create('newcars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category_name');
            $table->string('author_name');
            $table->text('description');
            $table->integer('product_mrp');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newcars');
    }
};
