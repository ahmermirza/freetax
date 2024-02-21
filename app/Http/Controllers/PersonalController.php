<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = Personal::first();
        return view('personal.create', compact('personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'occupation' => 'required',
            'dob' => 'required',
            'middle_initial' => 'required',
            'suffix' => 'required',
            'ssn' => 'required',
            'street_address' => 'required',
            'apt_no' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip1' => 'required',
            'parent_claim' => 'required',
            'campaign_contribution' => 'required',
            'blind' => 'required',
            'passed_away' => 'required',
        ], [
            'zip1.required' => 'The first zip code field is required.'
        ]);
        
        auth()->user()->personals()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'occupation' => $request->occupation,
            'dob' => $request->dob,
            'middle_initial' => $request->middle_initial,
            'suffix' => $request->suffix,
            'ssn' => $request->ssn,
            'street_address' => $request->street_address,
            'apt_no' => $request->apt_no,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'parent_claim' => $request->parent_claim,
            'campaign_contribution' => $request->campaign_contribution,
            'blind' => $request->blind,
            'passed_away' => $request->passed_away,
        ]);
        return redirect()->route('personal.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'occupation' => 'required',
            'dob' => 'required',
            'middle_initial' => 'required',
            'suffix' => 'required',
            'ssn' => 'required',
            'street_address' => 'required',
            'apt_no' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip1' => 'required',
            'parent_claim' => 'required',
            'campaign_contribution' => 'required',
            'blind' => 'required',
            'passed_away' => 'required',
        ], [
            'zip1.required' => 'The first zip code field is required.'
        ]);
        
        $personal->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'occupation' => $request->occupation,
            'dob' => $request->dob,
            'middle_initial' => $request->middle_initial,
            'suffix' => $request->suffix,
            'ssn' => $request->ssn,
            'street_address' => $request->street_address,
            'apt_no' => $request->apt_no,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'parent_claim' => $request->parent_claim,
            'campaign_contribution' => $request->campaign_contribution,
            'blind' => $request->blind,
            'passed_away' => $request->passed_away,
        ]);
        return redirect()->route('personal.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
