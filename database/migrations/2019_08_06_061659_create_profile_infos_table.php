<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->unsignedBigInteger('profession_id');
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->text('your_self')->nullable();
            $table->text('about_me')->nullable();
            $table->text('skill')->nullable();
            $table->text('image')->nullable();
            $table->string('business_name')->nullable();
            $table->string('job_title')->nullable();
            $table->unsignedBigInteger('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->unsignedBigInteger('business_stage_id');
            $table->foreign('business_stage_id')->references('id')->on('business_stages');
            $table->unsignedBigInteger('business_size_id');
            $table->foreign('business_size_id')->references('id')->on('business_sizes');
            $table->text('business_description')->nullable();
            $table->string('web_link')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('city')->nullable();
            $table->integer('zip')->nullable();
            $table->string('street_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook_page')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('twitter')->nullable();
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->string('slug');
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
        Schema::dropIfExists('profile_infos');
    }
}
