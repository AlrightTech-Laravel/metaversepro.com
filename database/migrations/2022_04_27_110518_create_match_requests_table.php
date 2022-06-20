<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender')->nullable();
            $table->string('lgbtqia')->nullable();
            $table->string('age')->nullable();
            $table->text('ethnicity')->nullable();
            $table->string('about')->nullable();
            $table->string('email')->nullable();
            $table->string('zip')->nullable();
            $table->string('inperson')->nullable();
            $table->text('location')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('weekdays')->nullable();
            $table->string('weekends')->nullable();
            $table->string('fee')->nullable();
            $table->string('whentostart')->nullable();
            $table->string('action_oriented')->nullable();
            $table->string('relational_and_reflective')->nullable();
            $table->string('creative_and_integrative')->nullable();
            $table->text('group')->nullable();
            $table->text('experties')->nullable();
            $table->string('techniquerequest')->nullable();
            $table->text('technique')->nullable();
            $table->string('followuppreference')->nullable();
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
        Schema::dropIfExists('match_requests');
    }
};
