<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'images';
    // Primary Key
    public $primaryKey = 'img_id';
    public $timestamps = true;
    protected $fillable = [
        'img_id',
        'model_id',
        'model_type',
        'url',
        'type',
        'status',
        'created_at',
        'updated_at',
    ];


    /*public function model()
    {
        return $this->morphTo();
    }*/

    public function gas_station() {
        return $this->belongsTo('App\Models\GasStation', 'model_id', 'img_id');
    }
}
