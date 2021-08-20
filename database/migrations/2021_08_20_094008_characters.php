<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Characters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('Characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('publication_year');
            $table->string('author_id');
            $table->string('graphicNovels_id');
            $table->string('designer');
            $table->timestamps();
            $table->foreign('graphicNovels_id')
            ->references('id')
            ->on('categories')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
    }
}
