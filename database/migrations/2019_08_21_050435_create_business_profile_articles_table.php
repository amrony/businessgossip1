<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessProfileArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_profile_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('business_profile_id');
            $table->foreign('business_profile_id')->references('id')->on('business_profiles');
            $table->string('title');
            $table->text('short_description');
            $table->text('long_description');
            $table->text('image');
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
        Schema::dropIfExists('business_profile_articles');
    }
}
