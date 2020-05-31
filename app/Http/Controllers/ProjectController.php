<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Requeste;
use Auth;
use Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('project',compact('projects'));
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
            $requeste = new Requeste();
            $requeste->title = $request->input('title');
            $requeste->description = $request->input('description');
            $requeste->phone = $request->input('phone');
            $requeste->city_id = $request->input('city_id');
            $requeste->user_id = Auth::id();
            $requeste->email = Auth::user()->email;
            $requeste->save();

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
