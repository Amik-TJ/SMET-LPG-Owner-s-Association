<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'banners';
    // Primary Key
    public $primaryKey = 'banner_id';
    public $timestamps = true;
}
