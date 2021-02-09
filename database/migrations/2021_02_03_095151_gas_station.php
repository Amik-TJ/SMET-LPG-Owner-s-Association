<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GasStation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gas_station', function (Blueprint $table) {
            $table->integer('station_id')->autoIncrement();
            $table->integer('owner_id');
            $table->string('station_name');
            $table->string('station_email');
            $table->string('station_address')->nullable();
            $table->string('station_phone')->nullable();
            $table->string('contact_person_name');
            $table->string('contact_person_phone');
            $table->string('division');
            $table->timestamp('starting_date')->nullable();
            $table->string('has_workshop'); // Has workshop or not
            $table->string('product_type'); // GAS or LPG or OIL
            $table->string('station_status');
            $table->string('verified')->default('0');
            $table->integer('archived')->default('0');
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
        //
    }
}
