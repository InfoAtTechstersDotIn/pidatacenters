<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerpersonalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerpersonalinfos', function (Blueprint $table) {
            $table->id();
            $table->string('partner_ref_no')->unique();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->string('business_email');
            $table->string('mobile_code');
            $table->string('mobile_number');
            $table->bigInteger('partner_id')->unsigned();
            $table->timestamps();

            $table->foreign("partner_id")->references('id')->on('partners');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partnerpersonalinfos');
    }
}
