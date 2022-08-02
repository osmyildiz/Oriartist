<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('phone');
            $table->date('event_date');
            $table->String('email');
            $table->String('city');
            $table->String('event_type');
            $table->Text('message');
            $table->Text('fields');
            $table->integer('read')->default(0);
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
        Schema::dropIfExists('book_artists');
    }
}
