<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSbuproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbuproducts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sbunits_id')->unsigned();
            $table->string('prod_name');
            $table->timestamps();

            $table->foreign("sbunits_id")->references('id')->on('sbunits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sbuproducts');
    }
}
