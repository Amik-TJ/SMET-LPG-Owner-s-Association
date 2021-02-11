<?php

namespace App\Http\Controllers\Landing_Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class landing_view_members extends Controller
{
    public function landing_view_members()
    {
        $members = User::where('role',4)->where('verified',1)->get();

        $members_count = $members->count();

        $data = array(
            'found' => false,
        );


        if($members->isEmpty())
        {
            return view('landing_page.view_all_members')->with('data',$data);
        }else{
            $data = array(
                'found' => true,
                'members_count' => $members_count,
                'data' => $members,
            );

            return view('landing_page.view_all_members')->with('data',$data);
        }
    }
}
