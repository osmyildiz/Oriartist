<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHellosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hellos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('title');
            $table->text('first_paragraph');
            $table->text('second_paragraph');
            $table->String('sign_url');
            $table->String('quote');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->text('meta_title');
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
        Schema::dropIfExists('hellos');
    }
}
