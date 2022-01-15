<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('name',100)->nullable();
            $table->string('institute',100)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('interested',100)->nullable();
            $table->string('mentor_id',100)->nullable();
            $table->string('contact',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('address',100)->nullable();
            $table->string('video',100)->nullable();
            $table->string('sheet',100)->nullable();
            $table->string('schedule',100)->nullable();
            
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('mentors');
    }
}