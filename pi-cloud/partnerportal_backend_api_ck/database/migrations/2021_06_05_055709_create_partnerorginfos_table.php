<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerorginfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnerorginfos', function (Blueprint $table) {
            $table->id();
            $table->string('partner_ref_no')->unique();
            $table->string('comp_name');
            $table->string('comp_website');
            $table->string('comp_hq');
            $table->string('comp_desc');
            $table->string('comp_size');
            $table->string('industry');
            $table->string('annual_revenue');
            $table->string('lob');
            $table->string('city')->nullable();
            $table->string('ro_name')->nullable();
            $table->string('rh_name')->nullable();
            $table->string('state');
            $table->string('country');
            $table->string('pincode');
            $table->string('loc_o_b');
            $table->string('client_base')->nullable();
            $table->string('client_base_other');
            $table->string('partnership_model');
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
        Schema::dropIfExists('partnerorginfos');
    }
}
