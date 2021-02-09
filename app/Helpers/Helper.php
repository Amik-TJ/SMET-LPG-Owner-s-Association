<?php
namespace App\Helpers;

use App\Models\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class Helper
{
    public static function station_file_upload($file,$user_id,$station_id,$storing_location,$document_type)
    {
        if ($file->isValid()) {
            // File Name for Storing in DB
            $file_name_with_ex = $file->getClientOriginalName();
            $file_name_without_ex = pathinfo($file_name_with_ex, PATHINFO_FILENAME);


            // Extension
            $extension = $file->extension();


            // Preparing Storing Information
            // Userid_stationid_filename
            $file_name_server = $user_id.'_'.$station_id.'_'.$document_type.'.'.$extension;




            // Storing File
            $path = $file->storeAs($storing_location, $file_name_server,'public');
            if ($path != null)
            {
                $response = array(
                    'done' => true,
                    'url' => $storing_location.$file_name_server,
                );
                return $response;
            }else
            {
                $response = array(
                    'done' => false,
                );
                return $response;
            }
        }else{
            $response = array(
                'done' => false,
            );
            return $response;
        }
    }



    public static function get_returning_url($from)
    {
        if($from == 'vso')     // from verified station owner page || Admin
            return "/view_verified_station_owners";
        elseif ($from == 'uso') // from unverified station owner page || Admin
            return "/view_unverified_station_owners";
        elseif ($from == 'usr') // from station owner page || User
            return "/individual_station";
        else return "/";
    }

    public static function insert_into_image_table($station_id,$model,$url,$type,$status)
    {
        // Inserting Data into Image Table
        $image = new Images();
        $image->model_id = $station_id;
        $image->model_type = $model;
        $image->url = $url;
        $image->type = $type;
        $image->status = $status;
        $image->created_at = now();
        $image->save();

        return 1;
    }

}
