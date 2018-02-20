<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->text('excerp');
            $table->text('body');
            $table->string('image');
            $table->boolean('hidden')->default(false);
            $table->timestamp('datum');
        });
        Schema::create('bloggers', function(Blueprint $table){
            $table->increments('id');
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->boolean('hidden')->default(false);
            $table->timestamp('datum');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
