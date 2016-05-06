<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('springs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('alias')->nullable();
            $table->enum('status',['juomakelpoista', 'ei tietoa', 'ei juomakelpoista'])->default('ei tietoa');
            $table->date('tested_at')->nullable();
            $table->text('description');
            $table->text('short_description');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->boolean('visibility')->default(true);
            $table->string('image')->nullable();
            $table->string('slug')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('springs');
    }
}
