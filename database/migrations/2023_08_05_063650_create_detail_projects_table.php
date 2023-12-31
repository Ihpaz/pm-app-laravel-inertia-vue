<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_projects', function (Blueprint $table) {
            $table->id();
            $table->integer('subproject_id')->unsigned();
            $table->integer('pic_id')->unsigned();
            $table->date("StartDate");
            $table->date("EndDate");
            $table->string("status");
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
        Schema::dropIfExists('detail_projects');
    }
}
