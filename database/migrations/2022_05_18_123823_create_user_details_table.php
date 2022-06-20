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
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('education')->nullable();
            $table->enum('license', ['yes', 'no'])->nullable();
            $table->enum('counseling', ['yes', 'no'])->nullable();
            $table->longText('offerings')->nullable();
            $table->longText('Offering_now')->nullable();
            $table->string('description')->nullable();
            $table->string('images')->nullable();
            $table->enum('events', ['yes', 'no'])->nullable();
            $table->string('event_description')->nullable();
            $table->string('event_image')->nullable();
            $table->string('availability')->nullable();
            $table->enum('status', ['approved', 'rejected', 'pending'])->default('pending')->nullable();
            $table->string('internships')->nullable();
            $table->string('intern_hours')->nullable();
            $table->string('exam_study_group')->nullable();
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
        Schema::dropIfExists('user_details');
    }
};
