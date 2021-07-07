<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_tree', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('type_account');
            $table->string('address1');
            $table->string('city');
            $table->integer('Adhar_No');
            $table->integer('pin');
            $table->integer('count_person');
            $table->integer('tel_no');
            $table->integer('mobile_no');
            $table->string('email');
            $table->string('stateName');
            $table->integer('stateCode');
            $table->integer('GSTIN');
            $table->string('business_type');
            $table->integer('pan');
            $table->string('gst_party_type');
            $table->string('acc_head_type');
            $table->string('gst_reg_type');
            $table->string('Eligible_ITC');
            $table->string('invoice_type');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->integer('bank_account_no');
            $table->string('ISFC_code');
            $table->string('swift_code');
            $table->string('TCS');
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
        Schema::dropIfExists('account_tree');
    }
}
