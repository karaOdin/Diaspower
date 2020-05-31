<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{City,House,User,RentalAgncy,HouseReservation};
use DateTime;
use Auth;
use DB;
use Validator;

class HouseReservationController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), array(
         'pickupDate'=>'required|date|after:tomorrow',
         'returnDate' =>'required|date|after:pickupDate',
         
        ));

        $pickup = $request->input('pickupDate');
        $return = $request->input('returnDate');
        $datetime1 = new DateTime($pickup);
        $datetime2 = new DateTime($return);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if($validator->fails()) {
                $notification = array(
                                    'message' =>'your reservation wasnt added please fi the errors' ,
                                    'alert-type' =>'error' 
                                 );
                
            return Redirect()->back()->withErrors($validator)->with($notification);
        }
        else{
            $reservation = new HouseReservation();
            $reservation->user_id = Auth::user()->id;
            $reservation->house_id = $request->input('house_id');
            $reservation->city_id = $request->input('city_id');
            $reservation->rental_agncy_id = $request->input('rental_agncy_id');
            $reservation->pickupDate = $request->input('pickupDate');
            $reservation->returnDate = $request->input('returnDate');
            $reservation->price = $request->input('pricePerDay') * $days;
            $reservation->save();
            $notification = array(
                                'message' =>'your reservation  added successefully' ,
                                'alert-type' =>'success' 
                                );
            return redirect()->back()->with($notification);
        }
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
