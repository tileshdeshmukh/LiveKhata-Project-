<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceBillDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_bill_data', function (Blueprint $table) {
            $table->id();
            $table->integer('service_bill_id');
            $table->integer('cmp_id');
            $table->string('itme')->nullable();
            $table->string('description')->nullable();
            $table->integer('quntity');
            $table->integer('rate');
            $table->integer('gross');
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
        Schema::dropIfExists('service_bill_data');
    }
}
