<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyingAdvicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buying_advices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('article_category_id');
            $table->foreign('article_category_id')->references('id')->on('article_categories')->onDelete('cascade');
            $table->unsignedBigInteger('article_sub_category_id');
            $table->foreign('article_sub_category_id')->references('id')->on('article_sub_categories')->onDelete('cascade');
            $table->unsignedBigInteger('business_profile_article_id');
            $table->foreign('business_profile_article_id')->references('id')->on('business_profile_articles')->onDelete('cascade');
            $table->string('title');
            $table->text('body');
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
        Schema::dropIfExists('buying_advices');
    }
}
