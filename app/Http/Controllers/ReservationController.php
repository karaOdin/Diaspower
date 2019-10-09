<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use DateTime;
use Auth;
use DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::where('user_id',Auth::user()->id)->get();

       

        return view('reservations',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pickup = $request->input('pickupDate');
        $return = $request->input('returnDate');
        $datetime1 = new DateTime($pickup);
        $datetime2 = new DateTime($return);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');


        $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->car_id = $request->input('car_id');
        $reservation->city_id = $request->input('city_id');
        $reservation->agency_id = $request->input('agency_id');
        $reservation->pickupDate = $request->input('pickupDate');
        $reservation->returnDate = $request->input('returnDate');
        $reservation->price = $request->input('pricePerDay') * $days;
        $reservation->save();

        return redirect()->back();

       

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
        DB::table('reservations')->where('id', $id)->delete();

        return redirect()->back();
    }
}
