<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Car;
use App\User;
use DateTime;
use Auth;
use DB;
use Validator;
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
         $validator =  Validator::make($request->all(), array(
         'pickupDate'=>'required|date|after:tomorrow',
         'returnDate' =>'required|date|after:pickupDate',
         
        ));


         $reservationCheck = Reservation::where('car_id',$request->input('car_id'))
                                        ->where('user_id',Auth::user()->id)
                                        ->where('isCompleted','=','0')
                                        ->first();

         //reservation start

        $pickup = $request->input('pickupDate');
        $return = $request->input('returnDate');
        $datetime1 = new DateTime($pickup);
        $datetime2 = new DateTime($return);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');



        if ($reservationCheck) {
            $notification = array('message' => 'You are already reserved this car',
                                   'alert-type' => 'error' 
                                 );
                 return redirect()->back()->with($notification);
        }
        else{
             if($validator->fails()) {
                $notification = array(
                                    'message' =>'your reservation wasnt added please fi the errors' ,
                                    'alert-type' =>'error' 
                                 );
                
                return Redirect()->back()->withErrors($validator)->with($notification);
            }
            else{
                $reservation = new Reservation();
                $reservation->user_id = Auth::user()->id;
                $reservation->car_id = $request->input('car_id');
                $reservation->city_id = $request->input('city_id');
                $reservation->agency_id = $request->input('agency_id');
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
         $notification =  array(
                            'message' => 'Your reservation has been deleted succefully' ,
                            'alert-type' => 'success' 
                        );
        return redirect()->back()->with($notification);
    }
}
