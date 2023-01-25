<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\Book;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = new Booking;
        $booking_type = $booking->booking_type;
        $booking_shift = $booking->booking_shift;

        $vehicles = Vehicle::get()->pluck('vehicle_name', 'id')->all();

        return view('booking.create', ['vehicles'=>$vehicles,'booking_type'=>$booking_type,'booking_shift'=>$booking_shift]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $rules_ary = [
            'customer_name' => 'required',
            'email' =>'required|email',
            'phone' =>'required',
            'vehicle_id' =>'required',
            'booking_type'=>'required',
            'booking_date'=>[
                'required',
                new Book(['booking_type'=>$request->booking_type,'booking_shift'=>$request->booking_shift])
            ],
            'booking_shift' => Rule::requiredIf($request->booking_type== 'half-day')
        ];
        $v = Validator::make($request->all(), $rules_ary);

        $v->validate();

        $data = $request->except(['_token']);
        $data['booking_date'] = date('Y-m-d',strtotime($data['booking_date']));
        Booking::create($data);


        return redirect()->route('book-vehicle')->with('success', 'Booking has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
