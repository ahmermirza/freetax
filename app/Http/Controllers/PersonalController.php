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
    public function create(Request $request)
    {
        $personal = auth()->user()->personals()->first();

        if ($request->has('info') && $request->info == 'basic') {
            return view('personal.create', compact('personal'));
        }
        elseif ($request->has('info') && $request->info == 'filing-status') {
            return view('personal.filing_status', compact('personal'));
        }
        elseif ($request->has('info') && $request->info == 'spouse' && auth()->user()->personals()->first() && in_array(auth()->user()->personals()->first()->filing_status, [2, 3])) {
            return view('personal.spouse', compact('personal'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('info') && $request->info == 'basic') {
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
                'zip' => json_encode(['zip1' => $request->zip1, 'zip2' => $request->zip2]),
                'address_changed' => $request->address_changed,
                'parent_claim' => $request->parent_claim,
                'campaign_contribution' => $request->campaign_contribution,
                'blind' => $request->blind,
                'passed_away' => $request->passed_away,
            ]);
            return redirect()->route('personal.create', ['info' => 'basic']);
        }

        elseif ($request->has('info') && $request->info == 'filing-status') {
            $this->validate($request, [
                'filing_status' => 'required',
            ]);


            auth()->user()->personals()->create([
                'filing_status' => $request->filing_status,
            ]);
            return redirect()->route('personal.create', ['info' => 'filing-status']);
        }

        elseif ($request->has('info') && $request->info == 'spouse') {
            $this->validate($request, [
                'spouse_first_name' => 'required',
                'spouse_last_name' => 'required',
                'spouse_occupation' => 'required',
                'spouse_dob' => 'required',
                'spouse_middle_initial' => 'required',
                'spouse_suffix' => 'required',
                'spouse_ssn' => 'required',
                'spouse_parent_claim' => 'required',
                'spouse_campaign_contribution' => 'required',
                'spouse_blind' => 'required',
                'spouse_passed_away' => 'required',
            ]);


            auth()->user()->personals()->create([
                'spouse_first_name' => $request->spouse_first_name,
                'spouse_last_name' => $request->spouse_last_name,
                'spouse_occupation' => $request->spouse_occupation,
                'spouse_dob' => $request->spouse_dob,
                'spouse_middle_initial' => $request->spouse_middle_initial,
                'spouse_suffix' => $request->spouse_suffix,
                'spouse_ssn' => $request->spouse_ssn,
                'spouse_parent_claim' => $request->spouse_parent_claim,
                'spouse_campaign_contribution' => $request->spouse_campaign_contribution,
                'spouse_blind' => $request->spouse_blind,
                'spouse_passed_away' => $request->spouse_passed_away,
            ]);
            return redirect()->route('personal.create', ['info' => 'spouse']);
        }
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
        if ($request->has('info') && $request->info == 'basic') {
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
                'address_changed' => $request->address_changed,
                'parent_claim' => $request->parent_claim,
                'campaign_contribution' => $request->campaign_contribution,
                'blind' => $request->blind,
                'passed_away' => $request->passed_away,
            ]);
            return redirect()->route('personal.create', ['info' => 'basic']);
        }
        elseif ($request->has('info') && $request->info == 'filing-status') {
            $this->validate($request, [
                'filing_status' => 'required',
            ]);

            $personal->update([
                'filing_status' => $request->filing_status,
            ]);
            return redirect()->route('personal.create', ['info' => 'filing-status']);
        }
        elseif ($request->has('info') && $request->info == 'spouse') {
            
            $this->validate($request, [
                'spouse_first_name' => 'required',
                'spouse_last_name' => 'required',
                'spouse_occupation' => 'required',
                'spouse_dob' => 'required',
                'spouse_middle_initial' => 'required',
                'spouse_suffix' => 'required',
                'spouse_ssn' => 'required',
                'spouse_parent_claim' => 'required',
                'spouse_campaign_contribution' => 'required',
                'spouse_blind' => 'required',
                'spouse_passed_away' => 'required',
            ]);

            $personal->update([
                'spouse_first_name' => $request->spouse_first_name,
                'spouse_last_name' => $request->spouse_last_name,
                'spouse_occupation' => $request->spouse_occupation,
                'spouse_dob' => $request->spouse_dob,
                'spouse_middle_initial' => $request->spouse_middle_initial,
                'spouse_suffix' => $request->spouse_suffix,
                'spouse_ssn' => $request->spouse_ssn,
                'spouse_parent_claim' => $request->spouse_parent_claim,
                'spouse_campaign_contribution' => $request->spouse_campaign_contribution,
                'spouse_blind' => $request->spouse_blind,
                'spouse_passed_away' => $request->spouse_passed_away,
            ]);
            return redirect()->route('personal.create', ['info' => 'spouse']);
        }
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
