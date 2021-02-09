<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Role extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_name');
            $table->timestamps();
        });

        DB::table('role')->insert(
            array(
                [
                    'role_id' => 1,
                    'role_name' => 'admin_1',
                ],
                [
                    'role_id' => 2,
                    'role_name' => 'admin_2',
                ],
                [
                    'role_id' => 3,
                    'role_name' => 'admin_3',
                ],
                [
                    'role_id' => 4,
                    'role_name' => 'station_owner',
                ]
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
