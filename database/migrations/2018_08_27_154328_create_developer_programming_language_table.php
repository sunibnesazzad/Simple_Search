<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeveloperProgrammingLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_programming_language', function (Blueprint $table) {
            $table->integer('developer_id')->unsigned();
            $table->integer('programming_language_id')->unsigned();
            $table->foreign('developer_id')->references('id')->on('developers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('programming_language_id')->references('id')->on('programming_languages')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('developer_programming_language');
    }
}
