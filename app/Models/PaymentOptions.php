<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOptions extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'payment_options';
    // Primary Key
    public $primaryKey = 'option_id';
    public $timestamps = true;
}
