<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->string('membership_id')->nullable();
            $table->integer('payment_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->string('station_name')->nullable();
            $table->string('station_email')->nullable();
            $table->string('station_address')->nullable();
            $table->string('station_phone')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->string('division')->nullable();
            $table->timestamp('starting_date')->nullable();
            $table->string('has_workshop')->nullable(); // Has workshop or not
            $table->string('product_type')->nullable(); // GAS or LPG or OIL
            $table->string('station_status')->nullable();
            $table->integer('verified')->default('0');
            $table->integer('archived')->default('0');
            $table->timestamps();
        });


        DB::table('gas_station')->insert(
            array(
                [
                    'membership_id' => '21020001',
                    'owner_id' => '2',
                    'station_name' => 'SMET LPG 1',
                    'station_email' => 'lpg1@gmail.com',
                    'station_address' => 'Mirpur, Dhaka',
                    'starting_date' => now(),
                    'contact_person_name' => 'Mark',
                    'has_workshop' => '1',
                    'verified' => 0,
                    'created_at' => now(),
                    'station_status' => 'Up Coming',
                    'division' => 'Dhaka'
                ],
                [
                    'membership_id' => '21020002',
                    'owner_id' => '2',
                    'station_name' => 'SMET LPG 2',
                    'station_email' => 'lpg2@gmail.com',
                    'station_address' => 'America',
                    'starting_date' => now(),
                    'contact_person_name' => 'Barak Obama',
                    'has_workshop' => '0',
                    'verified' => 0,
                    'created_at' => now(),
                    'station_status' => 'Up Coming',
                    'division' => 'Dhaka'
                ],

            )

        );
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
