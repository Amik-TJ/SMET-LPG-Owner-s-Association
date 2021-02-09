<?php

namespace App\Http\Controllers\Common_Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\GasStation;
use App\Models\Images;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GasStationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('common_views.dashboard');
    }



    public function individual_station(Request $request)
    {
        $owner_id = auth()->user()->id;

        $stations = GasStation::where('owner_id',$owner_id)->get();
        $data = array(
            'found' => false,
        );


        if($stations->isEmpty())
            return view('users.user_gas_station')->with('data',$data);
        else
        {
            $data = array(
                'found' => true,
                'data' => $stations,
            );
            return view('users.user_gas_station')->with('data',$data);
        }
    }



    // Add New Station
    public function add_new_station (Request $request)
    {



        $request->validate([
            'photo' => 'mimes:pdf,jpg,png,jpeg',
            'tin' => 'mimes:pdf,jpg,png,jpeg',
            'nid' => 'mimes:pdf,jpg,png,jpeg',
            'license_copy' => 'mimes:pdf,jpg,png,jpeg',
            'owner_id' => 'required',
            'station_name' => 'required',
            'division' => 'required',
            'station_status' => 'required',
            'has_workshop' => 'required',
        ]);

        $owner_id = $request->input('owner_id');
        $station_name = $request->input('station_name');
        $station_email = $request->input('station_email');
        $station_phone = $request->input('station_phone');
        $station_address = $request->input('station_address');
        $contact_person_name = $request->input('contact_person_name');
        $contact_person_phone = $request->input('contact_person_phone');
        $division = $request->input('division');
        $starting_date = $request->input('starting_date');
        $has_workshop = $request->input('has_workshop');
        $product_type = $request->input('product_type');
        $station_status = $request->input('station_status');
        $verified = 0;
        $from = $request->input('from');
        $returning_url = Helper::get_returning_url($from);





        // Getting Station ID for new Station
        $station_no = GasStation::count();
        if($station_no < 1)
            $station_id = 1;
        else
            $station_id = GasStation::max('station_id') + 1;


        // Creating Station
        $station = new GasStation();
        $station->owner_id = $owner_id;
        $station->station_id = $station_id;
        $station->station_name = $station_name;
        $station->station_email = $station_email;
        $station->station_address = $station_address;
        $station->station_phone = $station_phone;
        $station->contact_person_name = $contact_person_name;
        $station->contact_person_phone = $contact_person_phone;
        $station->division = $division;
        $station->starting_date = $starting_date;
        $station->has_workshop = $has_workshop;
        $station->product_type = $product_type;
        $station->station_status = $station_status;
        $station->verified = $verified;
        $station->created_at = now();
        $station->save();




        // Storing Location
        $storing_location = '/Uploaded_File/Owner_'.$owner_id.'/Station_Data/'.$station_id.'/';



        if ($request->hasFile('tin')) {
            $tin = $request->file('tin');
            $tin_response = Helper::station_file_upload($tin,$owner_id,$station_id,$storing_location,'TIN');
            if(!$tin_response['done'])
                return redirect($returning_url)->with('error','TIN Certificate Cannot be Uploaded Successfully');
            $res_tin = Helper::insert_into_image_table($station_id,'gas_station',$tin_response['url'],'TIN',1);
        }

        if ($request->hasFile('nid')) {
            $nid = $request->file('nid');
            $nid_response = Helper::station_file_upload($nid,$owner_id,$station_id,$storing_location,'NID');
            if(!$nid_response['done'])
                return redirect($returning_url)->with('error','NID Cannot be Uploaded Successfully');
            $res_nid = Helper::insert_into_image_table($station_id,'gas_station',$nid_response['url'],'NID',1);
        }

        if ($request->hasFile('license_copy')) {
            $license_copy = $request->file('license_copy');
            $license_copy_response = Helper::station_file_upload($license_copy,$owner_id,$station_id,$storing_location,'Explosive_Licence_Copy');
            if(!$license_copy_response['done'])
                return redirect($returning_url)->with('error','Explosive Licence Copy Certificate Cannot be Uploaded Successfully');
            $res_license_copy_response = Helper::insert_into_image_table($station_id,'gas_station',$license_copy_response['url'],'Explosive_Licence_Copy',1);
        }



        return redirect($returning_url)->with('success','Station '.$station_name.' Added Successfully');
    }



    public function view_unverified_stations()
    {

        $unverified_stations = DB::table('gas_station as g')
                                    ->where('g.verified',0)
                                    ->where('g.archived',0)
                                    ->join('users as u','u.id', '=', 'g.owner_id')
                                    ->get();

        $data = array(
            'found' =>false
        );

        if($unverified_stations->isEmpty())
            return view('admin.unverified_stations')->with('data',$data);
        else{
            $data = array(
                'found' =>true,
                'data' => $unverified_stations
            );
            return view('admin.unverified_stations')->with('data',$data);
        }
    }



    public function view_verified_stations()
    {

        $verified_stations = DB::table('gas_station as g')
            ->where('g.verified',1)
            ->where('g.archived',0)
            ->join('users as u','u.id', '=', 'g.owner_id')
            ->get();


        $data = array(
            'found' =>false
        );

        if($verified_stations->isEmpty())
            return view('admin.verified_stations')->with('data',$data);
        else{
            $data = array(
                'found' =>true,
                'data' => $verified_stations
            );
            return view('admin.verified_stations')->with('data',$data);
        }
    }


    public function verify_station(Request $request)
    {
        $station_id = $request->input('station_id');
        $station = GasStation::find($station_id);
        $station->verified = 1;
        $station->save();

        return redirect('/view_unverified_stations')->with('success','Station Name : '.$station->station_name.' ID : '.$station_id.' verified successfully');

    }

    public function view_station_documents(Request $request)
    {
        $station_id = $request->input('station_id');
        $station = GasStation::where('station_id',$station_id)->first();

        $documents = Images::where(
                                    [
                                        ['model_id','=',$station_id],
                                        ['model_type','=','gas_station']
                                    ]
                                    )
                                    ->get();


        $data = array(
            'found' =>false,
            'station' => $station
        );



        if($documents->isEmpty())
            return view('common.view_station_documents')->with('data',$data);
        else{
            $doc = array(
                'tin' => null,
                'nid' => null,
                'license_copy' => null,
            );
            foreach ($documents as $d)
            {
                if($d->type == 'TIN')
                    $doc['tin'] = $d;
                elseif ($d->type == 'NID')
                    $doc['nid'] = $d;
                elseif ($d->type == 'Explosive_Licence_Copy')
                    $doc['license_copy'] = $d;
            }

            $data = array(
                'found' =>true,
                'station' => $station,
                'data' => $doc
            );
            return view('admin.view_station_documents')->with('data',$data);
        }
    }


    public function delete_station(Request $request)
    {
        $station_id = $request->input('station_id');
        $from = $request->input('from');
        if($from == 'vs')
            $returning_url = '/view_verified_stations';
        elseif($from == 'us')
            $returning_url = '/view_unverified_stations';
        else
            $returning_url = '/';


        $station = GasStation::find($station_id);
        $station->archived = 1;
        $station->save();

        return redirect($returning_url)->with('success','Station No : '.$station_id.' Successfully Deleted');
    }

}
