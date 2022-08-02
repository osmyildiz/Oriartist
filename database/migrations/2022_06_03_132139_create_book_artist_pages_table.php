<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookArtistPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_artist_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('title')->nullable();
            $table->text('first_paragraph')->nullable();
            $table->text('second_paragraph')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_title')->nullable();
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
        Schema::dropIfExists('book_artist_pages');
    }
}
