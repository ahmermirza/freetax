<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function stateIndex() {
        $states = auth()->user()->personals()->first()->state()->get();
        return view('state.index', compact('states'));
    }

    public function stateCreate(State $state = null)
    {
        return view('state.state', compact('state'));
    }

    public function stateStore(Request $request)
    {
        $state = auth()->user()->personals()->first()->state()->create([
            'name' => $request->name,
        ]);
        return redirect()->route('state.resident.create', $state);
    }

    public function stateUpdate(Request $request, State $state)
    {
        $state->update([
            'name' => $request->name,
        ]);
        return redirect()->route('state.resident.create', $state);
    }

    public function stateResidentCreate(State $state = null)
    {
        return view('state.resident', compact('state'));
    }

    public function stateResidentStore(Request $request)
    {
        $state = auth()->user()->personals()->first()->state()->create([
            'resident_type' => $request->resident_type,
        ]);
        return redirect()->route('state.return.create', $state);
    }

    public function stateResidentUpdate(Request $request, State $state)
    {
        $state->update([
            'resident_type' => $request->resident_type,
        ]);
        return redirect()->route('state.return.create', $state);
    }

    public function basicInfoCreate(State $state = null)
    {
        return view('state.basic_info', compact('state'));
    }

    public function basicInfoStore(Request $request)
    {
        $state = auth()->user()->personals()->first()->state()->create([
            'new_address' => $request->new_address,
            'political_contribution' => $request->political_contribution,
            'identity_theft' => $request->identity_theft,
        ]);
        return redirect()->route('use.tax.create', $state);
    }

    public function basicInfoUpdate(Request $request, State $state)
    {
        $state->update([
            'new_address' => $request->new_address,
            'political_contribution' => $request->political_contribution,
            'identity_theft' => $request->identity_theft,
        ]);
        return redirect()->route('use.tax.create', $state);
    }

    public function useTaxCreate(State $state = null)
    {
        return view('state.use_tax', compact('state'));
    }

    public function useTaxStore(Request $request)
    {
        auth()->user()->personals()->first()->state()->create([
            'made_purchase' => $request->made_purchase,
            'use_tax' => $request->use_tax,
            'purchase_total' => $request->purchase_total,
            'purchase_sale_tax' => $request->purchase_sale_tax,
        ]);
        return redirect()->route('state.index');
    }

    public function useTaxUpdate(Request $request, State $state)
    {
        $state->update([
            'made_purchase' => $request->made_purchase,
            'use_tax' => $request->use_tax,
            'purchase_total' => $request->purchase_total,
            'purchase_sale_tax' => $request->purchase_sale_tax,
        ]);
        return redirect()->route('state.index');
    }

    public function stateEdit()
    {
        $states = auth()->user()->personals()->first();
        return view('state.state', compact('states'));
    }

    public function stateDelete(State $state)
    {
        $state->delete();
        return back();
    }

    public function completed()
    {
        return view('state.completed');
    }
}
