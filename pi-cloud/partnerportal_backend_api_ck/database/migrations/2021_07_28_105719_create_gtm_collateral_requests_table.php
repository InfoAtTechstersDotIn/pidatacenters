<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGtmCollateralRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtm_collateral_requests', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('collateral_name');
            $table->string('gmt_prod_services');
            $table->string('gmt_prod_services_others')->nullable();
            $table->string('collateral_type');
            $table->text('objective');
            $table->text('target_audience');
            //$table->string('budget_plan_doc_path')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('status_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('rejection_comment')->nullable();
            $table->bigInteger('partner_id')->unsigned();
            $table->tinyInteger("is_active")->default(1);
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
        Schema::dropIfExists('gtm_collateral_requests');
    }
}
