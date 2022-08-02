<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('surname')->nullable()->default('');
            $table->String('slug');
            $table->String('phone');
            $table->String('email');
            $table->String('city')->nullable();
            $table->String('website')->nullable();
            $table->String('instagram')->nullable();
            $table->String('facebook')->nullable();
            $table->String('youtube')->nullable();
            $table->String('twitter')->nullable();
            $table->text('brief')->nullable()->default('');
            $table->text('paragraph1')->default('');
            $table->text('paragraph2')->nullable();
            $table->text('paragraph3')->nullable();
            $table->text('paragraph4')->nullable();
            $table->String('cover_img');
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_title')->nullable();
            $table->String('video_url')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('priority')->default(99);
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
        Schema::dropIfExists('artists');
    }
}
