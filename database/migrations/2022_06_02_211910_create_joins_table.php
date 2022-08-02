<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('phone');
            $table->String('email');
            $table->String('website');
            $table->String('facebook');
            $table->String('city');
            $table->String('youtube');
            $table->String('instagram');
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
        Schema::dropIfExists('joins');
    }
}
