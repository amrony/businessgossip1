<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyingAdviceBusinessProfileArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buying_advice_business_profile_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('business_profile_article_id');
            $table->unsignedBigInteger('buying_advice_id');
            $table->foreign('business_profile_article_id', 'bpa_id')
                ->references('id')
                ->on('business_profile_articles')
                ->onDelete('cascade');

            $table->foreign('buying_advice_id','ba_id')
                ->references('id')
                ->on('buying_advices')
                ->onDelete('cascade');
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
        Schema::dropIfExists('buying_advice_business_profile_articles');
    }
}
