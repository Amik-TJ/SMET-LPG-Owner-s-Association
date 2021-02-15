<?php

namespace App\Http\Controllers\Common_Controllers;

use App\Http\Controllers\Controller;
use App\Models\GasStation;
use App\Models\PaymentOptions;
use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function view_payment_page(Request $request)
    {
        $station_id = $request->input('station_id');

        $payment_options = PaymentOptions::all();

        $data = array(
            'po' => $payment_options,
            'station_id' => $station_id
        );
        return view('common_views.make_payment')->with('data',$data);
    }



    public function make_payment_from_user(Request $request)
    {
        $station_id = $request->input('station_id');
        $payment_option = $request->input('payment_option');
        $tx_id = $request->input('tx_id');
        $amount = $request->input('amount');
        $payment_msg = 'Payment Done';





        $payment = new Payments();
        $payment->station_id = $station_id;
        $payment->option_id = $payment_option;
        $payment->tx_id = $tx_id;
        $payment->amount = $amount;
        $payment->payment_status = $payment_msg;
        $payment->save();



        // Updating data in Gas Station Table
        $station = GasStation::find($station_id);
        $station->payment_id = $payment->payment_id;
        $station->save();
        return redirect('/individual_station')->with('success','Payment Done for Station ID : '.$station_id.'! Please Wait for Admin Verification');


    }


    public function view_payment_verification_page(Request $request)
    {
        $station_id = $request->input('station_id');
        $station = GasStation::findorfail($station_id);
        $payment_id = $station->payment_id;
        $payment = Payments::findorfail($payment_id);



        $data = array(
            'station_id' => $station_id,
            'payment' => $payment
        );
        return view('admin.verify_payment')->with('data',$data);
    }


    public function verify_payment_from_admin(Request $request)
    {
        $station_id = $request->input('station_id');
        $payment_id = $request->input('payment_id');
        $note = $request->input('note');



        // Inserting Data into Payment Table
        $payments = Payments::findorfail($payment_id);
        $payments->payment_status = 'Payment Verified';
        $payments->payment_note = $note;
        $payments->save();


        // Updating Verification Status in Gas Station Table
        $station = GasStation::findorfail($station_id);
        $station->verified = 1;
        $station->save();

        return redirect('/view_unverified_stations')->with('success','Payment Verified for Station no : '.$station_id.' || Membership ID : '.$station->membership_id);
    }



    public function view_make_payment_from_admin(Request $request)
    {
        $station_id = $request->input('station_id');

        $payment_options = PaymentOptions::all();

        $data = array(
            'po' => $payment_options,
            'station_id' => $station_id
        );
        return view('admin.make_payment_from_admin')->with('data',$data);
    }


    public function make_and_verify_payment_from_admin(Request $request)
    {
        $station_id = $request->input('station_id');
        $payment_option = $request->input('payment_option');
        $tx_id = $request->input('tx_id');
        $amount = $request->input('amount');
        $note = $request->input('note');
        $payment_msg = 'Payment Verified';





        $payment = new Payments();
        $payment->station_id = $station_id;
        $payment->option_id = $payment_option;
        $payment->tx_id = $tx_id;
        $payment->amount = $amount;
        $payment->payment_status = $payment_msg;
        $payment->payment_note = $note;
        $payment->save();



        // Updating data in Gas Station Table
        $station = GasStation::find($station_id);
        $station->payment_id = $payment->payment_id;
        $station->verified = 1;
        $station->save();
        return redirect('/view_unverified_stations')->with('success','Payment Verified for Station no : '.$station_id.' || Membership ID : '.$station->membership_id);
    }
}
