<?php

namespace App\Http\Controllers;

use App\DeductionsCredits;
use Illuminate\Http\Request;

class DeductionsCreditsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function charitiesDonationsCreate()
    {
        $deductions_credit = auth()->user()->personals()->first()->deductions_credit()->first();

        return view('deductions_credits.charities-donations', compact('deductions_credit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function charitiesDonationsStore(Request $request)
    {
        auth()->user()->personals()->first()->deductions_credit()->create([
            'cash_donations' => $request->cash_donations,
            'cash_donations_amount' => $request->cash_donations_amount,
            'non_cash_donations' => $request->non_cash_donations,
            'non_cash_donations_amount' => $request->non_cash_donations_amount,
            'donation_carryover' => $request->donation_carryover,
            'standard_mileage' => $request->standard_mileage,
            'standard_mileage_amount' => $request->standard_mileage_amount,
            'non_pocket' => $request->non_pocket,
        ]);
        return redirect()->route('charities-donations.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeductionsCredits  $deductions_credit
     * @return \Illuminate\Http\Response
     */
    public function charitiesDonationsUpdate(Request $request, DeductionsCredits $deductions_credit)
    {
        $deductions_credit->update([
            'cash_donations' => $request->cash_donations,
            'cash_donations_amount' => $request->cash_donations_amount,
            'non_cash_donations' => $request->non_cash_donations,
            'non_cash_donations_amount' => $request->non_cash_donations_amount,
            'donation_carryover' => $request->donation_carryover,
            'standard_mileage' => $request->standard_mileage,
            'standard_mileage_amount' => $request->standard_mileage_amount,
            'non_pocket' => $request->non_pocket,
        ]);
        return redirect()->route('charities-donations.create');
    }

    public function medicalExpensesCreate()
    {
        $deductions_credit = auth()->user()->personals()->first()->deductions_credit()->first();

        return view('deductions_credits.medical-expenses', compact('deductions_credit'));
    }

    public function medicalExpensesStore(Request $request)
    {
        auth()->user()->personals()->first()->deductions_credit()->create([
            'health' => $request->health,
            'long_term' => $request->long_term,
            'doctor' => $request->doctor,
            'hospital' => $request->hospital,
            'prescriptions' => $request->prescriptions,
            'equipment' => $request->equipment,
            'travel' => $request->travel,
            'other' => $request->other,
        ]);
        return redirect()->route('medical-expenses.create');
    }

    public function medicalExpensesUpdate(Request $request, DeductionsCredits $deductions_credit)
    {
        $deductions_credit->update([
            'health' => $request->health,
            'long_term' => $request->long_term,
            'doctor' => $request->doctor,
            'hospital' => $request->hospital,
            'prescriptions' => $request->prescriptions,
            'equipment' => $request->equipment,
            'travel' => $request->travel,
            'other' => $request->other,
        ]);
        return redirect()->route('medical-expenses.create');
    }

    public function taxesCreate ()
    {
        $deductions_credit = auth()->user()->personals()->first()->deductions_credit()->first();

        return view('deductions_credits.taxes', compact('deductions_credit'));
    }

    public function taxesStore(Request $request)
    {
        auth()->user()->personals()->first()->deductions_credit()->create([
            'sales_tax' => $request->sales_tax,
            'own_money' => $request->own_money,
            'pay_tax' => $request->pay_tax,
            'other_tax' => $request->other_tax,
            'applied_refund' => $request->applied_refund,
            'file_extension' => $request->file_extension,
            'personal_tax' => $request->personal_tax,
            'other_deductible_tax' => $request->other_deductible_tax,
            'other_deductible_tax_desc' => $request->other_deductible_tax_desc,
        ]);
        return redirect()->route('taxes.create');
    }

    public function taxesUpdate(Request $request, DeductionsCredits $deductions_credit)
    {
        $deductions_credit->update([
            'sales_tax' => $request->sales_tax,
            'own_money' => $request->own_money,
            'pay_tax' => $request->pay_tax,
            'other_tax' => $request->other_tax,
            'applied_refund' => $request->applied_refund,
            'file_extension' => $request->file_extension,
            'personal_tax' => $request->personal_tax,
            'other_deductible_tax' => $request->other_deductible_tax,
            'other_deductible_tax_desc' => $request->other_deductible_tax_desc,
        ]);
        return redirect()->route('taxes.create');
    }
}
