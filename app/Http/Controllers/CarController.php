<?php

namespace App\Http\Controllers;

use App\Http\Resources\Car as CarResource;
use Illuminate\Http\Request;
use App\{Car,Agency,Type};

class CarController extends Controller
{

    public function filterCar(Request $request)
    {
        $cars = Car::filter($request->all())->get();
       /* if($request->has('city_id'))
        {
            $c = $request->input('city_id');
            $cars = Car::whereHas('agency.city', function($q) use ($c)
            {
                return $q->where('id', $c);
            })->get();
        }*/
        return view('car-search',compact('cars'));   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('agency')->whereHas('agency', function ($query)
            {
                $query->where('isAproves',1)
                ->where('status',1);  
            })->paginate(12);
        $types = Type::all();

        return view('cars',compact('cars','types'));
    }

    public function indexThird()
    {
        return new CarResource(Car::find(3));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $car = Car::where('slug',$slug)->firstOrFail();

        $sameAgencyCar = Car::where(
                            'agency_id',$car->agency_id
                            )->where('id','<>',$car->id)
                            ->get();

        return view('car-details',compact('car','sameAgencyCar'));
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
