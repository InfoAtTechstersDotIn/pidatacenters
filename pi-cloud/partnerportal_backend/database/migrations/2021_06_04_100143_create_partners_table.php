<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('partner_ref_no')->unique();
            $table->string('business_email')->unique();
            $table->string('password');
            $table->string('mobile_code');
            $table->string('mobile_number');
            $table->tinyInteger('is_verified')->default(0);
            $table->string('status')->default('pending');
            $table->string('login_role')->default('partner_admin'); /*This field can be removed*/
            $table->string('user_type')->default('partner_admin'); /* Use the Config constant here*/
            $table->string('email')->unique();
	    $table->string('rejection_comment')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
