<?php

namespace App\Http\Controllers\Landing_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageCommittee extends Controller
{

    public function view_central_committee()
    {
        return view('landing_page.central_committee');
    }


    public function view_zonal_committee()
    {
        return view('landing_page.zonal_committee');
    }


}
