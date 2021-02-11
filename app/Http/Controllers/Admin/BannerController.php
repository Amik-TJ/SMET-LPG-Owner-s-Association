<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public  function index()
    {
        $banners = Banner::orderBy('banner_id')->get();


        if($banners->isEmpty())
        {
            $data = array(
                'found' => false
            );
            return view('admin.banner')->with('data',$data);
        }


        $data = array(
            'found' => true,
            'data' => $banners
        );
        return view('admin.banner')->with('data',$data);
    }



    public function delete_banner(Request $request)
    {
        $banner_id = $request->input('banner_id');
        $banner_url = Banner::find($banner_id);
        $banner_url = $banner_url->img_url;


        $response = unlink(storage_path('app/public/'.$banner_url));


        if(!$response)
            return redirect('/view_banners')->with('error','Banner Cannot Deleted Successfully');


        // Deleting Information from Database
        DB::table('banners')->where('banner_id',$banner_id)->delete();
        return redirect('/view_banners')->with('success','Banner no : '.$banner_id.' Deleted Successfully');
    }


    public function create_new_banner(Request $request)
    {



        $banner_title = $request->input('banner_title');
        $banner_row = $request->input('banner_row');  // 1 for Association Member Logo

        // Getting number of available Sub Fields in DataBase
        $count = DB::table('banners')->count();
        if($count<1)
            $banner_no = 0;
        else
            $banner_no = DB::table('banners')->max('banner_id');
        $banner_no++;




        // image Storing Tasks
        if ($request->hasFile('banner_image')) {

            if ($request->file('banner_image')->isValid()) {


                $validated = $request->validate([
                    'banner_image' => 'mimes:jpeg,png,jpg|max:5120',
                ]);


                $extension = $request->banner_image->extension();
                $banner_image = 'banner_'.$banner_no.'.'.$extension;


                $url = '/Landing_Page/banner/';



                if (!file_exists(storage_path().'/app/public/Landing_Page/banner/')) {
                    mkdir(storage_path().'/app/public/Landing_Page/banner/', 666, true);
                }

                $image = $request->file('banner_image');
                $storing_location = storage_path().'/app/public/Landing_Page/banner/'.$banner_image;
                $image_resize = Image::make($image->getRealPath());
                $a = $image_resize->resize(280, 140);
                $image_resize->save($storing_location);



                $url1 = $url.$banner_image;



                $banner = new Banner();
                $banner->banner_id = $banner_no;
                $banner->banner_title = $banner_title;
                $banner->banner_row = $banner_row;
                $banner->img_url = $url1;
                $banner->save();

                return redirect('/view_banners')->with('success','New Banner Created Successfully');
            }
        }
        abort(500, 'Could not upload image :(');
    }

}
