<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('photo_url')->default(null)->nullable();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('role')->default('s_owner');
            $table->string('verified')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });



        DB::table('users')->insert(
            array(
                [
                    'name' => 'Fahad Rahman Amik',
                    'email' => 'admin@gmail.com',
                    'phone' => '01685290796',
                    'password' => '1234',
                    'address' => 'Smet Services, Pallabi, Dhaka',
                    'role' => 1,
                    'verified' => 1,
                ],
                [
                    'name' => 'User 1',
                    'email' => 'u1@gmail.com',
                    'phone' => '01685290797',
                    'password' => '1234',
                    'address' => 'Smet Services, Pallabi, Dhaka',
                    'role' => 4,
                    'verified' => 1,
                ],
                [
                    'name' => 'User 2',
                    'email' => 'u2@gmail.com',
                    'phone' => '01685290798',
                    'password' => '1234',
                    'address' => 'Smet Services, Pallabi, Dhaka',
                    'role' => 4,
                    'verified' => 1,
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
        Schema::dropIfExists('users');
    }
}
