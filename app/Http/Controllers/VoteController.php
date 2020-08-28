<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Polls;

class VoteController extends Controller
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
        $this->validate($request,[
            'Vote_Title' => 'required',
            'Name_of_Contestant' => 'required',
            'Email_Of_Voters' => 'required',
            'Start_Date' => 'required',
            'End_Date' => 'required',
            'Start_Time' => 'required',
            'End_Time' => 'required',
        ]);
        $Polls = new Polls;
        $Polls->votecode = 'BV'.rand(10,99).'XPPT'.rand(100,999);
        $Polls->title = $request->input('Vote_Title');
        $Polls->Contestant = $request->input('Name_of_Contestant');
        $Polls->Email_Of_Voters = $request->input('Email_Of_Voters');
        $Polls->Start_Date = $request->input('Start_Date');
        $Polls->End_Date = $request->input('End_Date');
        $Polls->Start_Time = $request->input('Start_Time');
        $Polls->End_Time = $request->input('End_Time');
        $Polls->save();

        return redirect('/CreatePoll')->with('success','Your Poll Has been Successfully Created.<br> Your Vote Code is '.$Polls->votecode);



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
