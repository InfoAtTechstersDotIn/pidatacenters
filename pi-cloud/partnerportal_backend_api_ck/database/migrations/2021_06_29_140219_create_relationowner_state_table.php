<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationownerStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationowner_state', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('relationowner_id')->unsigned()->index();
            $table->bigInteger('state_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign("relationowner_id")->references('id')->on('relationowners');
            $table->foreign("state_id")->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationowner_state');
    }
}
