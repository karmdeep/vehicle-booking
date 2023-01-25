<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking_data';

    protected $primaryKey = 'id';

    public $booking_type = ['full-day'=>'Full Day','half-day'=>'Half Day'];

    public $booking_shift = ['morning'=>'Morning','evening'=>'Evening'];

    protected $fillable = [
        'customer_name','email', 'phone','vehicle_id','booking_type','booking_date','booking_shift'
    ];

    public $timestamps = false;
}
