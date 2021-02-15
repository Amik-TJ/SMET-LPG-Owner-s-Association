<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePaymentOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_options', function (Blueprint $table) {
            $table->integer('option_id')->autoIncrement();
            $table->string('option_name');
            $table->text('logo_url');
            $table->text('instructions')->default(null);
            $table->timestamps();
        });


        DB::table('payment_options')->insert(
            array(
                [
                    'option_name' => 'Bkash',
                    'logo_url' => '/Assets/Payment_Options/bkash_logo.png',
                    'instructions' => 'Go to bKash Menu by dialing *247# Choose -Payment- option by pressing 3 || Enter our Merchant wallet number : 01685290796.',
                    'created_at' => now(),
                ],
                [
                    'option_name' => 'Rocket',
                    'logo_url' => '/Assets/Payment_Options/rocket_logo.png',
                    'instructions' => 'Customer can pay bills of various organizations using this payment option. To make a payment please follow the following instruction.To get this service from Dutch-Bangla Bank Rocket account you just need to dial *322# from any operator except citycell.Number :  01685290796.',
                    'created_at' => now(),
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
        Schema::dropIfExists('payment_options');
    }
}
