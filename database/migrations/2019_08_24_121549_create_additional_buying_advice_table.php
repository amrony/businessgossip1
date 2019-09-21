<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalBuyingAdviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_buying_advices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('buying_advice_id');
            $table->foreign('buying_advice_id')->references('id')->on('buying_advices')->onDelete('cascade');
            $table->string('additional_title');
            $table->text('additional_body');
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
        Schema::dropIfExists('additional_buying_advice');
    }
}
