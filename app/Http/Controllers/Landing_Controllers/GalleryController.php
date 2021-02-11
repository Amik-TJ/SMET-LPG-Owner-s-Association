<?php

namespace App\Http\Controllers\Landing_Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function view_gallery()
    {
        return view('landing_page.gallery');
    }
}
