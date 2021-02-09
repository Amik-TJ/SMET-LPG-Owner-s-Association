<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GasStation extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'gas_station';
    // Primary Key
    public $primaryKey = 'station_id';
    public $timestamps = true;
    protected $fillable = [
        'station_id',
        'owner_id',
        'station_name',
        'station_email',
        'station_address',
        'station_phone',
        'contact_person_name',
        'contact_person_phone',
        'division',
        'starting_date',
        'has_workshop',
        'product_type',
        'station_status',
        'verified',
        'created_at',
        'updated_at'
    ];



    public function images() {
        return $this->hasMany('App\Models\Images', 'model_id');
    }
    /*public function images()
    {
        return $this->morphMany('App\Models\Images', 'model');
    }*/
}
