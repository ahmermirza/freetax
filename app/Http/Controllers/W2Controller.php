<?php

namespace App\Http\Controllers;

use App\W2;
use Illuminate\Http\Request;

class W2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $w_2 = W2::all();
        return view('income.w_2.index', compact('w_2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income.w_2.create');
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
            'ein' => 'required',
            'emp_name' => 'required',
            'emp_address' => 'required',
            'emp_city' => 'required',
            'emp_state' => 'required',
            'emp_zip1' => 'required',
            'federal_wages' => 'required',
        ]);

        if (isset($request->w2_for) && $request->w2_for == 'spouse') {
            dd(auth()->user()->personals()->first()->spouse()->w2());
            auth()->user()->personals()->first()->spouse()->w2()->create([
                'ein' => $request->ein,
                'emp_name' => $request->emp_name,
                'emp_foreign_address' => $request->emp_foreign_address,
                'emp_address' => $request->emp_address,
                'emp_city' => $request->emp_city,
                'emp_state' => $request->emp_state,
                'emp_zip' => json_encode(['emp_zip1' => $request->emp_zip1, 'emp_zip2' => $request->emp_zip2]),
                'federal_wages' => $request->federal_wages,
                'federal_income_tax' => $request->federal_income_tax,
                'federal_ss_wages' => $request->federal_ss_wages,
                'federal_ss_tax' => $request->federal_ss_tax,
                'federal_medicare_wages' => $request->federal_medicare_wages,
                'federal_medicare_tax' => $request->federal_medicare_tax,
                'federal_ss_tips' => $request->federal_ss_tips,
                'federal_allocated_tips' => $request->federal_allocated_tips,
                'federal_empty' => $request->federal_empty,
                'federal_dependent' => $request->federal_dependent,
                'federal_nonqualified' => $request->federal_nonqualified,
                'code_1' => $request->code_1,
                'amount_1' => $request->amount_1,
                'code_2' => $request->code_2,
                'amount_2' => $request->amount_2,
                'statutory_employee' => $request->statutory_employee,
                'eetirement_plan' => $request->eetirement_plan,
                'third_party_pay' => $request->third_party_pay,
                'other_desc' => $request->other_desc,
                'other_amount' => $request->other_amount,
                'employer_state' => $request->employer_state,
                'employer_sin' => $request->employer_sin,
                'employer_state_wages' => $request->employer_state_wages,
                'employer_state_income_tax' => $request->employer_state_income_tax,
                'employer_local_wages' => $request->employer_local_wages,
                'employer_local_income_tax' => $request->employer_local_income_tax,
                'employer_locality' => $request->employer_locality,
                'w2_standard' => $request->w2_standard,
                'w2_corrected' => $request->w2_corrected,
            ]);
        } else {
            auth()->user()->personals()->first()->w2()->create([
                'ein' => $request->ein,
                'emp_name' => $request->emp_name,
                'emp_foreign_address' => $request->emp_foreign_address,
                'emp_address' => $request->emp_address,
                'emp_city' => $request->emp_city,
                'emp_state' => $request->emp_state,
                'emp_zip' => json_encode(['emp_zip1' => $request->emp_zip1, 'emp_zip2' => $request->emp_zip2]),
                'federal_wages' => $request->federal_wages,
                'federal_income_tax' => $request->federal_income_tax,
                'federal_ss_wages' => $request->federal_ss_wages,
                'federal_ss_tax' => $request->federal_ss_tax,
                'federal_medicare_wages' => $request->federal_medicare_wages,
                'federal_medicare_tax' => $request->federal_medicare_tax,
                'federal_ss_tips' => $request->federal_ss_tips,
                'federal_allocated_tips' => $request->federal_allocated_tips,
                'federal_empty' => $request->federal_empty,
                'federal_dependent' => $request->federal_dependent,
                'federal_nonqualified' => $request->federal_nonqualified,
                'code_1' => $request->code_1,
                'amount_1' => $request->amount_1,
                'code_2' => $request->code_2,
                'amount_2' => $request->amount_2,
                'statutory_employee' => $request->statutory_employee,
                'eetirement_plan' => $request->eetirement_plan,
                'third_party_pay' => $request->third_party_pay,
                'other_desc' => $request->other_desc,
                'other_amount' => $request->other_amount,
                'employer_state' => $request->employer_state,
                'employer_sin' => $request->employer_sin,
                'employer_state_wages' => $request->employer_state_wages,
                'employer_state_income_tax' => $request->employer_state_income_tax,
                'employer_local_wages' => $request->employer_local_wages,
                'employer_local_income_tax' => $request->employer_local_income_tax,
                'employer_locality' => $request->employer_locality,
                'w2_standard' => $request->w2_standard,
                'w2_corrected' => $request->w2_corrected,
            ]);
        }

        return redirect()->route('w-2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function show(W2 $w2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function edit(W2 $w2)
    {
        return view('income.w_2.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, W2 $w2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\W2  $w2
     * @return \Illuminate\Http\Response
     */
    public function destroy(W2 $w2)
    {
        $w2->delete();
        return back();
    }

    public function ministerClergyWages()
    {
        return view('income.w_2.mcw');
    }
}
