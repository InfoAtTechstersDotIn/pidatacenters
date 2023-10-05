<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnertechinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnertechinfos', function (Blueprint $table) {
            $table->id();
            $table->string('partner_ref_no')->unique();
            $table->text('use_case_expertise');
            $table->text('use_case_expertise_other')->nullable();
            $table->text('technology_expertise');
            $table->text('technology_expertise_other')->nullable();
            $table->text('professional_services_offered_other')->nullable();
            $table->text('professional_services_offered');
            $table->text('interested_ser_prod_at_pi');
            $table->text('interested_ser_prod_at_pi_other')->nullable();
            $table->text('busi_case_brief');
            $table->text('partner_type')->nullable();
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
        Schema::dropIfExists('partnertechinfos');
    }
}
