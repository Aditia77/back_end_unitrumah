<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerIdToUnitRumahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
            Schema::table('unit_rumahs', function (Blueprint $table) {
                $table->integer('customer_id')->unsigned();
                $table->foreign('customer_id')->references('id')->on('customer');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unit_rumahs', function (Blueprint $table) {
        
        });
    }
}
