<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ManageStationOwnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


// View All Station Owners From Admin Panel

    public function view_unverified_station_owners()
    {
        $owners = User::where('role', 4)
                    ->where('verified', 0)
                    ->get();

        $data = array(
            'found' => false,
        );


        if ($owners->isEmpty())
            return view('admin.unverified_station_owners')->with('data', $data);
        else {
            $data = array(
                'found' => true,
                'data' => $owners,
            );
            return view('admin.unverified_station_owners')->with('data', $data);
        }
    }


    public function view_verified_station_owners()
    {
        $owners = User::where('role', 4)
            ->where('verified', 1)
            ->get();

        $data = array(
            'found' => false,
        );


        if ($owners->isEmpty())
            return view('admin.verified_station_owners')->with('data', $data);
        else {
            $data = array(
                'found' => true,
                'data' => $owners,
            );
            return view('admin.verified_station_owners')->with('data', $data);
        }
    }



    public function verify_station_owner(Request $request)
    {
        $owner_id = $request->input('owner_id');


        $owner = User::find($owner_id);
        $owner->verified = 1;
        $owner->save();


        return redirect('/view_unverified_station_owners')->with('success','Owner - '.$owner->name.' Verified Successfully');
    }



    public function delete_station_owner(Request $request)
    {
        $owner_id = $request->input('owner_id');


        $owner = User::where('id',$owner_id)->delete();

        return redirect('/view_verified_station_owners')->with('success','Owner - ID no :'.$owner_id.' Deleted Successfully');
    }


    // Visit Page to register
    public function add_new_station_owner()
    {
        return view('admin.register_new_owner');
    }

    public function register_new_station_owner(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'phone' => ['required','string', 'max:12', 'unique:users'],
            'address' => ['string'],
        ]);


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->photo_url = null;
        $user->role = 4;
        $user->verified = 0;
        $user->save();


        return redirect('/add_new_station_owner')->with('success','Owner : '.$user->name.' Registered Successfully');
    }
}
