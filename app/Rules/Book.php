<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
use App\Models\Booking;

class Book implements Rule
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->data['booking_type']=='full-day'){
            $c = Booking::where('booking_date',$value)->get()->count();
            return $c>0?false:true;
        }
        if($this->data['booking_type']=='half-day'){
            $c = Booking::where('booking_date',$value)->where('booking_shift',$this->data['booking_shift'])->get()->count();
            return $c>0?false:true;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string|array
     */
    public function message()
    {
        return __('Selected Date is already booked.');
    }
}
