<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('dostawca');
            $table->text('kategoria');
            $table->string('tag1');
            $table->string('tag2');
            $table->string('tag3');
            $table->string('tag4');
            $table->string('tag5');
            $table->string('tag6');
            $table->string('tag7');
            $table->string('tag8');
            $table->string('tag9');
            $table->string('tag10');
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
        Schema::dropIfExists('kategories');
    }
}
