<?php

namespace App\Http\Controllers;

use App\Unemployment;
use Illuminate\Http\Request;

class UnemploymentController extends Controller
{
    public function unemploymentCompensationCreate()
    {
        $unemployment = auth()->user()->personals()->first()->unemployment()->first();
        return view('income.unemployment', compact('unemployment'));
    }

    public function unemploymentCompensationStore(Request $request)
    {
        auth()->user()->personals()->first()->unemployment()->create([
            'received_unemployment' => $request->received_unemployment,
            'received_other_unemployment' => $request->received_other_unemployment,
            'spouse_received_unemployment' => $request->spouse_received_unemployment,
            'spouse_received_other_unemployment' => $request->spouse_received_other_unemployment,
        ]);
        return redirect()->route('income.unemployment.create');
    }

    public function unemploymentCompensationUpdate(Request $request, Unemployment $unemployment_compensation)
    {
        $unemployment_compensation->update([
            'received_unemployment' => $request->received_unemployment,
            'received_other_unemployment' => $request->received_other_unemployment,
            'spouse_received_unemployment' => $request->spouse_received_unemployment,
            'spouse_received_other_unemployment' => $request->spouse_received_other_unemployment,
        ]);
        return redirect()->route('income.unemployment.create');
    }

    public function otherUnemploymentCompensationCreate()
    {
        $unemployment = auth()->user()->personals()->first()->unemployment()->first();
        return view('income.other_unemployment', compact('unemployment'));
    }

    public function otherUnemploymentCompensationStore(Request $request)
    {
        auth()->user()->personals()->first()->unemployment()->create([
            'union_unemployment' => $request->union_unemployment,
            'private_fund_unemployment' => $request->private_fund_unemployment,
            'state_unemployment_benefit' => $request->state_unemployment_benefit,
            'spouse_union_unemployment' => $request->spouse_union_unemployment,
            'spouse_private_fund_unemployment' => $request->spouse_private_fund_unemployment,
            'spouse_state_unemployment_benefit' => $request->spouse_state_unemployment_benefit,
        ]);
        return redirect()->route('income.other.unemployment.create');
    }

    public function otherUnemploymentCompensationUpdate(Request $request, Unemployment $unemployment_compensation)
    {
        $unemployment_compensation->update([
            'union_unemployment' => $request->union_unemployment,
            'private_fund_unemployment' => $request->private_fund_unemployment,
            'state_unemployment_benefit' => $request->state_unemployment_benefit,
            'spouse_union_unemployment' => $request->spouse_union_unemployment,
            'spouse_private_fund_unemployment' => $request->spouse_private_fund_unemployment,
            'spouse_state_unemployment_benefit' => $request->spouse_state_unemployment_benefit,
        ]);
        return redirect()->route('income.other.unemployment.create');
    }

    public function socialSecurityBenefitsCreate()
    {
        $unemployment = auth()->user()->personals()->first()->unemployment()->first();
        return view('income.social_security_benefits', compact('unemployment'));
    }

    public function socialSecurityBenefitsStore(Request $request)
    {
        auth()->user()->personals()->first()->unemployment()->create([
            'ssb' => $request->ssb,
            'ssb_repaid' => $request->ssb_repaid,
            'ssb_federal' => $request->ssb_federal,
            'ssb_medi' => $request->ssb_medi,
            'ssb_received_ss' => $request->ssb_received_ss,
            'ssb_received_benefits' => $request->ssb_received_benefits,
            'spouse_ssb' => $request->spouse_ssb,
            'spouse_ssb_repaid' => $request->spouse_ssb_repaid,
            'spouse_ssb_federal' => $request->spouse_ssb_federal,
            'spouse_ssb_medi' => $request->spouse_ssb_medi,
            'spouse_ssb_received_ss' => $request->spouse_ssb_received_ss,
            'spouse_ssb_received_benefits' => $request->spouse_ssb_received_benefits,
        ]);
        return redirect()->route('income.ssb.create');
    }

    public function socialSecurityBenefitsUpdate(Request $request, Unemployment $unemployment)
    {
        $unemployment->update([
            'ssb' => $request->ssb,
            'ssb_repaid' => $request->ssb_repaid,
            'ssb_federal' => $request->ssb_federal,
            'ssb_medi' => $request->ssb_medi,
            'ssb_received_ss' => $request->ssb_received_ss,
            'ssb_received_benefits' => $request->ssb_received_benefits,
            'spouse_ssb' => $request->spouse_ssb,
            'spouse_ssb_repaid' => $request->spouse_ssb_repaid,
            'spouse_ssb_federal' => $request->spouse_ssb_federal,
            'spouse_ssb_medi' => $request->spouse_ssb_medi,
            'spouse_ssb_received_ss' => $request->spouse_ssb_received_ss,
            'spouse_ssb_received_benefits' => $request->spouse_ssb_received_benefits,
        ]);
        return redirect()->route('income.ssb.create');
    }

    public function cryptoCreate()
    {
        $unemployment = auth()->user()->personals()->first()->unemployment()->first();
        return view('income.crypto', compact('unemployment'));
    }

    public function cryptoStore(Request $request)
    {
        auth()->user()->personals()->first()->unemployment()->create([
            'crypto' => $request->crypto,
        ]);
        return redirect()->route('income.crypto.create');
    }

    public function cryptoUpdate(Request $request, Unemployment $unemployment)
    {
        $unemployment->update([
            'crypto' => $request->crypto,
        ]);
        return redirect()->route('income.crypto.create');
    }
}
