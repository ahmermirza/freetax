<?php

namespace App\Http\Controllers;

use App\MortgageInterest;
use Illuminate\Http\Request;

class MortgageInterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mortgage_interests = auth()->user()->personals()->first()->mortgage_interest()->get();
        return view('deductions_credits.mortgage_interest.index', compact('mortgage_interests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deductions_credits.mortgage_interest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal = auth()->user()->personals()->first();

            // Check if the user has a personal
            if ($personal) {
                $mortgage_interest = $personal->mortgage_interest()->create([
                    'refinanced' => $request->refinanced,
                    'lender_name' => $request->lender_name,
                    'deductible_mortgage' => $request->deductible_mortgage,
                    'outstanding_mortgage' => $request->outstanding_mortgage,
                    'dob' => $request->dob,
                    'refund_overpaid' => $request->refund_overpaid,
                    'pmi' => $request->pmi,
                    'points_paid' => $request->points_paid,
                    'money_used' => $request->money_used,
                    'main_home' => $request->main_home,
                ]);
            }
        return redirect()->route('mortgage-interest.estate.edit', $mortgage_interest);
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
    public function edit(MortgageInterest $mortgage_interest)
    {
        return view('deductions_credits.mortgage_interest.edit', compact('mortgage_interest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MortgageInterest $mortgage_interest)
    {
        $mortgage_interest->update([
            'refinanced' => $request->refinanced,
            'lender_name' => $request->lender_name,
            'deductible_mortgage' => $request->deductible_mortgage,
            'outstanding_mortgage' => $request->outstanding_mortgage,
            'dob' => $request->dob,
            'refund_overpaid' => $request->refund_overpaid,
            'pmi' => $request->pmi,
            'points_paid' => $request->points_paid,
            'money_used' => $request->money_used,
            'main_home' => $request->main_home,
        ]);
        return redirect()->route('mortgage-interest.estate.edit', $mortgage_interest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MortgageInterest $mortgage_interest)
    {
        $mortgage_interest->delete();
        return back();
    }

    public function estateTaxes (MortgageInterest $mortgage_interest)
    {
        return view('deductions_credits.mortgage_interest.estate-taxes', compact('mortgage_interest'));
    }

    public function estateTaxesUpdate (MortgageInterest $mortgage_interest, Request $request)
    {
        $mortgage_interest->update([
            'estate_tax' => $request->estate_tax,
        ]);
        return redirect()->route('mortgage-interest.index');
    }
}
