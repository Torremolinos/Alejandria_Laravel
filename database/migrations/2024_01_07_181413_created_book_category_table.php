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
        Schema::create('book_category', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('book_id')->referencesÇ('id')->on('books');
            $table->foreign('category_id')->referencesÇ('id')->on('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
