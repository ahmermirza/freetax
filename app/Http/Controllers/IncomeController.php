<?php

namespace App\Http\Controllers;

use App\Income;
use App\W2;
use Illuminate\Http\Request;

class IncomeController extends Controller
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
            return view('income.create', compact('personal'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    public function unemploymentCompensation()
    {
        return view('income.unemployment');
    }

    public function otherUnemploymentCompensation ()
    {
        return view('income.other_unemployment');
    }

    public function socialSecurityBenefits ()
    {
        return view('income.social_security_benefits');
    }

    public function crypto ()
    {
        return view('income.crypto');
    }
}
