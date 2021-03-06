<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notary;
use Auth;
use Validator;

class NotaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
         'title'=>'required',
         'description' =>'required',
         'phone'=>'required',

         
        ));

        if($validator->fails()) {
                $notification = array(
                                    'message' =>'your reservation wasnt added please fi the errors' ,
                                    'alert-type' =>'error' 
                                 );
                
                return Redirect()->back()->withErrors($validator)->with($notification);
        }
        else{
            $notary = new Notary();
            $notary->title = $request->input('title');
            $notary->description = $request->input('description');
            $notary->phone = $request->input('phone');
            $notary->city_id = $request->input('city_id');
            $notary->user_id = Auth::id();
            $notary->save();

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
