<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyDetailsController extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('cmpusers', function (Blueprint $table){
            $table->id();
            $table->string('cpmname');
            $table->text('cmplogo');
            $table->string('cmpowner');
            $table->string('cmpaddress');
            $table->string('cmpregistrationdetails');
            $table->string('cmpregistermobile');
            $table->string('bankname');
            $table->string('ownerpan');
            $table->string('cmpgstn');
            $table->string('cmpauthlic');
            $table->string('branchname');
            $table->integer('bank_account_no');
            $table->string('IFSC');
            $table->string('subject');

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
        Schema::dropIfExists('cmpusers');
    }
}
