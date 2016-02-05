<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tag and categories table
        Schema::create('tags',function(Blueprint $table){
            $table->increments('id');
            $table->string('tag');

        });
        Schema::create('categories',function(Blueprint $table){
            $table->increments('id');
            $table->string('category');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('tags');
        Schema::drop('categories');
    }
}
