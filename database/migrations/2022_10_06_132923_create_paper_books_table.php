<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_books', function (Blueprint $table) {
            $table->id();
            

            $table->string('category_id')->nullable();
            $table->string('book_id')->nullable();
            $table->string('book_title')->nullable();
            $table->string('book_author')->nullable();
            $table->string('book')->nullable();
            $table->string('image')->nullable();
            $table->string('book_price')->nullable();
            $table->string('book_abstract')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper_books');
    }
}
