<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->uuid('m_id');
            $table->primary('m_id');
            $table->string('m_name',50);
            $table->text('m_desc');
            $table->string('m_genre',40);
            $table->integer('m_year');
            $table->string('m_age',5);
            $table->float('m_rate');
            $table->float('m_runtime');
            $table->string('m_youtube',100)->nullable();
            $table->string('m_type',15);
            $table->string('m_format',10);
            $table->string('m_poster');
            $table->string('m_backdrop');
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
        Schema::dropIfExists('movies');
    }
}
