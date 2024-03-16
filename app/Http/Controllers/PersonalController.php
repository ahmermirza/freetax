<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
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
            if($personal != null) {
                return view('personal.filing_status', compact('personal'));
            } else {
                return redirect()->route('personal.create', ['info' => 'basic']);
            }
        }
        elseif ($request->has('info') && $request->info == 'spouse') {
            if($personal && in_array($personal->filing_status, [2, 3])) {
                return view('personal.spouse', compact('personal'));
            } else {
                return redirect()->route('personal.create', ['info' => 'basic']);
            }
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
                'ssn' => 'required',
                'street_address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip1' => 'required',
            ], [
                'zip1.required' => 'The first zip code field is required.'
            ]);

            if(auth()->user()->personals()->count() == 0){
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
            }
            return redirect()->route('personal.create', ['info' => 'filing-status']);
        }

        elseif ($request->has('info') && $request->info == 'filing-status') {
            $this->validate($request, [
                'filing_status' => 'required',
            ]);


            if(auth()->user()->personals()->count() == 0){
                auth()->user()->personals()->create([
                    'filing_status' => $request->filing_status,
                ]);
            }
            return redirect()->route('personal.create', ['info' => 'filing-status']);
        }

        elseif ($request->has('info') && $request->info == 'spouse') {
            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'occupation' => 'required',
                'dob' => 'required',
                'ssn' => 'required',
            ]);

            if(auth()->user()->personals()->first()->spouse()->count() == 0){
                auth()->user()->personals()->first()->spouse()->create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'occupation' => $request->occupation,
                    'dob' => $request->dob,
                    'middle_initial' => $request->middle_initial,
                    'suffix' => $request->suffix,
                    'ssn' => $request->ssn,
                    'parent_claim' => $request->parent_claim,
                    'campaign_contribution' => $request->campaign_contribution,
                    'blind' => $request->blind,
                    'passed_away' => $request->passed_away,
                ]);
            }
            return redirect()->route('dependents.index');
        }
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

            $personal->update([
                'filing_status' => $request->filing_status,
            ]);
            return redirect()->route('personal.create', ['info' => 'filing-status']);
        }
        elseif ($request->has('info') && $request->info == 'spouse') {
            
            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'occupation' => 'required',
                'dob' => 'required',
                'middle_initial' => 'required',
                'suffix' => 'required',
                'ssn' => 'required',
                'parent_claim' => 'required',
                'campaign_contribution' => 'required',
                'blind' => 'required',
                'passed_away' => 'required',
            ]);

            $personal->spouse()->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'occupation' => $request->occupation,
                'dob' => $request->dob,
                'middle_initial' => $request->middle_initial,
                'suffix' => $request->suffix,
                'ssn' => $request->ssn,
                'parent_claim' => $request->parent_claim,
                'campaign_contribution' => $request->campaign_contribution,
                'blind' => $request->blind,
                'passed_away' => $request->passed_away,
            ]);
            return redirect()->route('personal.create', ['info' => 'spouse']);
        }
    }
}
