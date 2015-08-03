<?php

//use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Phaza\LaravelPostgis\Schema\Blueprint;

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
            $table->string('alias');
            $table->enum('status',['juomakelpoista', 'ei tietoa', 'ei juomakelpoista'])->default('ei tietoa');
            $table->date('tested_at')->nullable();
            $table->text('description');
            $table->text('short_description');
            $table->point('location');
            $table->boolean('visibility')->defaul(true);
            $table->string('image')->nullable();

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
