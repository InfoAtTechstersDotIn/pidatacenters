<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePipelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipelines', function (Blueprint $table) {
            $table->id();
            $table->string('potential_id');
            $table->string('rbp_name');
            $table->bigInteger('rbp_state')->unsigned();
            $table->string('sales_owner');
            $table->bigInteger('customer_state')->unsigned();
            $table->string('customer_name');
            $table->string('customer_email_id');
            $table->string('business_industry');
            $table->string('account_type');
            $table->bigInteger('sbunits_id')->unsigned();
            $table->bigInteger('sbu_product_id')->unsigned();
            $table->text('opportunity_details')->nullable();
            $table->string('stage');
            $table->string('rating_id'); //hot/warm/cold/win/passive/lost/dropped
            $table->integer('mrc');
            $table->integer('otc');
            $table->integer('arc');
            $table->float('acv');
            $table->float('tcv');
            $table->integer('contract_period'); //this is in months
            $table->string('payment_terms'); 
            $table->date('opportunity_date');
            $table->date('proposal_date');
            $table->date('closing_date');
            $table->string('customer_type');
            $table->string('commission_type');
            $table->float('projected_commission');
            $table->string('customer_website');
	    $table->text('opportunity_docs')->nullable();
            $table->string('status')->nullable();
	    $table->string('rejection_comment')->nullable(); 
            $table->timestamp('status_date')->nullable();


            $table->bigInteger('partner_id')->unsigned();
            $table->timestamps();

            $table->foreign("partner_id")->references('id')->on('partners');
            $table->foreign('rbp_state')->references('id')->on('states');
            $table->foreign('customer_state')->references('id')->on('states');
            $table->foreign('sbunits_id')->references('id')->on('sbunits');
            $table->foreign('sbu_product_id')->references('id')->on('sbuproducts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pipelines');
    }
}
