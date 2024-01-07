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
        Schema::table('books', function (Blueprint $table){
            //creamos una nueva columna en la tabla asi que 
            $table->unsignedBigInteger('author_id')->nullable(); //vamos a darle que el valor sea nullable porque como ya tenemos otros datos no queremos que nos de problemas.
            //ahora vamos a indicar que es una clave foranea asi que..
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null');
            //en esta sentencia de arriba, le he indicado que va a ser clave foranea (authors_id) cuale es el campo que la relaciona en la otra tabla (id) y de que tabla es (authors) y que si se queda null que se borre.
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
