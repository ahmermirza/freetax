<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionsCreditsController extends Controller
{
    public function charitiesDonations ()
    {
        return view('deductions_credits.charities-donations');
    }

    public function medicalExpenses ()
    {
        return view('deductions_credits.medical-expenses');
    }

    public function taxes ()
    {
        return view('deductions_credits.taxes');
    }
}
