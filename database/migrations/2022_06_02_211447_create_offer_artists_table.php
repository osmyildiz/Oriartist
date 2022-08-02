<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('title');
            $table->String('quote');
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->text('paragraph3');
            $table->text('title2');
            $table->String('item1');
            $table->String('item2');
            $table->String('item3');
            $table->String('item4');
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
        Schema::dropIfExists('offer_artists');
    }
}
