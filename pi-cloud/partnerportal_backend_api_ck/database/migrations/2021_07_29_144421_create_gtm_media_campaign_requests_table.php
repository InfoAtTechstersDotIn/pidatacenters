<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGtmMediaCampaignRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtm_media_campaign_requests', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('gmt_prod_services');
            $table->string('gmt_prod_services_others')->nullable();
            $table->float('estimated_event_cost', 15, 2);
            $table->string('budget_plan_doc_path')->nullable();
            $table->text('objective');
            $table->text('target_market');
            $table->text('partner_ownership');
            $table->text('existing_sponsors');
            $table->text('sponsor_deliverables');
            $table->text('pi_deliverables');
            $table->float('fund_requested', 15, 2)->nullable();
            $table->text('comments');
            $table->string('executive_name');
            $table->string('executive_email');
            $table->string('executive_mobile_code')->nullable();
            $table->string('executive_mobile_no');
            $table->string('executive_desig');
            $table->string('marteking_cname');
            $table->string('marteking_cemail');
            $table->string('marteking_cmobile_code')->nullable();
            $table->string('marteking_cmobile_no');
            $table->text('success_parameters');
            $table->text('success_metrics');
            $table->text('media_house_online');
            $table->text('media_house_offline');
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
        Schema::dropIfExists('gtm_media_campaign_requests');
    }
}
