<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'payments';
    // Primary Key
    public $primaryKey = 'payment_id';
    public $timestamps = true;


    protected $fillable = [
        'payment_id',
        'station_id',
        'option_id',
        'tx_id',
        'amount',
        'payment_status',
        'payment_note',
        'created_at',
        'updated_at',
    ];
}
